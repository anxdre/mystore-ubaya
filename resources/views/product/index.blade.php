<!-- Halo selamat datang di <?php echo $title ?> <br/>
Halo selamat datang di  {{$title}} <br/>

Berikut ini isi table anda.
<table>
.....
</table> -->

@extends('utama')
@section('isi')



<div class="container">
  <h2>Table Products</h2>
  <p></p>            
  <a class="btn btn-info" data-toggle="modal" href="#disclaimer">Disclaimer</a>
  <table class="table table-striped">
    <thead>
    <?php echo $title ?>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Harga Jual</th>
        <th>Harga Produksi</th>
        <th>Stok</th>
        <th>Created At</th>
        <th>Updated At</th>
        <!-- <th>Category ID</th>
        <th>Supplier ID</th> -->
      </tr>
    </thead>
    <tbody>
        @foreach($queryModel as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->harga_jual}}</td>
        <td>{{$d->harga_produksi}}</td>
        <td>{{$d->stok}}</td>
        <td>{{$d->created_at}}</td>
        <td>{{$d->updated_at}}</td>
        <!-- <td>{{$d->category_id}}-{{$d->category->name}}</td>
        <td>{{$d->supplier_id}}-{{$d->supplier->name}}</td> -->


<td>
<a class="btn btn-primary"  
  data-toggle="modal" href="#showphoto_{{$d->id}}">Show Photo</a>  
<div class="modal fade" id="showphoto_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">{{$d->name}}</h4>
        </div>
        <div class="modal-body">
           <img src='image/{{ $d->id }}.jpg' height='200px' />
         
        </div>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
  </div>
</div>
</td>


      </tr>
      @endforeach
     
    </tbody>
  </table>
  <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>
@endsection


@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("products.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection



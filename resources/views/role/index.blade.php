<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  <h4 class="modal-title">User in role</h4>
</div>
<div class="modal-body">
  <!--next slide -->
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

<div class='row'>
@foreach($dd as $d)
    <div class='col-md-4' style='border:1px solid #eee;text-align:center'>
    <!-- <img src="{{ asset('images/'.$d->id.'.jpg') }}" height='200px' /></a> <br> -->
    {{ $d->name }} <br>
    
    </div>
@endforeach
</div>

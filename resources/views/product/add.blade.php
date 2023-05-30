@extends('utama')

@section('isi')
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
    <div>
        <form method="post" action="{{route('product.store')}}">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="name" name="productName" class="form-control" id="productName" aria-describedby="emailHelp"
                       placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" name="productPrice" class="form-control" id="productPrice" aria-describedby="emailHelp"
                       placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="productionCost">Production Cost</label>
                <input type="number" name="productCost" class="form-control" id="productionCost" aria-describedby="emailHelp"
                       placeholder="Enter production cost">
            </div>
            <div class="form-group">
                <label for="productStock">Stock</label>
                <input type="number" name="productStock" class="form-control" id="productionCost" aria-describedby="emailHelp"
                       placeholder="Enter stock">
            </div>
            <div class="form-group">
                <label>Product Category</label>
                <select class="form-control">
                   @foreach($dataCategory as $data)
                       <option>{{$data->name}}</option>
                   @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

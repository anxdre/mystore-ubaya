@extends('layouts.app')
@section('title','Manage Product')
@section('menu-product','active')
@section('content')

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Manage Item</h4>
                    <a href="/product/create" class="btn btn-icon icon-left btn-warning"><i class="fas fa-plus"></i>Add
                        New Item</a>
                </div>
                <div class="card-body">
                    <div class="float-left">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            @forelse($listOfProduct as $product)
                                @once
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                @endonce
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>
                                        <a href="#">
                                            <div class="d-inline-block ml-1">{{$product->supplier->name}}</div>
                                        </a>
                                    </td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a href="#" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                        <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>

                            @empty
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Ups ...</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-primary alert-has-icon">
                                                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                                <div class="alert-body">
                                                    <div class="alert-title">Data masih kosong</div>
                                                    Yuk tambahkan barangmu sekarang juga 😊
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

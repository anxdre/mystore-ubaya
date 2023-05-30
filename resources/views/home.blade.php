@extends('layouts.app')

@section('title','My Store')
@section('menu-'.$id,'active')

@section('content')
    <div class="row">
        @forelse($listOfProduct as $data)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image" data-background="{{asset('')}}assets/img/products/product-1-50.png"
                             style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                        </div>
                        <div class="article-badge">
                            <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Trending</div>
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title">
                            <h2><a href="#">{{$data->name}}</a></h2>
                        </div>
                        <p>{{$data->harga_jual}}</p>
                        <div class="article-cta">
                            <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        @empty

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ups ...</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning alert-has-icon">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">Data tidak ditemukan</div>
                                Yuk saatnya kamu jualan barang di kategori ini 😊
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </section>
    @endforelse
    </div>
@endsection


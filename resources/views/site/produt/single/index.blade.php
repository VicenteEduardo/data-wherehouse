@extends('layouts.merge.site')
@section('titulo', 'Detalhe do Produto')
@section('content')
    <main>
        <!-- breadcrumb__area-start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb__area-end -->

        <!-- product-details-start -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="thumbOne-tab" data-bs-toggle="tab"
                                        data-bs-target="#thumbOne" type="button" role="tab" aria-controls="thumbOne"
                                        aria-selected="true">
                                        <img src="/storage/{{ $product->photo }}" alt="">
                                    </button>
                                </li>


                            </ul>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">
                                    <div class="tab-pane fade show active" id="thumbOne" role="tabpanel"
                                        aria-labelledby="thumbOne-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="/storage/{{ $product->photo }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbTwo" role="tabpanel"
                                        aria-labelledby="thumbTwo-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="/storage/{{ $product->photo }}" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product__details-content">
                            <h6>{{ $product->name }}</h6>

                            <div class="price mb-10">
                                <span>{!! number_format($product->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                            </div>
                            <div class="features-des mb-20 mt-10">
                                <ul>
                                    <li><a href="#"><i class="fas fa-circle"></i>{{ $product->description }}</a></li>

                                </ul>
                            </div>

                            <div class="cart-option mb-15">

                                <div class="product-quantity mr-20">
                                    <form action="/carrinho/{{ $product->id }}/produto ">
                                        @csrf


                                        <div class="cart-plus-minus p-relative">

                                            <input type="text" value="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                </div>


                                <button class="cart-btn" type="submit">Add to Cart</button>
                                </form>
                            </div>

                            <div class="product-tag-area mt-15">
                                <div class="product_info">

                                    <span class="posted_in">
                                        <span class="title">Categoria:</span>
                                        <a href="#"></a>
                                        <a href="#">{{ $product->category }}</a>
                                    </span>
                                    <span class="tagged_as">
                                        <span>Produtos Comprados:</span>
                                        <a href="#">{{ $OrderedItem }}</a>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-end -->

        <!-- product-details-des-start -->




        <!-- topsell__area-start -->
        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Outros Produtos</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="flast-sell-tabContent">
                            <div class="tab-pane fade active show" id="computer" role="tabpanel"
                                aria-labelledby="computer-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">


                                            @foreach ($lasted as $item)
                                                <div class="product__item swiper-slide">
                                                    <div class="product__thumb fix">
                                                        <div class="product-image w-img">
                                                            <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                                <img src="/storage/{{ $item->photo }}" alt="product">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="product__content">
                                                        <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->name }}</a></h6>
                                                        <div class="rating mb-5">


                                                        </div>
                                                        Principais ofertas do dia
                                                        <div class="price">
                                                            <span> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__add-cart text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf
                                                            <div class="cart-plus-minus"><input
                                                                    placeholder="Quantidade de Grades" name="grades"
                                                                    type="text" value="1">
                                                                <div class="dec qtybutton">-</div>
                                                                <div class="inc qtybutton">+</div>
                                                            </div>
                                                            <button type="submit"
                                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                                Adicionar ao carrinho
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                                <div class="product-bs-slider-2">
                                    <div class="product-slider-2 swiper-container">
                                        <div class="swiper-wrapper">

                                        </div>
                                        <!-- If we need navigation buttons -->
                                    </div>
                                    <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                    <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection

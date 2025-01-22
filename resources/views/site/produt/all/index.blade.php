@extends('layouts.merge.site')
@section('titulo', ' Produtos')
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

        <!-- shop-area-start -->
        <div class="shop-area mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="product-widget mb-30">
                            <h5 class="pt-title">Categorias de Produtos</h5>
                            <div class="widget-category-list mt-20">
                                <form action="#">
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Latas <span>({{ $latas }})</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Garrafas <span>({{ $garrafas }})</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Cervejas<span>({{ $cervejas }})</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Whisks<span>({{ $whisks }})</span></label>
                                    </div>

                                </form>
                            </div>
                        </div>



                        <div class="product-widget mb-30">
                            <h5 class="pt-title">Ofertas especiais</h5>
                            <div class="product__sm mt-20">
                                <ul>


                                    @foreach ($dealsDays as $item)
                                        <li class="product__sm-item d-flex align-items-center">
                                            <div class="product__sm-thumb mr-20">
                                                <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                    <img src="/storage/{{ $item->products->photo }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__sm-content">
                                                <h5 class="product__sm-title">
                                                    <a href="{!! url('/produtos/' . urlencode($item->products->name)) !!}">{{ $item->products->name }}</a>
                                                </h5>
                                                <div class="product__sm-price">
                                                    <span class="price">{!! number_format($item->products->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-banner mb-30">
                            <div class="banner-image">
                                <img class="banner-l" src="/storage/{{ $publicity->photo }}" width="200" height="350"
                                    alt="">
                                <img class="banner-sm" src="assets/img/banner/sl-banner-sm.png" alt="">
                                <div class="banner-content text-center">
                                    <p class="banner-text mb-30">{{ $publicity->name }}</p>

                                </div>
                            </div>
                        </div>
                        <div class="product-lists-top">
                            <div class="product__filter-wrap">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                        <div class="product__filter d-sm-flex align-items-center">
                                            <div class="product__col">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="FourCol-tab"
                                                            data-bs-toggle="tab" data-bs-target="#FourCol" type="button"
                                                            role="tab" aria-controls="FourCol" aria-selected="true">
                                                            <i class="fal fa-th"></i>
                                                        </button>
                                                    </li>
                                                    Produtos
                                                    </button>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="productGridTabContent">
                            <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                                aria-labelledby="FourCol-tab">
                                <div class="tp-wrapper">
                                    <div class="row g-0">


                                        @foreach ($produts as $item)
                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="product__item product__item-d">
                                                    <div class="product__thumb fix">
                                                        <div class="product-image w-img">
                                                            <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                                <img src="/storage/{{ $item->photo }}" alt="product">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="product__content-3">
                                                        <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->name }}</a></h6>

                                                        <div class="price mb-10">
                                                            <span>{!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="product__add-cart-s text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf

                                                            <button type="submit"
                                                                class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                                Adicionar ao carrinho
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tp-pagination text-center">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="basic-pagination pt-30 pb-30">
                                        <nav>
                                            <ul>
                                                <b>{{ $produts->links() }}</b>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-area-end -->

        <!-- shop modal start -->
        <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab"
                                                    aria-controls="nav1" aria-selected="true">
                                                    <img src="assets/img/quick-view/quick-nav-1.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab"
                                                    aria-controls="nav2" aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-2.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab"
                                                    aria-controls="nav3" aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-3.jpg" alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab"
                                                    aria-controls="nav4" aria-selected="false">
                                                    <img src="assets/img/quick-view/quick-nav-4.jpg" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-10 mr-30">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                                <span>01 review</span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$109.00 – $307.00</span>
                                        </div>
                                        <div class="product__modal-des mt-20 mb-15">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> Bass and Stereo
                                                        Sound.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Display with 3088 x
                                                        1440 pixels resolution.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Memory, Storage & SIM:
                                                        12GB RAM, 256GB.</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Androi v10.0 Operating
                                                        system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="product__stock mb-20">
                                            <span class="mr-10">Availability :</span>
                                            <span>1795 in stock</span>
                                        </div>
                                        <div class="product__modal-form">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="cart-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__stock mb-30">
                                            <ul>
                                                <li><a href="#">
                                                        <span class="sku mr-10">SKU:</span>
                                                        <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="cat mr-10">Categories:</span>
                                                        <span>iPhone, Tablets</span></a>
                                                </li>
                                                <li><a href="#">
                                                        <span class="tag mr-10">Tags:</span>
                                                        <span>Smartphone, Tablets</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop modal end -->

    </main>


@endsection

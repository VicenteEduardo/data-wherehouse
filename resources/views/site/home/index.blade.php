@extends('layouts.merge.site')
@section('titulo', 'Portal Oficial do shazzam')
@section('content')
    <main>
        <!-- slider-area-start -->
        <div class="slider-area">
            <div class="swiper-container slider__active">
                <div class="slider-wrapper swiper-wrapper">

                    @foreach ($slideshows as $item)
                        <div class="single-slider swiper-slide slider-height d-flex align-items-center"
                            data-background="/storage/{{ $item->path }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="slider-content">
                                            <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1s">
                                                <a href="#" class="st-btn b-radius">Novidades Quentes</a>
                                            </div>
                                            <h2 data-animation="fadeInLeft" data-delay="1.5s"
                                                class="pt-15 slider-title pb-5">{{ $item->title }}</h2>
                                            <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">
                                                {{ $item->description }}</p>


                                            @if ($item->link)
                                                <div class="{{ $item->link }}">
                                                    <a data-animation="fadeInUp" data-delay="1.9s" href="shop.html"
                                                        class="st-btn-b b-radius"> {{ $item->button }}/a>
                                                </div>
                                            @endif


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /single-slider -->
                    @endforeach
                    <div class="main-slider-paginations"></div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- features__area-start -->
        <section class="features__area pt-20">
            <div class="container">
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-truck"></i>
                            </div>
                            <div class="features__content">
                                <h6>ENTREGA GRÁTIS</h6>
                                <p>Para todos os pedidos acima de 250 mil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-money-check"></i>
                            </div>
                            <div class="features__content">
                                <h6>PAGAMENTO SEGURO</h6>
                                <p>Pagamento 100% seguro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fal fa-comments-alt"></i>
                            </div>
                            <div class="features__content">
                                <h6>CENTRAL DE AJUDA 24/7</h6>
                                <p>Suporte delicado 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-20">
                                <i class="fad fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>SERVIÇOS AMIGÁVEIS</h6>
                                <p>Garantia de satisfação </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features__area-end -->

        <!-- banner__area-start -->
        <section class="banner__area pt-20 pb-10">
            <div class="container">
                <div class="row">

                    @foreach ($publicity as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="#"><img height="150" src="/storage/{{ $item->photo }}"
                                            alt=""></a>
                                </div>
                                <div class="banner__content">
                                    <h6><a href="#">{{ $item->name }}</a></h6>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- banner__area-end -->

        <!-- topsell__area-start -->
        <section class="topsell__area-1 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile-d">Promoções do Dia</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-bs-slider">
                        <div class="product-slider swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($dealsDays as $item)
                                    <div class="product__item swiper-slide">
                                        <div class="product__thumb fix">
                                            <div class="product-image w-img">
                                                <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                    <img src="/storage/{{ $item->products->photo }}" alt="product">
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product__content">
                                            <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->products->name }}</a>
                                            </h6>

                                            <div class="price mb-10">
                                                <span> {!! number_format($item->products->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                            </div>

                                        </div>
                                        <div class="product__add-cart text-center">
                                            <form action="/carrinho/{{ $item->id }}/produto ">

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
                        <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                        <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- topsell__area-end -->

        <!-- banner__area-start -->
        <section class="banner__area banner__area-d pb-10">
            <div class="container">
                <div class="row">
                    @foreach ($publicit as $item)
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="#"><img height="150" src="/storage/{{ $item->photo }}"
                                            alt=""></a>
                                </div>
                                <div class="banner__content">

                                    <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->name }}</a></h6>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- banner__area-end -->



        <!-- topsell__area-start -->
        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Todos Produtos</h5>
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


                                            @foreach ($products as $item)
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

                                                        <div class="price">
                                                            <span> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__add-cart text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf

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

        <!-- topsell__area-start -->
        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Cervejas</h5>
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


                                            @foreach ($cervejas as $item)
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

                                                        <div class="price">
                                                            <span> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__add-cart text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf

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

        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Latas</h5>
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


                                            @foreach ($latas as $item)
                                                <div class="product__item swiper-slide">
                                                    <div class="product__thumb fix">
                                                        <div class="product-image w-img">
                                                            <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                                <img src="/storage/{{ $item->photo }}" alt="product">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="product__content">
                                                        <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->name }}</a>
                                                        </h6>
                                                        <div class="rating mb-5">


                                                        </div>

                                                        <div class="price">
                                                            <span> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__add-cart text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf

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

        <section class="topsell__area-2 pt-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-10">
                            <div class="section__title">
                                <h5 class="st-titile">Garrafas</h5>
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


                                            @foreach ($garrafas as $item)
                                                <div class="product__item swiper-slide">
                                                    <div class="product__thumb fix">
                                                        <div class="product-image w-img">
                                                            <a href="{!! url('/produtos/' . urlencode($item->name)) !!}">
                                                                <img src="/storage/{{ $item->photo }}" alt="product">
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="product__content">
                                                        <h6><a href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->name }}</a>
                                                        </h6>
                                                        <div class="rating mb-5">


                                                        </div>

                                                        <div class="price">
                                                            <span> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </div>
                                                    </div>

                                                    <div class="product__add-cart text-center">
                                                        <form action="/carrinho/{{ $item->id }}/produto ">
                                                            @csrf

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
        <!-- topsell__area-end -->

        <!-- featured-start -->
        @if (isset($FeatureProduct_first->products))
            <section class="featured light-bg pt-55 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-flex justify-content-between mb-30">
                                <div class="section__title">
                                    <h5 class="st-titile">Principais produtos em destaque</h5>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="single-features-item single-features-item-d b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-md-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{!! url('/produtos/' . urlencode($item->name)) !!}"><img width="100"
                                                        src="/storage/{{ $FeatureProduct_first->products->photo }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product__content product__content-d">
                                            <h6><a
                                                    href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $FeatureProduct_first->products->name }}</a>
                                            </h6>

                                            <div class="price d-price mb-10">
                                                <span>{!! number_format($FeatureProduct_first->products->price, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                            </div>
                                            <div class="features-des mb-25">
                                                <ul>
                                                    <li><a href="{!! url('/produtos/' . urlencode($item->name)) !!}"><i class="fas fa-circle"></i>
                                                            {{ $FeatureProduct_first->products->description }}</a></li>


                                                </ul>
                                            </div>
                                            <div class="cart-option">

                                                <a href="/carrinho/{{ $FeatureProduct_first->products->id }}/produto "
                                                    class="cart-btn-2 w-100 mr-10">Adicionar ao carrinho</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">

                            <div class="row">
                                @foreach ($FeatureProducts as $item)
                                    <div class="col-md-6">
                                        <div class="single-features-item b-radius mb-20">
                                            <div class="row  g-0 align-items-center">
                                                <div class="col-6">
                                                    <div class="features-thum">
                                                        <div class="features-product-image w-img">
                                                            <a href="{!! url('/produtos/' . urlencode($item->name)) !!}"><img
                                                                    src="/storage/{{ $item->products->photo }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="product__content product__content-d">
                                                        <h6><a
                                                                href="{!! url('/produtos/' . urlencode($item->name)) !!}">{{ $item->products->name }}</a>
                                                        </h6>

                                                        <div class="price d-price">
                                                            <span>{!! number_format($item->products->price, 2, ',', '.') . ' ' . 'KZ' !!}</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif
        <!-- featured-end -->





        <!-- brand-area-start -->
        <section class="brand-area brand-area-d">
            <div class="container">
                <div class="brand-slider swiper-container pt-50 pb-45">
                    <div class="swiper-wrapper">
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="Site/logo/CASTEL_ANGOLA-Logo-01-808x800.png" alt="brand"></a>
                        </div>


                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="Site/logo/nacional distller.png" alt="brand"></a>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- brand-area-end -->

    </main>
@endsection

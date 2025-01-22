<header class="header d-blue-bg">
    <div class="header-top">
        <div class="container">
            <div class="header-inner">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="header-inner-start">
                            <div class="header__currency border-right">
                                <div class="s-name">
                                    @include('extra._translateButton.index')
                                </div>

                            </div>

                            <div class="support d-none d-sm-block">
                                <p>Preciso de ajuda? <a href="tel:">{{ $config->telefone }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                        <div class="header-inner-end text-md-end">
                            <div class="ovic-menu-wrapper">
                                <ul>
                                    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>

                                    <li><a href="{{ route('site.contact') }}">Contate-nos</a></li>


                                    <li> <a target="_blank" href="https://wa.me/24422946359245" class="">
                                            <img class="swing animated infinite" width="45"
                                                src="https://edwindjazz.ao/Site/icon/WhatsApp_icon.png" with="10">
                                        </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <div class="heade-mid-inner">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="header__info">
                            <div class="logo">
                                <a href="{{ route('site.home') }}" class="logo-image"><img
                                        src="{{ asset('Site/img/logo/logo.png') }}" width="100" alt="logo">
                                    <small class="text-white text-center">Tão rapido que ninguem viu</small>


                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="header__search">

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <form action="{{ route('site.drink') }}" method="POST">
                                @csrf
                                <div class="header__search-box">
                                    <input required  name="nomeProduto" class="search-input" type="text" placeholder="Estou comprando...">
                                    <button class="button" type="submit"><i class="far fa-search"></i></button>
                                </div>
                                <div class="header__search-cat">
                                    <select name="category" required>
                                        <option selected value="all">Todas Categorias</option>
                                        <option value="Latas">Latas</option>
                                        <option value="Garrafas">Garrafas</option>
                                        <option value="Cervejas">Cervejas</option>
                                        <option value="Whisks">Whisks</option>

                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                        <div class="header-action">
                            <div class="block-userlink">

                                @if (isset(Auth::user()->id))
                                    <a class="icon-link" href="{{ route('admin.home') }}">
                                        <i class="flaticon-user"></i>

                                        <span class="text">

                                            <span class="sub">{{ Auth::user()->name }} </span>


                                    </a>
                                @else
                                    <a class="icon-link" href="{{ route('login') }}">
                                        <i class="flaticon-user"></i>

                                        <span class="text">

                                            <span class="sub">Login </span>

                                        </span>
                                    </a>
                                @endif

                            </div>
                            <div class="block-userlink">

                                @if (!isset(Auth::user()->id))
                                    <a class="icon-link" href="{{ route('site.customerAccount.create') }}">
                                        <i class="flaticon-user"></i>

                                        <span class="text">

                                            <span class="sub">Criar Conta </span>

                                        </span>
                                    </a>
                                @endif

                            </div>
                            <div class="block-wishlist action">
                                <a class="icon-link" href="{{ route('site.cat.show') }}">

                                    <i class="fab fa-github"></i>



                                    <span class="count">@php
                                        echo count(session('cat', []));
                                    @endphp</span>
                                    <span class="text">
                                        <span class="sub">Seu carrinho</span>
                                        Total de Encomendas </span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6 col-md-6 col-3">
                    <div class="header__bottom-left d-flex d-xl-block align-items-center">
                        <div class="side-menu d-lg-none mr-20">
                            <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i
                                    class="fas fa-bars"></i></button>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('site.home') }}" class="">Home </a>

                                    </li>
                                    <li>
                                        <a href="{{ route('site.produt') }}" class="">Produtos </a>

                                    </li>
                                    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>
                                    <li class="has-mega"><a href="{{ route('site.contact') }}"> Contate-nos </a>

                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="{{ route('site.home') }}">
                    <img width="100" src="{{ asset('Site/img/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <ul>
                    <li>
                        <a href="{{ route('site.home') }}" class="">Home </a>

                    </li>
                    <li>
                        <a href="{{ route('site.produt') }}" class="">Produtos </a>

                    </li>
                    <li><a href="{{ route('site.about') }}">Sobre nós</a></li>
                    <li class="has-mega"><a href="{{ route('site.contact') }}"> Contate-nos </a>

                    </li>


                </ul>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="offcanvas__action">

            </div>
        </div>
    </div>
</div>
<!-- offcanvas area end -->
<div class="body-overlay"></div>
<div class="block-cart action">
    <a class="icon-link" href="cart.html">


        <span class="text">

    </a>
    <div class="cart">
        <div class="cart__mini">
            <ul>
                <li>
                    <div class="cart__title">
                        <h4>Your Cart</h4>
                        <span>(1 Item in Cart)</span>
                    </div>
                </li>
                <li>
                    <div class="cart__item d-flex justify-content-between align-items-center">
                        <div class="cart__inner d-flex">
                            <div class="cart__thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/cart/20.jpg" alt="">
                                </a>
                            </div>
                            <div class="cart__details">
                                <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a></h6>
                                <div class="cart__price">
                                    <span>$255.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="cart__del">
                            <a href="#"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cart__sub d-flex justify-content-between align-items-center">
                        <h6>Subtotal</h6>
                        <span class="cart__sub-total">$255.00</span>
                    </div>
                </li>
                <li>
                    <a href="cart.html" class="wc-cart mb-10">View cart</a>
                    <a href="checkout.html" class="wc-checkout">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
</div>

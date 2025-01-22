@extends('layouts.merge.site')
@section('titulo', 'Carrinho')
@section('content')
    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="Site/img/banner/page-banner-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">
                                Total de Encomendas </h4>
                            <div class="breadcrumb-two">
                                <nav>
                                    <nav class="breadcrumb-trail breadcrumbs">
                                        <ul class="breadcrumb-menu">
                                            <li class="breadcrumb-trail">
                                                <a href="{{ route('site.home') }}"><span>Home</span></a>
                                            </li>
                                            <li class="trail-item">
                                                <span>Total de Encomendas </span>
                                            </li>
                                        </ul>
                                    </nav>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-banner-area-end -->

        <!-- cart-area-start -->
        <section class="cart-area pb-120 pt-120">
            <div class="container">
                <h3>Total de Item : @php
                    echo count(session('cat', []));
                @endphp</h3>
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <form action="{{ route('site.cat.checkout') }}" method="post">
                            @csrf
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Imagem</th>
                                            <th class="cart-product-name">Produto</th>
                                            <th class="product-price">Preço</th>
                                            <th class="product-quantity">Quantidade de Grades</th>

                                            <th class="product-remove">Remover</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @if (isset($cat) && count($cat) > 0)
                                            @foreach ($cat as $indice => $item)
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#"><img
                                                                src="/storage/{{ $item->photo }}" alt=""></a></td>
                                                    <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                                    <td class="product-price"><span class="amount">
                                                            {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}
                                                        </span></td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus p-relative">

                                                            <input type="number" name="quantify[]" value="1">
                                                            <div class="dec qtybutton">-</div>
                                                            <div class="inc qtybutton">+</div>
                                                        </div>
                                                    </td>

                                                    <td class="product-remove"><a
                                                            href="/carrinho/{{ $indice }}/delete/produto"><i
                                                                class="fa fa-times"></i></a></td>
                                                </tr>
                                                @php
                                                    $total += $item->price;
                                                @endphp
                                            @endforeach
                                        @else
                                            <p>Nenhum item no carrinho</p>
                                        @endif






                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>
            </div>



            </div>
            <div class="row justify-content-end">
                <div class="col-md-5">
                    <div class="cart-page-total">
                        <h2>Totais do carrinho</h2>
                        <ul class="mb-20">
                            <li>Subtotal <span> {!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}</span></li>
                            <li>Total <span> {!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}</span></li>

                            <input hidden type="text" value="{{ $total }}" name="price"
                            id="">
                        </ul>
                        <button type="submit" class="tp-btn-h1"> Fazer o check-out</button>

                    </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart-area-end -->



    </main>
@endsection

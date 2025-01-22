@extends('layouts.merge.site')
@section('titulo', 'Finalizar Compra')
@section('content')
    <main>
        <!-- page-banner-area-start -->
        <div class="page-banner-area page-banner-height-2" data-background="assets/img/banner/page-banner-4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Checkout</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                    <nav class="breadcrumb-trail breadcrumbs">
                                        <ul class="breadcrumb-menu">
                                            <li class="breadcrumb-trail">
                                                <a href="{{ route('site.home') }}"><span>Home</span></a>
                                            </li>
                                            <li class="trail-item">
                                                <span>Checkout</span>
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

        <!-- coupon-area-start -->
        <section class="coupon-area pt-120 pb-30">

        </section>
        <!-- coupon-area-end -->

        <!-- checkout-area-start -->
        <section class="checkout-area pb-85">
            <div class="container">
                <form action="{{ route('site.cat.finalizePurchase') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkbox-form">
                                <h3>
                                    Detalhes de cobrança</h3>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Nome <span class="required"></span></label>
                                            <input value="{{ Auth()->user()->name }}" disabled type="text"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email <span class="required"></span></label>
                                            <input value="{{ Auth()->user()->email }}" disabled type="text"
                                                placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Tipo de Cliente<span class="required"></span></label>
                                            <input value="{{ Auth()->user()->level }}" disabled type="text"
                                                placeholder="Street address">
                                        </div>
                                    </div>





                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Deseja fazer o Pagamento agora?</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info">
                                        <p class="text-danger">OBS: Caso deseja fazer o pagamento agora faça a transferência
                                            e anexe o comprovativo de pagamento, caso não poderá submter o pedido e anexar o
                                            comprovativo mais tarde </p>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Anexo do Comprovativo de Pagamento <span
                                                            class="required">*</span></label>
                                                    <input type="file" name="anexo" placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Detalhe da Sua Localização</label>
                                            <textarea required id="checkout-mess" cols="30" name="location" rows="10"
                                                placeholder="Digite a sua Localização"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="your-order mb-30 ">
                                <h3>Seu Pedido</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Produtos</th>
                                                <th class="product-name">Preço</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @if (isset($OrderedItems) && count($OrderedItems) > 0)
                                                @foreach ($OrderedItems as $indice => $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            {{ $item->products->name }}<strong class="product-quantity"> ×
                                                                {{ $item->quantiy }}</strong>
                                                        </td>
                                                        <td class="product-totasl">
                                                        {!! number_format($item->price , 2, ',', '.') . ' ' . 'KZ' !!}
                                                        </td>

                                                        <td class="product-total">
                                                            <span class="amount"> {!! number_format($item->price*$item->quantiy , 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $total += $item->price*$item->quantiy;
                                                    @endphp
                                                @endforeach
                                            @else
                                                <p>Nenhum item no carrinho</p>
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal do carrinho</th>
                                                <td><span class="amount">{!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Envio</th>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" name="Envio">
                                                            <label>
                                                                Taxa fixa: <span
                                                                    class="amount">{!! number_format(10000, 2, ',', '.') . ' ' . 'KZ' !!}</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="shipping">
                                                            <label>Frete grátis:</label>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Ordem total</th>
                                                <td><strong><span class="amount">{!! number_format($total, 2, ',', '.') . ' ' . 'KZ' !!}</span></strong>
                                                </td>
                                                <input hidden type="text" value="{{ $total }}" name="price"
                                                    id="">
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="payment-method">
                                    <div class="accordion" id="checkoutAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="checkoutOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                                    Transferência bancária direta
                                                </button>
                                            </h2>
                                            <div id="bankOne" class="accordion-collapse collapse show"
                                                aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                                <div class="accordion-body">
                                                    <p>Faça seu pagamento diretamente em nossa conta bancária. Por favor,
                                                        use seu ID do pedido como referência de pagamento. Seu pedido não
                                                        será enviado até que os fundos sejam liberados em nossa conta.</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="order-button-payment mt-20">
                                        <button type="submit" class="tp-btn-h1">Faça a encomenda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- checkout-area-end -->



    </main>
@endsection





<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome da Encomenda</label>
        <input disabled value="{{ $order->name }}"  type="text" name="name" id="title" value="{{ isset($product->name) ? $product->name : '' }}"
            class="form-control border-secondary" placeholder="Nome do Produto">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Valor a pagar</label>
        <input disabled value="{!! number_format($order->price, 2, ',', '.') . ' ' . 'KZ' !!}"  type="text"  name="price" id="price" value="{{ isset($product->price) ? $product->price : '' }}"
            class="form-control border-secondary" placeholder="Preço">
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Anexo de Pagamento</label>
        <input required  type="file" name="anexo" id="anexo" value=""
            class="form-control border-secondary" placeholder="anexo">
    </div>
</div> <!-- /.col -->










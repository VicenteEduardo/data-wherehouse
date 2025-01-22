<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome do Cliente</label>
        <input disabled value="{{ $order->useres->name }}" type="text" name="name" id="title"
            value="{{ isset($product->name) ? $product->name : '' }}" class="form-control border-secondary"
            placeholder="Nome do Produto">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome da Encomenda</label>
        <input disabled value="{{ $order->name }}" type="text" name="name" id="title"
            value="{{ isset($product->name) ? $product->name : '' }}" class="form-control border-secondary"
            placeholder="Nome do Produto">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Valor a pagar</label>
        <input disabled value="{!! number_format($order->price, 2, ',', '.') . ' ' . 'KZ' !!}" type="text" name="price" id="price"
            value="{{ isset($product->price) ? $product->price : '' }}" class="form-control border-secondary"
            placeholder="Preço">
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Mudar Status</label>
        <select name="status" id="status" class="form-control" required>
            <option disabled selected>selecione o Status da encomenda</option>
            <option value="Pago">Pago</option>
            <option value="Negado">Negado</option>
            <option value="Em Validação">Em Validação</option>
        </select>
    </div>
</div> <!-- /.col -->

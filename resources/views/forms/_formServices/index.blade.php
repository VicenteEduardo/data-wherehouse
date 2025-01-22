

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome do Produto</label>
        <input  type="text" name="name" id="title" value="{{ isset($product->name) ? $product->name : '' }}"
            class="form-control border-secondary" placeholder="Nome do Produto">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Preço</label>
        <input  type="text" name="price" id="price" value="{{ isset($product->price) ? $product->price : '' }}"
            class="form-control border-secondary" placeholder="Preço">
    </div>
</div> <!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="title">Foto de Capa</label>
        <input  type="file" name="photo" id="photo" value="{{ isset($product->photo) ? $product->photo : '' }}"
            class="form-control border-secondary" placeholder="photo">
    </div>
</div> <!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="image">Quantidade Stok</label>
        <input  type="text" name="quant" id="title" value="{{ isset($product->quant) ? $product->quant : '' }}"
        class="form-control border-secondary" placeholder="quantidade">

    </div>
</div> <!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="image">Categorias</label>
        <select name="category" class="form-control border-secondary" aria-label="Default select example">
            <option selected>Escolha uma Opção</option>
            <option value="Latas">Latas</option>
            <option value="Garrafas">Garrafas</option>
            <option value="Cervejas">Cervejas</option>
            <option value="Whisks">Whisks</option>

        </select>

    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">

        <div class="card-description">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($product->description) ? $product->description : old('description')}}
            </textarea>
        </div>

</div>








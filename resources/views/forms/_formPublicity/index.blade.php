

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome Publicidade</label>
        <input  type="text" name="name" id="title" value="{{ isset($publicity->name) ? $publicity->name : '' }}"
            class="form-control border-secondary" placeholder="Nome do Produto">
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Foto de Capa</label>
        <input  type="file" name="photo" id="photo" value="{{ isset($publicity->photo) ? $publicity->photo : '' }}"
            class="form-control border-secondary" placeholder="photo">
    </div>
</div> <!-- /.col -->








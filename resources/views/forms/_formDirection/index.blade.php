@isset($direction)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Imagem Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $direction->photo }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-6">
    <div class="form-group">
        <label for="title">nome</label>
        <input type="text" name="name" id="title" value="{{ isset($direction->name) ? $direction->name : '' }}"
            class="form-control border-secondary" placeholder="Titulo">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="image">Selecione a Imagem</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="description">Cargo</label>


            <textarea class="form-control rounded" name="description" required
            style="min-height:70px; min-width:100%">{{ isset($direction->title) ? $direction->title : '' }}</textarea>
    </div>
</div> <!-- /.col -->



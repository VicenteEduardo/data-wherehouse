

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Selecione o Produto</label>
        <select name="fk_product_id"  class="form-control border-secondary" aria-label="Default select example">

@if(isset($featureProduct))
<option selected value="{{ $featureProduct->products->id }}">{{ $featureProduct->products->name }}</option>
@endif

          @foreach ($products as $item )
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
    </div>
</div> <!-- /.col -->








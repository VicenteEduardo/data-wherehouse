<form target="_blank" class="card-body" action="{{ route('admin.payments.report') }}">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Relatório de Pagamentos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Origem <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <select required name="origin" class="form-control">
                                <option value="Cowork">Cowork</option>
                                <option value="Fábrica de Software">Fábrica de Software</option>
                                <option value="Startup">Startup</option>
                                <option value="Reparação de Equipamentos">Reparação de Equipamentos</option>
                                <option value="Auditório">Auditório</option>
                                <option value="all">Todos Pagamentos</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <b class="col-md-12 text-center">Incluir Colunas no Relatório</b>
                        <div class="col-md-12">
                            <div class="row text-left mx-2">

                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="type" checked>
                                    <small>Tipo de Pagamento</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="value" checked>
                                    <small>Valores a Pagar</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="currency" checked>
                                    <small>Moeda</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="reference" checked>
                                    <small>Referência</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="status" checked>
                                    <small>Status</small>
                                </div>
                                <div class="form-check col-md-4">
                                    <input type="checkbox" class="form-check-input" name="created_at">
                                    <small>Data de Criação</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Imprimir</button>
                </div>



            </div>
        </div>
    </div>
</form>

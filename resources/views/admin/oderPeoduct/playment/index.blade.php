@extends('layouts.merge.dashboard')
@section('titulo', 'Cadastrar Pagamentos')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Mudar Status da <b> {{ $order->name }}</b>
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
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



            <form action="{{ url("admin/encomenda-clientes/update/{$order->id}") }}" method="POST"
                enctype="multipart/form-data" class="row">
                @csrf
                @method('put')
                @include('forms._formOderPeoduct.index')
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <button type="submit" class="btn px-5 col-md-4 btn-success">
                            Salvar
                            <span class="fe fe-chevron-right fe-16"></span>
                        </button>

                    </div>
                </div>


            </form>
        </div>
    </div>
    @if ($order->anexo == null)
        <h1>Sem anexo de Pagamento</h1>
    @else
    @endif

    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Anexo de Pagamento</h2>
                                <h4> <a target="_blank" href="/storage/{{ $order->anexo }}">Baixar Anexo</a></h4>

                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">


                                <img src="/storage/{{ $order->anexo }}" alt="">

                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>
@endsection

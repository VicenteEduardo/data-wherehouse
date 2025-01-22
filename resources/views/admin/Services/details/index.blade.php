@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Linha de Microcrédito')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.service.index') }}">
                    <u>Listar Submissão de Projectos</u>
                </a>
                >
                {{ $service->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $service->name }}</h2>



                        <div class="row align-items-center m-5">
                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Mentor:</b>
                                    <p>{{$service->mentor}}</p>
                                </h5>

                            </div>
                        </div>

                        <div class="row align-items-center m-5">
                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Status:</b>
                                    <p>{{$service->status}}</p>
                                </h5>

                            </div>
                        </div>

                        <div class="row align-items-center m-5">
                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Email:</b>
                                    <p>{{$service->email}}</p>
                                </h5>

                            </div>
                        </div>


                        <div class="row align-items-center m-5">
                            <div class="col-md-12 mb-2">
                                <h5 class="mb-1">
                                    <b>Projecto:</b>
                                    <p>{{$service->projecto}}</p>
                                </h5>

                            </div>



                        </div>

                        <div class="row align-items-center m-5">
                            <div class="col-md-7 mb-2">
                                <hr>
                                <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $service->created_at }}
                                </p>
                                <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $service->updated_at }}
                                </p>

                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>
    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                            <div class="col">
                                <h2 class="page-title">Documento</h2>
                            </div>

                        </div>
                        <div class="card-deck mb-4">

                            <div class="card border-0 bg-transparent">

                                <h2><a target="_blank" href="/storage/{{$service->documento  }}">Baixar documento</a></h2>


                            </div> <!-- .card -->


                        </div> <!-- .card-deck -->


                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>



@endsection

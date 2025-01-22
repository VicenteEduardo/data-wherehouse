@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Submissão de Projectos')

@section('content')
    <div class="card mb-2">
        <div class="col-lg-12">

                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>       Lista de Submissão de Projectos</b></h5>
                    </div>

                </div>

        </div>

    </div>



    <div class="card shadow mb-4">
        <div class="card-body">

            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Status</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($warrants as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>

                            <td>{{ $item->title }}</td>

                                    @if ($item->status == 'Aprovado')
                                    <td>
                                        <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                            {{ $item->status }}</div>
                                    </td>
                                @elseif($item->status == 'Negado')
                                    <td>
                                        <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                            {{ $item->status }}</div>
                                    </td>
                                @elseif($item->status == 'Em Validação')
                                    <td>
                                        <div class="btn btn-warning btn-fw btn-rounded text-dark ">
                                            {{ $item->status }}</div>
                                    </td>
                                @else
                                    <td>
                                        <div class="btn btn-dark btn-fw btn-rounded text-dark ">
                                            {{ $item->status }}</div>
                                    </td>
                                @endif




                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/servicos/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/servicos/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>



                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection

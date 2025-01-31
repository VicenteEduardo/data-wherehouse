@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Notícias')

@section('content')

    <div class="card">
        <div class="card-body row">
            <div class="col-md-10">
                <h5><b>Lista de Notícias</b></h5>
            </div>
            <div class="col-md-2 text-center">
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Cadastrar</a>
            </div>
        </div>

</div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>AUTOR DA MATÉRIA</th>
                        <th>ESTADO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($news as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }} </td>
                            <td>{{ $item->typewriter }} </td>
                            <td>
                                @if ($item->state == 'Autorizada')
                                    <b class="text-success">{{ $item->state }} </b>
                                @else
                                    <b class="text-danger">{{ $item->state }} </b>
                                @endif
                            </td>

                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/news/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/news/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ url("admin/news/delete/{$item->id}") }}' class="dropdown-item">
                                            Eliminar
                                        </a>



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

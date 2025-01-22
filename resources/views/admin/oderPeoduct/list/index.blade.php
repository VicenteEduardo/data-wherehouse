@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Encomendas')

@section('content')
    <div class="card mb-2">
        <div class="col-lg-12">

            <div class="card-body row">
                <div class="col-md-10">
                    <h5><b> Lista de Encomendas</b></h5>
                </div>

            </div>

        </div>

    </div>



    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table  datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nome do Cliente</th>
                        <th>Nome da Encomenda</th>
                        <th>status</th>
                        <th>Preço</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($orders as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->useres->name }}</td>
                            <td>{{ $item->name }}</td>

                            @if ($item->status == 'Pago')
                                <td>
                                    <div class="btn btn-success btn-fw btn-rounded text-dark ">
                                        {{ $item->status }}</div>
                                </td>
                            @elseif($item->status == 'Negado')
                                <td>
                                    <div class="btn btn-danger btn-fw btn-rounded text-white ">
                                        {{ $item->status }}</div>
                                </td>
                            @elseif($item->status == 'Aguardando Pagamento')
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
                            <td>{!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}  </td>


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                                        <a href='{{ url("admin/encomenda-clientes/edit/{$item->id}") }}'
                                            class="dropdown-item">Mudar Status do Pagamento</a>
                                        <a href='{{ url("admin/encomenda-clientes/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes da Encomenda</a>

                                        <a target="_blank" href='{{ url("admin/encomenda-clientes/print/{$item->id}") }}' class="dropdown-item">Imprimir Recibo</a>
                                        <a href='{{ url("admin/encomenda-clientes/delete/{$item->id}") }}'
                                            class="dropdown-item">Apagar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>

        </div>
    </div>


    @if (session('create_order'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Pedido Cadastrado com sucesso! Agora Adicione o seu pagamento',
            showConfirmButton: true
        })
    </script>
    @endif

@endsection

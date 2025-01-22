@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de pedidos-compras')

@section('content')
    <div class="card mb-2">
        <div class="col-lg-12">

            <div class="card-body row">
                <div class="col-md-10">
                    <h5><b> Detalhe do pedido</b></h5>
                </div>
                <div class="col-md-2 ">
                    <h4 class="float-right ">Total a pagar : {!! number_format($price, 2, ',', '.') . ' ' . 'KZ' !!} </h4>
                </div>
            </div>

        </div>

    </div>
<h3><p>    <b>Local da Entrega:</b> {{ $order->location }}</p></h3>


    <div class="card shadow mb-4">
        <div class="card-body">

            <table class="table datatables table-hover table-bordered" id="dataTable-1">

                <thead class="bg-primary">

                    <tr class="text-center">

                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>

                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($OrderedItems as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>



                            <td>{{ $item->products->name }}</td>

                            <td> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!} </td>
                            <td>

                                {{ $item->quantiy }}
                            </td>


                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>


    @if (session('create_order'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Pedido Cadastrado com sucesso!',
                showConfirmButton: true
            })
        </script>
    @endif

@endsection

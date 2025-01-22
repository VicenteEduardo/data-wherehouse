@extends('layouts.merge.dashboard')
@section('titulo', 'Relatório Geral')
@section('content')



<div class="row clearfix row-deck">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Estatísticas de pagamento do ano @if (isset($date))
                        {{ $date }}
                        @else
                        {{ date('Y') }}
                        @endif</h3><br><br>

                    <div class="card-options">

                        <h6>Total Geral: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!}

                        </h6>

                    </div>
                </div>
                <div class="form-group col-md-2">
                    <form method="POST" action="{{ route('admin.ReportPayment.store') }}">
                        @csrf
                        <label for="year">Pesquise por Ano</label>
                        <input type="search" class="form-control" placeholder="Digite o ano" id="year" name="year"
                            required autofocu />
                    </form>
                </div>
                <div class="table-responsive m-2" style="height: 350px;  ">
                    <canvas id="myChart1" style="height:10%; width:0cm "></canvas>
                </div>

            </div><br>
            <div  class="card">
                <h2 class="text-center">Quantidade de pedidos</h2>
                <canvas id="productChart"></canvas>
            </div><br>

            <div class="card">
                <h2 class="text-center"> Encomendas por Cliente</h2>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table datatables table-hover table-bordered" id="dataTable-1">
                            <thead class="bg-primary">
                                <tr class="text-center">
                                    <th>Nome do Cliente</th>
                                    <th>Email</th>
                                    <th>Total de Encomendas</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">

                                @foreach ($clientsWithOrders as $client)
                                <tr>
                                    <td>{{ $client->user_name }}</td>
                                    <td>{{ $client->user_email }}</td>
                                    <td>{{ $client->total_orders }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h2 class="text-center">  Bebidas Favoritas dos Clientes</h2>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table datatables table-hover table-bordered" id="dataTable-1">
                            <thead class="bg-primary">
                                <tr class="text-center text-white">
                                    <th>Nome do Cliente</th>
                                    <th>Email</th>
                                    <th>Bebida Favorita</th>
                                    <th>Total Consumido</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">

                                @foreach ($clientsWithFavoriteBeverages as $client)
                                <tr>
                                    <td>{{ $client['user_name'] }}</td>
                                    <td>{{ $client['user_email'] }}</td>
                                    <td>{{ $client['favorite_product'] }}</td>
                                    <td>{{ $client['total_consumed'] }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>


    <script>
        var jan = JSON.parse('<?php echo $jan; ?>');

            var fev = JSON.parse('<?php echo $fev; ?>');
            var mar = JSON.parse('<?php echo $mar; ?>');
            var abr = JSON.parse('<?php echo $abr; ?>');
            var maio = JSON.parse('<?php echo $maio; ?>');
            var jun = JSON.parse('<?php echo $jun; ?>');
            var jul = JSON.parse('<?php echo $jul; ?>');
            var ago = JSON.parse('<?php echo $ago; ?>');
            var set = JSON.parse('<?php echo $set; ?>');
            var out = JSON.parse('<?php echo $out; ?>');
            var nov = JSON.parse('<?php echo $nov; ?>');
            var dez = JSON.parse('<?php echo $dez; ?>');
            const ctx = document.getElementById('myChart1').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',

                data: {
                    labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                        'Outubro', 'Novembro', 'Dezembro'
                    ],
                    datasets: [{
                        label: 'números de cadastro',
                        data: [jan, fev, mar, abr, maio, jun, jul, ago, set, out, nov, dez],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(254, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(254, 159, 64, 0.2)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
    </script>

    <script>

        const labels = @json($labels); // Nomes dos produtos
        const totals = @json($totals); // Quantidade de vezes que o produto foi solicitado
        const values = @json($values); // Valor total de cada produto

        // Configuração do gráfico
        const ctx2 = document.getElementById('productChart').getContext('2d');
        const productChart = new Chart(ctx2, {
            type: 'bar', // Tipo do gráfico (barras)
            data: {
                labels: labels, // Rótulos dos produtos
                datasets: [{
                    label: 'Quantidade de Pedidos',
                    data: totals, // Dados da contagem de pedidos
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Cor de fundo das barras
                    borderColor: 'rgba(54, 162, 235, 1)', // Cor da borda das barras
                    borderWidth: 1
                }, {
                    label: 'Valor Total',
                    data: values, // Dados do valor total de cada produto
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Cor para o gráfico de valores
                    borderColor: 'rgba(255, 99, 132, 1)', // Cor da borda
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>

</div>


@endsection

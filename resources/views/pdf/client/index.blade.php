<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório De Clientes - {{ date('d-m-Y') }}</title>
    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body style='height:auto; width:100%; background: url("dashboard/images/digital.canvas.png") no-repeat center;'>

    <header class="col-12 mt-2 mb-5">

        <img src="dashboard/images/logo_blue.png" alt="" width="200">

        <p>
        <h2 class="text-center">Relatório de Clientes</h2>

        @if ($checkbox['origin'] != 'all')
            <b> Origem:</b> {{ $checkbox['origin'] }}<br>
        @endif


        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Total de Clientes:</b> {!! count($clients) !!}
        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    @isset($checkbox['name'])
                        <th>CLIENTE</th>
                    @endisset
                    @isset($checkbox['nif'])
                        <th>NIF</th>
                    @endisset
                    @if ($checkbox['origin'] == 'all')
                        <th>ORIGEM</th>
                    @endif
                    @isset($checkbox['tel'])
                        <th>TELEFONE</th>
                    @endisset
                    @isset($checkbox['email'])
                        <th>EMAIL</th>
                    @endisset
                    @isset($checkbox['clienttype'])
                        <th>TIPO</th>
                    @endisset
                    @isset($checkbox['created_at'])
                        <th>DATA</th>
                    @endisset
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $item)
                    <tr class="text-center text-dark">
                        @isset($checkbox['name'])
                            <td>{{ $item->name }} </td>
                        @endisset
                        @isset($checkbox['nif'])
                            <td>{{ $item->nif }} </td>
                        @endisset
                        @if ($checkbox['origin'] == 'all')
                            <td>{{ $item->origin }} </td>
                        @endif
                        @isset($checkbox['tel'])
                            <td>{{ $item->tel }}</td>
                        @endisset
                        @isset($checkbox['email'])
                            <td>{{ $item->email }}</td>
                        @endisset
                        @isset($checkbox['clienttype'])
                            <td>{{ $item->clienttype }}</td>
                        @endisset
                        @isset($checkbox['created_at'])
                            <td>{{ $item->created_at }}</td>
                        @endisset
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
5

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>

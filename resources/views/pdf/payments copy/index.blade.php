<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Relatório de Pagamentos - {{ date('d-m-Y') }}</title>

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

<body style='height:auto; width:100%; background: url("Site/img/logo/logo.png") no-repeat center;'>


        <img src="Site/img/logo/logo.png" alt="logo EDWIN" width="200">

        <p>
        <h2 class="text-center">Relatório de Pagamentos</h2>


            <b> Origem:</b> <br>


        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Quantidade de Status Pago: </b><br>
        <b>Quantidade de Status Não Pago: </b><br>
        <b> Valor Total de Pagamentos: </b>

        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">

                        <th>DATA</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($OrderedItems as $item)
                    <tr class="text-center text-dark">



                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>

    <footer class="col-12 mt-2" id="footer">
        <div class="text-right">
            <img src="dashboard/images/minttics.jpg" width="350">
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFOSI/Fatura de Pagamento-{{ date('d/m/Y', strtotime($lastUpdate)) }}</title>

    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .pylarge {
            padding: 0.5px 0:
        }

        * {
            font-size: 10;
        }

    </style>
</head>

<body style='height:auto; width:100%; background: url("dashboard/images/digital.canvas.png") no-repeat center;'>

    <header class="col-12 mt-2 row mb-5">

                <div class="col-12">
                    <img src="dashboard/images/logo_blue.png" alt="logo shazzam" width="150" class="mt-3">
                    <img src="dashboard/images/logo_infosi.png" alt="logo INFOSI.GOV.AO" width="250">
                </div>

        <p class="text-left mt-2">
            Luanda, Angola<br>
            Telef. (+244) 222 693 507<br>
            Email: comercial@infosi.gov.ao<br>
            Site: www.infosi.gov.ao<br>
            NIF: <b>5000379263</b><br>

        </p>
        <p class="text-right">
            Exmo.(s) Sr.(s) <br>
            {{ $client }} <br>
            NIF: {{ $nif }} <br>

        </p>

    </header>
    <section class="col-12 mb-5">
        <p class="text-center">
            <b>Fatura Nº </b>{{ $code }} |
            <b> Data:</b> {{   date('d/m/Y', strtotime($lastUpdate))    }}

        </p>
        <hr class="pylarge bg-dark">

        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">V/Nº Contrib. </th>
                    <th>Moeda</th>
                    <th>Condição de Pagamento</th>
                    <th>Vencimento</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="text-left">{{ $nif }}</td>
                    <td>AKZ</td>
                    <td>Factura de 30 dias</td>
                    <td>               @php

                        echo date( "d/m/Y", strtotime($lastUpdate." + 30 days" ) );
                     @endphp</td>
                </tr>
            </tbody>

        </table>
        <hr class="pylarge bg-dark">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">Descrição</th>
                    <th>Un</th>
                    <th>Pr. Unitário</th>
                    <th>Desc.</th>
                    <th>IVA</th>
                    <th>Total Líquido</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="text-left">{{ $service }}</td>
                    <td>UN</td>
                    <td>{!! number_format($value, 2, ',', '.') !!}</td>
                    <td>0,00</td>
                    <td>0,00</td>
                    <td>{!! number_format($value, 2, ',', '.') !!}</td>
                </tr>
            </tbody>

        </table>
    </section>

    <footer class="col-12 mt-2 text-center" id="footer">

        <div class="col-6 text-left">
            <table class="table table-striped">
                <tr>
                    <th>Mercadoria/Serviços:</th>
                    <td class="text-right">{!! number_format($value, 2, ',', '.') !!} </td>
                </tr>
                <tr>
                    <th>Descontos Comerciais:</th>
                    <td class="text-right">0,00</td>
                </tr>
                <tr>
                    <th>Desconto Financeiro:</th>
                    <td class="text-right">0,00</td>
                </tr>
                <tr>
                    <th>IVA:</th>
                    <td class="text-right">0,00</td>
                </tr>

            </table>

            <hr class="pylarge bg-dark">
            <table class="table table-striped">
                <tr>
                    <th>
                        <h4>Total (AKZ):</h4>
                    </th>
                    <td>
                        <h4 class="text-right"> {!! number_format($value, 2, ',', '.') !!}</h4>
                    </td>
                </tr>


            </table>

        </div>

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>
            OBS: O Pagamento Será Efectuado via RUPE, no Prazo de Trinta Dias (30 dias).
        </small>

        <div class="col-12 mt-5">

            <img src="dashboard/images/minttics.jpg" width="250">
        </div>

    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shazzam/Fatura de Pagamento-{{ date('d-m-Y') }}</title>

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

<body style='height:10; width:100%;; background: url("Site/img/logo/logo2.png") no-repeat center;'>

    <header class="col-12">

                <div class="col-12">


                    <img height="" src="Site/img/logo/logo.png" alt="logo shazzam" width="120">



                </div>

        <p class="text-left ">
            <br><br>
            Luanda, Angola<br>
            Telef. (+244) 946359245<br>
            Email: comercial@shazzam.ao<br>
            Site: www.shazzam.ao<br>
            NIF: <b>55747414</b><br>

        </p>
        <p style="margint-top:150px;" class="text-right">

            Exmo.(s) Sr.(s) <br>
            {{ $order->useres->name }} <br>
             <br>

        </p>

    </header>
    <section class="col-12 ">
        <p class="text-center">
            <b>Fatura Nº </b>{{ $order->name }}
            <b> Data:</b> {{   date('d/m/Y', strtotime($order->updated_at))    }}<br>

           <h4 class="text-center">Status da Encomenda:</b>{{ $order->status }}</h4> <b>

        </p>
        <hr class="pylarge bg-dark">


        <hr class="pylarge bg-dark">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th class="text-left">Descrição</th>

                    <th>Pr. Unitário</th>
                    <th>Desc.</th>
                    <th>IVA</th>
                    <th>Quantidade</th>
                    <th>Total Líquido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($OrderedItems as $item)
                <tr class="text-center text-dark">



                    <td>{{ $item->products->name }}</td>

                    <td> {!! number_format($item->price, 2, ',', '.') . ' ' . 'KZ' !!}  </td>
                    <td> {!! number_format(00, 2, ',', '.') . ' ' . 'KZ' !!}  </td>
                    <td> {!! number_format(00, 2, ',', '.') . ' ' . 'KZ' !!}  </td>
                    <td>

                        {{ $item->quantiy }}
                    </td>
                    <td>
                        {!! number_format($item->price*$item->quantiy, 2, ',', '.') . ' ' . 'KZ' !!}

                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </section>

    <footer class="col-12 mt-2 text-center" id="footer">

        <div class="col-6 text-left">
            <table class="table table-striped">
                <tr>
                    <th>Mercadoria/Serviços:</th>
                    <td class="text-right">{!! number_format($order->price, 2, ',', '.') . ' ' . 'KZ' !!} </td>
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
                    <tr>
                    <th>
                        <h4>Total (AKZ):</h4>
                    </th>
                    <td>
                        <h4 class="text-right">{!! number_format($order->price, 2, ',', '.') . ' ' . 'KZ' !!} </h4>
                    </td>
                </tr>
                payment"pylarge bg-dark">


        </div>

        <small class="text-left text-dark">
            Documento Processado por Computador. <br>

        </small>



    </footer>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Credencial de Membro da Startup</title>
    <style>
        @page {
            size: 5.4cm 8.5cm;
            margin: 10px;
        }

        * {
            text-align: center;
            font-family:Arial, Helvetica, sans-serif;
        }

        section{
            margin-top: 40px;
        }
       
    </style>
</head>

<body>

    <img src="dashboard/images/logo_blue.png" width="150">
    <b>STARTUP</b>
    <br>
    <section>
        <img src="data:image/png;base64,{!! base64_encode($qrcode) !!}" alt="qrcode">
    </section>
</body>

</html>

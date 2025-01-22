<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Passe de Funcionário</title>
    <style>
        @page {
            size: 8.5cm 5.4cm;
            margin: 10px;
        }

        * {
           
            font-family: Arial, Helvetica, sans-serif;
        }

        section {
            margin-top: 40px;
        }

    </style>
</head>

<body style="background-image: url('dashboard/images/idcard/index.jpg');
             background-position: top left;
             background-repeat: no-repeat;
             background-image-resize: 2;
             background-image-resolution: from-image;
">

    <div>
        
        <p style="margin-top:99px; font-size:10px;margin-left:65px;">
            {{ $Employee->name }}
        </p>
        <p style="font-size:10px; margin-top:-8px;margin-left:70px;">{{ $Employee->occupation }}</p>
        <p style="font-size:10px;margin-top:-7px;margin-left:107px; ">{{ $Employee->acronym }}</p>
        <img style="margin-top:-55px;margin-left:180px;height:63px;width:63px;" class="img-fluid" src="storage/{{ $Employee->photoEmployee }}" alt="{{ $Employee->name }}">

    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Listagem de produtos </h1>

    @if (session()->has('success'))
    <strong> <font color="Navy"> {{ session('success') }} <font> </strong>
    <br>
    @elseif (session()->has('success_removing'))
    <strong> <font color="RoyalBlue"> {{ session('success_removing')}} <font> </strong>
    @elseif (session()->has('success_update'))
    <strong> <font color="SteelBlue"> {{ session('success_update') }} <font> </strong>

    @endif

    <br>
    <a href=" {{ url('/inserir') }}"> Inserir dados </a>
    <br>
    <a href=" {{ url('/show') }}"> Apresenta dados </a>
    

</body>
</html>
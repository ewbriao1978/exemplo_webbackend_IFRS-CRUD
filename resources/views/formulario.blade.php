<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<h1> Inserção de produtos </h1>
<br/>


<form action="/salvadados" method="post">
    @csrf
<label>Descrição: </label><br>
<input type="text" name="descricao"><br>
<label>Quantidade: </label><br>
<input type="number" name="qtd"><br>
<label>Preço: </label><br>
<input type="number" name="preco" step="0.01"><br>
<button type="submit" >Inserir</button>
</form>

<br>
<a href=" {{ url('/') }}"> Voltar </a>

</body>
</html>
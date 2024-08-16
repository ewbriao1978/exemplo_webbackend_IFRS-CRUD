<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de itens</title>
</head>
<body>
    

<h1> Edição de produtos </h1>
<br/>


<form action="/update" method="post">
    @csrf
<input type="hidden" name="id_for_updating" value="{{ $dados['id'] }}"> 
<label>Descrição: </label><br>
<input type="text" name="descricao" value="{{ $dados['descricao'] }}"><br>
<label>Quantidade: </label><br>
<input type="number" name="qtd" value="{{ $dados['quantidade'] }}" ><br>
<label>Preço: </label><br>
<input type="number" name="preco" value="{{ $dados['preco'] }}" step="0.01"><br>
<button type="submit" >Editar</button>
</form>

<br>
<a href=" {{ url('/') }}"> Voltar </a>







</body>
</html>
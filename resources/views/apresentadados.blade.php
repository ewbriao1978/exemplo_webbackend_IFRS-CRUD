<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresenta</title>
</head>
<body>
<h1> Itens </h1>

<br>

<table>
    <thead>
  <tr>
    <th>id</th>
    <th>Descrição</th>
    <th>Quantidade</th>
    <th>Preço</th>
    <th> - </th>
    <th> - </th>
  </tr>
</thead>

<body>

@foreach ($dados as $my_data)
<tr>
    <td> {{ $my_data['id'] }} </td>
    <td> {{ $my_data['descricao'] }} </td>
    <td> {{ $my_data['quantidade'] }} </td>
    <td> {{ $my_data['preco'] }} </td>

    <td>
        <a href="{{ url('edit/'.$my_data['id']) }}" > Editar </a>
    </td>

    <td>
        <form method="post" action="{{ url('remove') }}">
            @csrf
            <input type="hidden" name="id_for_removing" value = "{{ $my_data['id'] }}">
            <button type="submit"> Remover </button>
        </form>
    </td>

</tr>
@endforeach

</tbody>
</table>



</body>
</html>
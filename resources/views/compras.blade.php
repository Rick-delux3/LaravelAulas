<h1>Produtos em estoque</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Preço</td>
    </tr>
    @foreach ($produtos as $produto)
        <tr>
            <td>Id: {{ $produto['id'] }}</td>
            <td>Nome: {{ $produto['nome'] }}</td>
            <td>Preço: {{ $produto['preco'] }}</td>
        </tr>
    @endforeach
</table>
    
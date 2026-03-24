@foreach ($produtos as $produto)
    <h1>Nome do Produto: {{$produto['nome']}}</h1>
    <p>Preço: R$ {{$produto['preco']}}</p>
@endforeach
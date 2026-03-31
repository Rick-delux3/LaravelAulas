@foreach ($componentes as $comp)
    <h3>Nome: {{ $comp->nome }}</h3>
    <h3>Descrição {{ $comp->descricao }}</h3>
@endforeach

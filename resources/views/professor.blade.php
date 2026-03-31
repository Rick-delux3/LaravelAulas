@foreach ($teachers as $teach)
    <h3>Nome: {{ $teach->nome }}</h3>
    <h3>Email {{ $teach->email }}</h3>
@endforeach

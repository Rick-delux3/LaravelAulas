@foreach ($cursos as $curso)
    <h3>Nome: {{ $curso->nome }}</h3>
    <h3>Carga Horária {{ $curso->carga_horaria }}</h3>
@endforeach

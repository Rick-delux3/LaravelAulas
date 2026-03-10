<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre - Portal de Cursos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route("index") }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("index") }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route("sobre") }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("contato") }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- TÍTULO -->
<div class="container mt-5 text-center">
  <h1>Sobre a Instituição</h1>
  <p class="text-muted">Conheça mais sobre nossa escola e nossa missão</p>
</div>

<!-- SEÇÃO SOBRE -->
<div class="container mt-4">
  <div class="row align-items-center">

    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid rounded">
    </div>

    <div class="col-md-6">
      <h3>Nossa História</h3>
      <p>
        Nossa instituição foi criada com o objetivo de oferecer ensino técnico de qualidade
        e preparar estudantes para o mercado de trabalho. Ao longo dos anos, formamos
        centenas de profissionais qualificados nas áreas de tecnologia, gestão e meio ambiente.
      </p>

      <p>
        Trabalhamos com professores capacitados, laboratórios modernos e metodologias
        de ensino voltadas para a prática profissional.
      </p>
    </div>

  </div>
</div>

<!-- MISSÃO VISÃO VALORES -->
<div class="container mt-5">
  <div class="row g-4 text-center">

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Missão</h4>
          <p>
            Formar profissionais qualificados, éticos e preparados para os desafios
            do mercado de trabalho.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Visão</h4>
          <p>
            Ser referência em educação técnica e inovação, contribuindo
            para o desenvolvimento da sociedade.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h4>Valores</h4>
          <p>
            Ética, compromisso com a educação, responsabilidade social,
            sustentabilidade e inovação.
          </p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- SEÇÃO CURSOS -->
<div class="container mt-5 text-center">
  <h2>Áreas de Formação</h2>
  <p class="text-muted">Cursos técnicos oferecidos pela instituição</p>
</div>

<div class="container mt-3">
  <div class="row g-4 text-center">

    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5>Desenvolvimento de Sistemas</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5>Administração</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5>Meio Ambiente</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5>Mecatrônica</h5>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-light text-center p-3 mt-5">
  <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos Técnicos</title>

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
          <a class="nav-link active" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("sobre") }}">Sobre</a>
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
  <h1>Nossos Cursos Técnicos</h1>
  <p class="text-muted">Conheça os cursos oferecidos pela nossa instituição</p>
</div>


<!-- CARDS DOS CURSOS -->
<div class="container mt-4">
  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Aprenda programação, banco de dados, desenvolvimento web e criação de softwares modernos.
          </p>
          <a href="{{ route("DS") }}" class="btn btn-primary">Saiba Mais</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Desenvolva habilidades em gestão, empreendedorismo, finanças e organização empresarial.
          </p>
          <a href="route{{ route("adm") }}" class="btn btn-primary">Saiba Mais</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude sustentabilidade, preservação ambiental e técnicas para proteção dos recursos naturais.
          </p>
          <a href="{{ route("am") }}" class="btn btn-primary">Saiba Mais</a>
        </div>
      </div>
    </div>

    <!-- Mecatrônica -->
    <div class="col-md-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1581091870622-1e7c9d5b7c59" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Mecatrônica</h5>
          <p class="card-text">
            Integra mecânica, eletrônica e programação para desenvolver sistemas automatizados e robótica.
          </p>
          <a href="{{ route("mec") }}" class="btn btn-primary">Saiba Mais</a>
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


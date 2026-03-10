```html
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contato - Portal de Cursos</title>

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
          <a class="nav-link" href="{{ route("sobre") }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route("contato") }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- TÍTULO -->
<div class="container mt-5 text-center">
  <h1>Entre em Contato</h1>
  <p class="text-muted">Envie uma mensagem para nossa equipe</p>
</div>

<!-- FORMULÁRIO E INFORMAÇÕES -->
<div class="container mt-4">
  <div class="row">

    <!-- FORMULÁRIO -->
    <div class="col-md-6">
      <h4>Envie uma Mensagem</h4>

      <form>
        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>

    <!-- INFORMAÇÕES -->
    <div class="col-md-6">
      <h4>Informações</h4>

      <p><strong>Endereço:</strong> Rua Exemplo, 123 - Centro</p>
      <p><strong>Cidade:</strong> Tatuí - SP</p>
      <p><strong>Telefone:</strong> (15) 99999-9999</p>
      <p><strong>Email:</strong> contato@portalcursos.com</p>

      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" class="img-fluid rounded mt-3">
    </div>

  </div>
</div>

<!-- MAPA -->
<div class="container mt-5">
  <h3 class="text-center">Nossa Localização</h3>

  <div class="ratio ratio-16x9 mt-3">
    <iframe src="https://maps.google.com/maps?q=tatu%C3%AD%20sp&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
  </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-light text-center p-3 mt-5">
  <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```

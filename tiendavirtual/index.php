<?php
// ...existing code...
<?php
$title = 'Tienda Virtual';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title) ?></title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos mínimos */
        body { padding-top: 70px; }
        .card-img-top { height: 160px; object-fit: cover; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><?= htmlspecialchars($title) ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <header class="py-4 mb-4 border-bottom">
    <h1 class="h3">Bienvenido a <?= htmlspecialchars($title) ?></h1>
    <p class="text-muted">Plantilla base para tu tienda. Edita este archivo según necesites.</p>
  </header>

  <section class="row g-3">
    <!-- Ejemplo de tarjeta de producto -->
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card h-100">
          <img src="https://via.placeholder.com/400x300?text=Producto+<?= $i ?>" class="card-img-top" alt="Producto <?= $i ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Producto <?= $i ?></h5>
            <p class="card-text text-truncate">Descripción corta del producto <?= $i ?>.</p>
            <div class="mt-auto">
              <span class="fw-bold text-success">$<?= number_format(9.99 * $i, 2) ?></span>
              <a href="#" class="btn btn-sm btn-primary float-end">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </section>
</main>

<footer class="bg-light py-4 mt-5">
  <div class="container text-center">
    <small class="text-muted">© <?= date('Y') ?> <?= htmlspecialchars($title) ?> — Todos los derechos reservados.</small>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```// filepath: c:\xampp8\htdocs\php\tiendavirtual\index.php
// ...existing code...
<?php
$title = 'Tienda Virtual';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title) ?></title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos mínimos */
        body { padding-top: 70px; }
        .card-img-top { height: 160px; object-fit: cover; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><?= htmlspecialchars($title) ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <header class="py-4 mb-4 border-bottom">
    <h1 class="h3">Bienvenido a <?= htmlspecialchars($title) ?></h1>
    <p class="text-muted">Plantilla base para tu tienda. Edita este archivo según necesites.</p>
  </header>

  <section class="row g-3">
    <!-- Ejemplo de tarjeta de producto -->
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="card h-100">
          <img src="https://via.placeholder.com/400x300?text=Producto+<?= $i ?>" class="card-img-top" alt="Producto <?= $i ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Producto <?= $i ?></h5>
            <p class="card-text text-truncate">Descripción corta del producto <?= $i ?>.</p>
            <div class="mt-auto">
              <span class="fw-bold text-success">$<?= number_format(9.99 * $i, 2) ?></span>
              <a href="#" class="btn btn-sm btn-primary float-end">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </section>
</main>

<footer class="bg-light py-4 mt-5">
  <div class="container text-center">
    <small class="text-muted">© <?= date('Y') ?> <?= htmlspecialchars($title) ?> — Todos los derechos reservados.</small>
  </div>
</footer>

<script
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<?php

require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();


 echo '<nav class="navbar navbar-dark bg-dark" "navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="#">
Inicio</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="inicio.php">
        Inicio
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="User.php">
       User
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Course.php"> Course
    </a>
  </li>
  <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Class.php"> Class
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Opportunitty.php"> Opportunity
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Kardex.php">  Kardex
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="CareerService.php"> CareerService
      </a>
    </li>
  
    <div class="dropdown"> <!-- Agrega el código del dropdown aquí -->
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person-fill"></i>
    </a>

    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="FormularioLogin.php">Cerrar sesión</a></li>
</div>

    </ul>
  </div>
</div>
</nav>';

echo'<H1>Bienvenido a este Sistema de manejador para el tecnologico de moclova</h1>
<img src="https://res.cloudinary.com/civico/image/upload/c_fill,f_auto,fl_lossy,h_628,q_auto:low,w_1200/v1457373401/entity/image/file/9fb/000/56ddc0d82f41f3c9450009fb.jpg">'

?><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
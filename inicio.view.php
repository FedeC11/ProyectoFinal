<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/a9775d2cf6.js" crossorigin="anonymous" defer></script>
</head>
<body>
    <div class="row container-fluid vh-100">
        <div class="col-2 bg-dark text-white p-2 ">
            <div class="d-flex flex-row  border-bottom p-2 ">
                <img class="img-fluid rounded-circle" src="assets/logoEscudo.jpg" alt="logo" style=" height: 40px;" >
                <p>Universidad</p>
            </div>

            <div class="border-bottom my-3">
            <p>Admin</p>
            <p>Administrador</p>
            </div>

            <div class="text-center mt-3">
                <h6>MENU ADMINISTRACION</h6>
                <ul class="text-start list-group ms-2">
                <li class="mb-2 list-group-item bg-dark text-white border-dark"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="inicio.php"><i class="fa-solid fa-user-gear"></i> Inicio</a></li>
                  <li class="mb-2 list-group-item bg-dark text-white border-dark"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="maestros.php"><i class="fa-solid fa-chalkboard-user"></i> Maestros</a></li>
                  <li class="mb-2 list-group-item bg-dark text-white border-dark"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="alumnos.php"><i class="fa-solid fa-user-graduate"></i> Alumnos</a></li>
                  <li class="mb-2 list-group-item bg-dark text-white border-dark"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="cursos.php"><i class="fa-solid fa-chalkboard"></i> Cursos</a></li>  
                
                </ul>

            </div>
            
            

        </div>
        <div class="col">
            <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex flex-row ">
  <!-- Left navbar links -->
  <ul class="navbar-nav flex-grow-1">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    </ul>

  <div class="dropdown text-end m-0">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Administrador    
            </a>
            <ul class="dropdown-menu text-small">
                
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item out" href="cerrar.php">
                    
                    Sign out
                </a>
                </li>
            </ul>
            </div>
</nav>
<!-- /.navbar -->
<div class="container-fluid vh-100 d-flex flex-column" style="background-color: #f4f6f9">
  <div class="container-fluid d-flex flex-row justify-content-between " >
    <h1>DASHBOARD</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
  </div>
  <div class="bg-white text-dark text-wrap p-2" style="width:50%;">
    <h4>Bienvenido</h4>
    <p>Selecciona las opciones que quieras  realizar  en las pestañas del menu de la izquierda</p>

        </div>
    </div>
</body>
</html>
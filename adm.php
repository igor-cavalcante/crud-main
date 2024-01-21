<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Links css e js bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- fim bootstrap -->
  <!-- link css -->
  <link rel="stylesheet" href="./src/css/style.css">
  <title>Cadastro de usuarios</title>
  </head>


  <body class="vh-100 overflow-hidden">
  <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Usuarios</a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cadastro de Usuarios</h5>
        <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active mx-2" aria-current="page" href="?page=perfil">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link mx-2" href="?page=novo">Cadastrar Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="?page=listar">Listar Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 pd-2" href="?page=logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class ="container">

<div class="row">
  <div class="col mt-5">

<?php 
session_start();
include('config.php');
$pageAtual = basename($_SERVER['PHP_SELF']);
switch(@$_REQUEST["page"]){
case "novo":
    include("novo-usuario.php");
  break;

case "listar":
     include("listar-usuario.php");
  break;

case"salvar":
include("salvar-usuario.php");
    break;

case "editar":
      include("editar-usuario.php");
   break;
case "perfil":
  include("perfil.php");
break;

case "logout":
  include("logout.php");
break;
    default:
    include("perfil.php");
}
?>
  </div>
</div>

</div> 

  </body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <!--- Bootstrap CSS --->
  <!-- Caminho para os arquivos CSS do Bootstrap no diretório node_modules -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--- icons css --->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastrar Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=perfil">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=logout">Sair</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>


<div class ="container">

<div class="row">
  <div class="col mt-5">

<?php 
session_start();
include('config.php');
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
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
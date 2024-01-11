<?php 
if(empty($_SESSION)){
    print "<script>window.location.href='./index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>
<body>
  <h1><?= "Seja bem vindo " . $_SESSION['nome'] ?></h1>
</body>
</html>
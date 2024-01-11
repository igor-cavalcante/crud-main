<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <style>
    body{
      background-color: #F2F2F2;
    }

    .login{
      width: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center;
      display: flex;


    }
  </style>
</head>

<body style="background-color : #F2F2F2">

<div class="login">
<div class="container">
  <div class="row">
    <div class="col-lg-4 offset-lg-4">
      <div class="card">
        <div class="card-body">



          <form action="login.php" method="POST">
            <div class="mb-3">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="email">
            </div>

            <div class="mb-3">
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha" placeholder="senha">
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Logar</button>
            </div>
          </form>
          

          
        </div>
      </div>
    </div>
  </div>
</div>

</div>

</body>

</html>

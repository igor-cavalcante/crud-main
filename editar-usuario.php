
<h1>Editar Usuario</h1>
<?php 
  $sql = "SELECT * FROM usuarios WHERE id = ".$_REQUEST["id"];

  $res = $conn->query($sql);
  $row = $res->fetch_object();


?>

<form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="editar"> 
<input type="hidden" name="id" value="<?=$row->id?>"> 
  <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?=$row->nome?>" class="form-control">
  </div>

  <div class="mb-3">
    <label for="nome">Email</label>
    <input type="text" name="email"  value="<?=$row->email?>" class="form-control">
  </div>

  <div class="mb-3">
    <label for="nome">Senha</label>
    <input type="password" name="senha"  value="<?=$row->senha?>"  class="form-control">
  </div>

  <div class="mb-3">
    <label for="nome">Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?=$row->data_nasc?>" class="form-control">
  </div>
  
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</form>

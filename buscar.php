<h1>Listar usuarios</h1>
<?php
session_start();
include('config.php');
$nome = "%".trim($_POST['nome-usuario'])."%";


$sql =  "SELECT * FROM usuarios where nome like '$nome'";

$res = $conn->query($sql);

$qtd  = $res->num_rows;

if($qtd > 0){
  print "<table class='table table-hover table-bordered' >";
  print"<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Nome</th>
      <th scope='col'>Email</th>
      <th scope='col'>Data de Nascimento</th>
      <th scope='col'>Opções</th>
    </tr>
  </thead>";
  while($row = $res->fetch_object()) {
      print "<tr>";
      print "<td>".$row->id."</td>";
      print "<td>".$row->nome."</td>";
      print "<td>".$row->email."</td>";
      print "<td>".$row->data_nasc."</td>";
      print "<td>
      <button onclick=\"window.location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Atualizar <i class='fas fa-pen'></i> </button>
      <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){window.location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"class='btn btn-danger'>Excluir <i class='fas fa-trash-alt'></i></button>
      </td>";
      print "</tr>";
  }
  print "</table>";
  
}else{
  print "<p class='alert alert-danger'>Não encontrou resultados </p>";

}
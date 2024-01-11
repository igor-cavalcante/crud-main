
  <h1>Cadastrar Usuarios</h1>

  <form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar"> 
    <div class="mb-3">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
      <label for="nome">Email</label>
      <input type="text" name="email" class="form-control">
    </div>

    <div class="mb-3">
      <label for="nome">Senha</label>
      <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
      <label for="nome">Data de Nascimento</label>
      <input type="date" name="data_nasc" class="form-control">
    </div>
    
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>

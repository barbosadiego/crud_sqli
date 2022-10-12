<h1>Novo usuário</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="mb-3">
    <label for="">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <div class="mb-3">
    <label for="">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nasc">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
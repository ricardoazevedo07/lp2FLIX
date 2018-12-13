<?php include 'header.php'; ?>
<div class="row">
  <div class="col s4">

  </div>
  <div class="input-field col s4">
    <img src="images/logo.jpg" alt="" align="center" style="width:230px;height:230px; text-align: center; margin-left:170;">

    <form class="" action="add_midia.php" method="post">
      <input type="text"id="nome" name="nome" value="">
      <label for="nome">Nome da Mídia</label>
      <input type="text" name="tipo" value="">
      <label for="tipo">Tipo</label>
      <input type="text" name="categoria" value="">
      <label for="categoria">Categoria</label>
      <input type="text" name="ano" value="">
      <label for="diretor">Diretor</label>
      <input type="text" name="diretor" value="">
      <label for="ano">Ano</label>
      <input type="text" name="ator1" value="">
      <label for="ator1">Ator 1</label>
      <input type="text" name="ator2" value="">
      <label for="ator2">Ator 2</label>
      <input type="text" name="ator3" value="">
      <label for="ator3">Ator 3</label>
      <input type="text" name="descricao" value="">
      <label for="Descrição">Descrição</label>
      <br><br><br>
      <input type="submit" name="cadastrar" value="Cadastrar" class="waves-effect waves-green btn-small">
      <button type="reset" name="Cancelar" value="Cancelar" class="waves-effect waves-green btn-small"><i class="tiny material-icons right">cancel</i>Cancelar</button>

    </form>
  </div>


</div>

<?php include 'footer.php'; ?>

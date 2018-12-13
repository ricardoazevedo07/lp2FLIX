<?php include 'header.php' ?>

<style media="screen">
  .linha-vertical{
    height: 400px;/*Altura da linha*/
    border-left: 2px solid;
    margin-left:50%;
  }
</style>
<div class="row">
  <div class="col s5">

  </div>
  <div class="col s4">
    <?php echo "<H3>Inscreva-se</H3>" ?>
  </div>

</div>


<div class="row">

  <div class="col s4">
    <img src="images/logo.jpg" alt="" align="center" style="width:230px;height:230px; text-align: center; margin-left:170;">

  </div>
  <div class="col s3"> </div>
  <div class="col s4">
    <form class="" action="add_user.php" method="post">
      <div class="row">
          <div class="input-field col s6">
              <input name="nome" type="text" class="validate">
              <label for="nome">Nome</label>
              </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
              <input name="email" type="email" class="validate">
              <label for="email">Email</label>
          </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
            <input name="senha" type="password" class="validate">
            <label for="senha">password</label>
          </div>
      </div>

      <div class="row">
        <div class="col s10">
            <input type="submit" name="Cadastrar" value="Cadastrar" class="waves-effect waves-green btn-small">
            <button type="reset" name="Cancelar" value="Cancelar" class="waves-effect waves-green btn-small"><i class="tiny material-icons right">cancel</i>Cancelar</button>

            </div>
      </div>



</div>

    </form>

</div>


<?php include 'footer.php' ?>

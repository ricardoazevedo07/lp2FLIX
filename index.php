<?php include "header.php" ?>


<div class="row">
  <div class="col s5">

  </div>
  <div class="col s3">
    <img src="images/logo.jpg" alt="" align="center" style="width:128px;height:128px; text-align: center;">
  </div>
</div>
<div class="form" >
<form class="" action="login_user.php" method="post">


<div class="row">
<div class="col s4">

</div>

     <div class="input-field col s3">
       <input id="nome" name="nome" type="text" class="validate">
       <label for="login">Login</label>
     </div>


   </div>

<div class="row">
  <div class="col s4">

  </div>
  <div class="input-field col s3">
    <input id="senha" name="senha" type="password" class="validate">
    <label for="password">Password</label>
  </div>

</div>

<div class="row">
  <div class="col s4">

  </div>
<div class="col s3">

<div class="row">
<div class="col s2"></div>

<input type="submit" name="Entrar" value="Entrar" class="waves-effect waves-green btn-small">
<button type="reset" class="btn waves-effect waves-light btn-small" style="margin-left:9px;"><i class="material-icons right">cancel</i>Cancelar</button>

</div>
</div>
</div>

</form>
  </div>






<?php include "footer.php" ?>

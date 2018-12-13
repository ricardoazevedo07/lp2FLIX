<?php include 'header.php' ?>

<div class="row">
    <form class="" action="pesquisa.php" method="post">
  <div class="col s2"></div>
  <div class="input-field col s8">


    <i class="material-icons prefix">search</i>
    <input type="text" id="pesquisa" value="">

    <label for="pesquisa">Filmes, Séries, Documentarios e muita diversão</label>


  </div>
  <div class="col s2">
    <button class="btn waves-effect waves-light" type="submit" name="pesquisar" style="margin-top:20px; margin-left:-10px;">Pesquisar
    <i class="small material-icons right">search</i>
  </button>

  </div>
</form>
</div>

<div class="row">
    <?php
     require 'dbconnect.php';
     require 'card.php';
     $banco = new DBController();
     $filmes = $banco->selectDB("select * from midia");
     foreach ($filmes as $filme) {
       filme($filme['nome'],$filme['descricao'],"\imagens\filme.jpg");
     }
     ?>
</div>

<?php include 'footer.php' ?>

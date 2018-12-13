<?php
function filme($titulo, $descricao, $imagem)
{
  echo '<div class="col s2"> <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src='.$imagem.'>
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">'.$titulo.'<i class="material-icons right">more_vert</i></span>
        <p><input type="submit" name="Assistir" value="Assistir" class="waves-effect waves-green btn-small"></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">' .$titulo. '<i class="material-icons right">close</i></span>
        <p>'.$descricao.'</p>
      </div>
    </div>
    </div>';
}
function teste($frase)
{
  echo '<h3>teste '.$frase.'<h3>';
}
 ?>

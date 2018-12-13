<?php
require 'midia_classes.php';

//"--$_POST["categoria"] -- $_POST["diretor"]-- $_POST["ano"]-- $_POST["ator1"] - $_POST["ator2"]- $_POST["ator3"] ";
$nome_filme=$_POST['nome'];
$tipo_filme=$_POST['tipo'];
$categoria_filme=$_POST['categoria'];
$diretor_filme=$_POST['diretor'];
$ano_filme=$_POST['ano'];
$ator1_filme=$_POST['ator1'];
$ator2_filme=$_POST['ator2'];
$ator3_filme=$_POST['ator3'];
$descricao_filme=$_POST['descricao'];
$md = new midia($nome_filme,$tipo_filme,$categoria_filme,$diretor_filme,$ano_filme,$ator1_filme,$ator2_filme,$ator3_filme,$descricao_filme);
$md->add_midia();
//$nome,$tipo,$categoria,$diretor,$ano,$ator1, $ator2, $ator
 ?>

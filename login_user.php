<?php require 'classes.php';


$nome = $_POST["nome"];
$senha = $_POST["senha"];
echo "$nome e $senha";
$user = new usuario($nome," ", $senha);
$col = $user->add_select();

if($col==1){
  session_start();
  $_SESSION["LOGADO"] = $nome;
 header("Location:principal.php");
}else{
  header("location:index.php");
}

 ?>

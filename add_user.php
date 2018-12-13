<?php
require 'classes.php';


$nome = $_POST["nome"];
$login = $_POST['email'];
$senha = $_POST['senha'];

$user = new usuario($login,$nome,$senha);
//echo 'entre no add_user.php';
if($user->add_user()){
  header("location:index.php");
}

 ?>

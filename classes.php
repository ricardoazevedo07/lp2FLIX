<?php
require 'dbconnect.php';

class usuario{
  private $login;
  private $nome;
  private $senha;
  function __construct($login,$nome,$senha){
    $this->login = $login;
    $this->senha = $senha;
    $this->nome = $nome;
  //  echo 'insert into usuarios values('.$login.','.$this->senha.','.$this->nome.')';
  }
  function add_user(){
    $add = new  DBController();
    $query = "insert into usuarios values ('$this->login','$this->senha','$this->nome')";
  //  echo $query;
   return $add->insertDB($query);

  }
  function add_select(){
    $bd = new DBController();
    $colunas = $bd->numRows(" select * from usuarios where senha='$this->senha' and login='$this->login'");
    
    return $colunas;

  }
}

 ?>

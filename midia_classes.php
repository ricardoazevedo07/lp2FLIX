<?php
require 'dbconnect.php';

/**
 *
 */
class midia
{
  private $nome;
  private $tipo;
  private $categoria;
  private $ano;
  private $diretor;
  private $ator1;
  private $ator2;
  private $ator3;
  private $descricao;
  function __construct($nome,$tipo,$categoria,$diretor,$ano,$ator1, $ator2, $ator3, $descricao)
  {
    $this->nome = $nome;
    $this->tipo=$tipo;
    $this->categoria=$categoria;
    $this->ano =$ano;
    $this->ator1=$ator1 ;
    $this->ator2=$ator2;
    $this->ator3=$ator3;
    $this->diretor = $diretor;
    $this->descricao = $descricao;
  }
  function add_midia(){
    $banco = new DBController();
    $query = "insert into midia (nome,tipo,categoria,diretor, ano,ator1,ator2,ator3,descricao) VALUES ('$this->nome','$this->tipo','$this->categoria','$this->diretor','$this->ano','$this->ator1', '$this->ator2', '$this->ator3', '$this->descricao')";
    $banco->insertDB($query);
    header("location:principal.php");

  }
}


 ?>

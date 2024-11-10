<?php

require_once ("Item.php");


class Documento extends Item{

private string $dataCriacao;

public function __construct(string $nome, string $descricao, string $dataCriacao){
    parent::__construct($nome, $descricao);
    $this->setDataCriacao($dataCriacao);
}


public function getDataCriacao(): string{
    return $this->dataCriacao;
}


public function setDataCriacao(string $dataCriacao): void{
    $this->dataCriacao = $dataCriacao;
}



}
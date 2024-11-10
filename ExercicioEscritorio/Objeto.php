<?php

require_once("Item.php");

class Objeto extends Item{


private int $pesoObjeto;


public function __construct(string $nome, string $descricao, int $pesoObjeto){
    $this->setPesoObjeto($pesoObjeto);
    $this->setNome($nome);
    $this->setDescricao($descricao);
    parent::__construct($nome, $descricao);
}

public function setPesoObjeto(int $pesoObjeto): void{
    $this->$pesoObjeto = $pesoObjeto;
}


public function getpesoObjeto(): int{
    return $this->pesoObjeto;
}

}
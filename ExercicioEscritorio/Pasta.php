<?php


require_once("Item.php");


class Pasta extends Item{

    private string $categoriaPasta;

public function __construct(string $nome, string $descricao, string $categoriaPasta){
    parent::__construct($nome, $descricao);
    $this->setCategoriaPasta($categoriaPasta);
}


public function setCategoriaPasta(string $categoriaPasta){
    $this->categoriaPasta = $categoriaPasta;
}


public function getCategoriaPasta(): string{
    return $this->categoriaPasta;
}
}
<?php

class Escritorio{

    private array $armarios = [];






    public function __construct($armarios) { 
        $this->armarios = $armarios; 
    }



    public function adicionarArmario(Armario $armario): void{
        array_push($this->armarios, $armario);

    }


    public function removerArmario($nome): void{
        foreach ($this->armarios as $index => $armario){
            if ($armario == $nome){
                unset($armario[$index]);
            }else{
                echo "Armario não removido";
            }
        }
    }


    public function listarArmario(){
        if(empty($armarios)){
        }else{
        echo "Armario vazio";
    }
}


public function auditoria() { 
    echo "Realizando auditoria do escritório:\n<br><br>"; 
    foreach ($this->armarios as $armario) { $armario->listarGavetas(); 
    } 
}

}
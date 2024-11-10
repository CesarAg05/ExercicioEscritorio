<?php 

class Armario{

private array $gavetas = [];

private $gaveta; 



public function adicionarGaveta(Gaveta $gaveta): void{
   array_push($this->gavetas, $gaveta);
}



public function removerGaveta($nome):void{
    foreach ($this->gavetas as $index => $gaveta){
        if ($gaveta == $nome){
            unset($gaveta[$index]);
        }else{
            echo "Gaveta não removida";
        }
    }
}

public function listarGavetas() { 
    echo "Armario possui as seguintes gavetas:\n<br>"; 
    foreach ($this->gavetas as $gaveta) { 
        echo "- " . $gaveta . "\n"; 
    }
}

public function __construct($gaveta) { 
    $this->gaveta = $gaveta; 
} 



public function getGaveta() { 
    return $this->gaveta; }




}

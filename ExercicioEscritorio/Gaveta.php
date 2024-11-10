<?php 

require_once("Item.php");


class Gaveta{


    private array $itens = [];

    private $gaveta;
     public function __construct($gaveta) { 
        $this->gaveta = $gaveta; 
    } 
    
    public function getGaveta(): mixed { 
        return $this->gaveta; 
    }

    public function adicionarItem($nome): void{
        array_push($this->itens, $nome);
    }

    public function removerItem($nome): void{
        foreach ($this->itens as $index => $item){
            if ($item == $nome){
                unset($itens[$index]);
            }else{
                echo "Não foi possivel remover o item";
            }
        }
    }



    public function listarItem(): array|null { 
        if (empty($this->items)) { 
            return null;
        }
        return $this->itens;
    }
}
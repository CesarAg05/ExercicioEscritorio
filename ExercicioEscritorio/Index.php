<?php
require_once("Item.php");
require_once("Documento.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Gaveta.php");
require_once("Armario.php");
require_once("Escritorio.php");

$item1 = new Item("Caneta", "Bic");
$item2 = new Item("Camisa", "Polo");
$item3 = new Item("Celular", "Motorola");

echo"Itens: <br><br>";

echo "Item 1: " . $item1->getNome(). "\n  \n" . " Marca: " . $item1->getDescricao()."<br>";
echo "Item 2: " . $item2->getNome(). "\n  \n" . "Marca: " . $item2->getDescricao(). "<br>";
echo "Item 3: " . $item3->getNome(). "\n  \n" . "Marca: " . $item3->getDescricao(). "<br><br>";

$gaveta1 = new Gaveta('gaveta 1');
$gaveta2 = new Gaveta('gaveta 2');
$gaveta3 = new Gaveta('gaveta 3');
$gaveta4 = new Gaveta('gaveta 4');

echo "Gavetas: <br><br>";
echo "Gaveta 1 contém: " . $gaveta1->listarItem(). $item1->getNome()."\n\n". $item1->getDescricao(),"\n\ne\n\n". $gaveta1->listarItem(). $item2->getNome()."\n\n". $item2->getDescricao()."<br>";
echo "Gaveta 2 contém: " . $gaveta2->listarItem(). $item3->getNome()."\n\n". $item3->getDescricao()."<br><br>";


echo "Após remover um Item: <br><br>";
echo "Gaveta 1 contém: \n\n". $gaveta1->removerItem("Caneta"). $item2->getNome(). "\n\n". $item2->getDescricao()."<br>";
echo "Gaveta 2 Contém: \n\n" . $gaveta2->removerItem(""). "Nada<br><br>";


echo "Adicionando um Item:<br><br>";
echo "Gaveta 2:\n" . $gaveta2->adicionarItem("Caneta"). $item1->getNome(). "\n\n". $item1->getDescricao()."<br><br>";


$armario1 = new Armario(['Gaveta 1', 'Gaveta 2']);
$armario2 = new Armario(['Gaveta 3', 'Gaveta 4']);

echo $armario1->listarGavetas()."<br>";
echo "Armario 1 possui: \n" . $gaveta1->getGaveta(). "\n". $gaveta2->getGaveta()."<br>";
echo "Armario 2 possui: \n" . $gaveta3->getGaveta(). "\n". $gaveta4->getGaveta()."<br><br>";





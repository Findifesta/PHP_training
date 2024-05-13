<?php
//Utilização da função sort em um arry
$nomes = array('Sergio','Thalles','Marina');
sort($nomes);

foreach ($nomes as $nome){
echo nl2br ($nome."\n");
}

$quantidadeDeNomes = count($nomes);
echo nl2br ($quantidadeDeNomes);
?>
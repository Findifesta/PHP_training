<?php
//utilização da função sort dentro de um array
$nomes = array('Sergio','Thalles','Marina');
sort($nomes);

foreach ($nomes as $nome){
echo nl2br ($nome."\n");
}
?>
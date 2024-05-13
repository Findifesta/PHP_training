<?php
//utilização da função _slice, selecionado uma parte especídica do array
$nomes = array('Sergio','Thalles','Marina');
sort($nomes);

foreach ($nomes as $nome){
echo nl2br ($nome."\n");
}

echo "<br>";

$fatia = array_slice($nomes, 1, 2);


foreach ($fatia as $nome) {
    echo nl2br ($nome."\n");
}
?>
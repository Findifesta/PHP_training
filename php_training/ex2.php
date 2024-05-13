<?php
//seleção condicionada em arrays
function mostrarAcima3000($funcionarios){
    foreach ($funcionarios as $funcionario) {
        $nome = $funcionario[0];
        $salario = $funcionario[1];
   
        if ($salario > 3000){
            echo nl2br ($nome."\n");
        }
    }
}
$funcionarios = array(
        array("Sergio", 3500), array("Marina", 700), array ("Thalles",5000)
);

mostrarAcima3000($funcionarios);
?>
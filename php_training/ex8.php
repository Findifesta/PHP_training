<?php
//Criação de aplicação que acesse através de variáveis de instância as classes Condomínio e Padaria, e que possa inserir valores aos atributos de ambas e mostrá-los no navegador
require_once 'ex6.php';
require_once 'ex7.php';

$condominio3 = new Condominio();
$condominio3->setEndereco('Av. Marechal Teodoro nº 8');
$condominio3->setApartamentos(5);
$condominio3->setNome('Vila Neblininha');
$condominio3->setProprietario('Florêncio Constâncio');

$padaria2 = new Padaria();
$padaria2->setEndereco('Av. Felipe Camarão nº 26');
$padaria2->setNome('Futura Era');
$padaria2->adicionarProduto('Cará');
$padaria2->adicionarProduto('Suco de caju');
$padaria2->adicionarProduto('Cigarro');

echo "<br>";
echo nl2br ('O condomínio '.$condominio3->getNome().' está localizado no endereço '.$condominio3->getEndereco().', ele possui '.$condominio3->getApartamentos().' apartamentos. Para alugar um, fale com o proprietário, o senhor '.$condominio3->getProprietario()."\n");
echo "<br>";
echo nl2br ('A padaria '.$padaria2->getNome().' fica na '.$padaria2->getEndereco().', e vende:'."\n");
$produtos = $padaria2->listarProduto();
foreach($produtos as $produto){
    echo nl2br ('- '.$produto."\n");
}

?>
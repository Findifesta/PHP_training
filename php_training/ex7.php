<?php
//Abstração de uma padaria, também com atributos pertinentes e os métodos de manipulação dos atributos
class Padaria {
    private $nome;
    private $endereco;
    private $produto=[];

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function adicionarProduto($produto){
        $this->produto[] = $produto;
    }

    public function listarProduto(){
        return $this->produto;
    }
}

$padaria1 = new Padaria();
$padaria1->setEndereco('Av. Senador Dantas nº 286');
$padaria1->setNome('Velha Era');
$padaria1->adicionarProduto('Pão francês');
$padaria1->adicionarProduto('Leite');
$padaria1->adicionarProduto('Chiclete');
$produtos = $padaria1->listarProduto();
echo nl2br ('A padaria '.$padaria1->getNome().' fica na '.$padaria1->getEndereco().', e vende:'."\n");

foreach($produtos as $produto){
    echo nl2br ('- '.$produto."\n");
}
?>
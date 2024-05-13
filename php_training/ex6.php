<?php
//Código que represente a abstração de um condomínio, com atributos pertinentes e os respectivos métodos set( ) e get( ) para inserir e retornar os valores dos atributos.
class Condominio {
    private $endereco;
    private $apartamentos;
    private $nome;
    private $proprietario;

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setApartamentos($apartamentos){
        $this->apartamentos = $apartamentos;
    }

    public function getApartamentos(){
        return $this->apartamentos;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setProprietario($proprietario){
        $this->proprietario = $proprietario;
    }

    public function getProprietario(){
        return $this->proprietario;
    }
}

$condominio1 = new Condominio();
$condominio1->setEndereco('Av. Senador Dantas nº 286');
$condominio1->setApartamentos(20);
$condominio1->setNome('Vila Orvalinho');
$condominio1->setProprietario('Rogivaldo Rogivésio');

echo nl2br ('O condomínio '.$condominio1->getNome().' está localizado no endereço '.$condominio1->getEndereco().', ele possui '.$condominio1->getApartamentos().' apartamentos. Para alugar um, fale com o proprietário, o senhor '.$condominio1->getProprietario()."\n");

$condominio2 = new Condominio();
$condominio2->setEndereco('Av. Senador Feijó nº 86');
$condominio2->setApartamentos(10);
$condominio2->setNome('Vila Cascatinha');
$condominio2->setProprietario('Gergeovaldo Teóscio');

echo nl2br ('O condomínio '.$condominio2->getNome().' está localizado no endereço '.$condominio2->getEndereco().', ele possui '.$condominio2->getApartamentos().' apartamentos. Para alugar um, fale com o proprietário, o senhor '.$condominio2->getProprietario()."\n");

?>

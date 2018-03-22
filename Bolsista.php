<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;
    // Metodos especiais
    function getBolsa() {
        return $this->bolsa;
    }
    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }
    //Metodos
    public function renovarBolsa(){
        echo "</br>Bolsa renovada";
    }
    //Sobrescrever metodo
    public function pagarMensalidade() {
        echo $this->getNome() . " e bolsista! Entao paga com desconto!</br>";
    }
}

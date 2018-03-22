<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matricula;
    private $curso;
    //Metodos Especiais
    function getMatricula() {
        return $this->matricula;
    }
    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    function getCurso() {
        return $this->curso;
    }
    function setCurso($curso) {
        $this->curso = $curso;
    }
    //Metodos
    public function pagarMensalidade() {
        echo "</br>Pagando mensalidade do aluno " . $this->getNome() . "</br>";
    }

}

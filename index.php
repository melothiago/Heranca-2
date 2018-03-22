<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        
        $v1 = new Visitante();
        $v1->setNome("Maria");
        $v1->setIdade(20);
        $v1->setSexo("F");
        print_r($v1);
        
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informatica");
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("Jubileu");
        $b1->setMatricula(2222);
        $b1->setIdade(18);
        $b1->setSexo("M");
        $b1->setCurso("Administracao");
        $b1->setBolsa(12.5);
        $b1->pagarMensalidade();
        print_r($b1);
        
        ?>
        </pre>
    </body>
</html>

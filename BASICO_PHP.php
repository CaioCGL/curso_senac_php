<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $nome = "Caio Guilherme ";
    $sobrenome = "Lisboa de Oliveira";
    $idade = 21;
    $carros = array("Volvo XC40", "BMW M3", "A45 AMG", "Porsche 911 GT3", "Audi RS3");
    echo ("Aluno: $nome $sobrenome <br>
                Idade: $idade <br>
                Carro preferido: $carros[3] <br>
                Carro menos preferido: $carros[0]");

    /* CLASSES */

    class Carros
    {
        public $cor;
        public $modelo;
        public $ano;

        public function __construct($cor, $modelo, $ano)
        {
            $this->cor = $cor;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function mensagem()
        {
            return "<h1>Modelo: $this->modelo <br>
                    Cor: $this->cor  <br>
                    Ano: $this->ano </h1>";
        }
    }

    $porsche = new Carros("vermelho", "porsche 911 GT3", 2020);

    echo ($porsche->mensagem());

    /* STRINGS */

    echo str_word_count($porsche->mensagem());  //retorna a quantidade de palavras na string
    echo "<br>";
    echo strrev($porsche->mensagem());  //inverte a string
    echo "<br>";
    echo strpos($porsche->mensagem(), "Cor");   //retorna a posição de determinada palavra
    echo "<br>";
    echo str_replace("vermelho", "azul", $porsche->mensagem());    //substitui determinada palavra da string
    echo "<br>";
    $A = "A,";
    $B = "B,";
    $A .= $B;   //concatenação das duas strings
    $A .= "C";
    echo $A;

    /* MATEMÁTICA */

    echo "<br>";
    $numeros = array(1, 4, 121, 6, 8, 323, 6, 21, 51, -21);
    echo (max($numeros));   //retorna o maior número
    echo "<br>";
    echo (min($numeros));   //retorna o menor número
    echo "<br>";

    $numero = 1024;
    echo ("A raiz quadrada de $numero é igual a " . sqrt($numero));
    echo "<br>";
    echo rand(1, 50) . "<br>";  //retorna um número aleatório dentro do intervalo definido
    echo (1 + 3) . "<br>";
    echo (1 * 9123) . "<br>";
    echo (5 % 2) . "<br>";  //5 mod 2
    echo (2 ** 3) . "<br>";


    /* CONSTANTES */

    echo "<br>";
    define("CUMPRIMENTO", "Bem vindo"); // definição da constante
    echo CUMPRIMENTO;


    /* IF ELSE */


    echo "<br>";
    echo "<br>";

    $n1 = 10;
    $n2 = 10;
    $n3  = "10";

    if ($n1 == $n2) {
        echo "São iguais<br>";
    } else {
        echo "São diferentes<br>";
    }

    if ($n1 == $n3) {
        echo "São iguais<br>";
    } else {
        echo "São diferentes<br>";
    }

    if ($n1 === $n3) {
        echo "São iguais<br>";
    } else {
        echo "São diferentes<br>";
    }

    date_default_timezone_set("America/sao_paulo");
    $data_hora = date("d/m/Y H:i:s");
    $hora = date("H");
    echo "<br>";
    echo $data_hora;
    echo "<br>";

    if ($hora < 12) {
        echo "Bom dia!";
    } elseif ($hora < 18) {
        echo "Boa tarde!";
    } else {
        echo "Boa noite!";
    }

    $nota1 = 6.5;
    $nota2 = 5.5;
    $nota3 = 5;
    $nota4 = 7;
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 7) {
        echo "<br>Aprovado!!!";
    } elseif ($media < 5) {
        echo "<br>Reprovado!!!";
    } else {
        echo "<br>Recuperação!!!";
    }

    /* SWITCH - CASE */

    echo "<br>";
    $time = "Atlético-MG";

    switch ($time) {
        case "Atlético-MG":
            echo "<br>Atleticano";
            break;
        case "Flamengo":
            echo "<br>Flamenguista";
            break;
        case "Grêmio":
            echo "Gremista";
            break;
        case "São Paulo":
            echo "<br>São paulino";
            break;
        case "Cruzeiro":
            echo "<br>Maria";
            break;
        default:
            echo "<br>Time não reconhecido.";
    }

    /* LOOPS */

    echo "<br>";
    $i = 1;

    echo "<br>=============================================";
    echo "<br>while";
    echo "<br>=============================================";

    while ($i <= 10) {
        echo "<br>Número $i";
        $i++;
    }

    $i = 1;
    echo "<br>=============================================";
    echo "<br>do-while";
    echo "<br>=============================================";
    do {
        echo "<br> Identação de número $i";
        $i++;
    } while ($i <= 10);

    echo "<br>=============================================";
    echo "<br>for";
    echo "<br>=============================================";

    ?>

    <ul>
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Identação de número $i do laço for.</li>";
        }

        ?>
    </ul>

    <?php

    echo "<br>=============================================";
    echo "<br>foreach + arrays";
    echo "<br>=============================================";
    echo "<br>";

    $nomes = array("João", "Maria", "Pedro", "Luzia", "José");

    foreach ($nomes as $value) {
        echo $value . " - ";
    }
    echo "<br>";
    foreach ($nomes as $indice => $value) {
        echo $indice . " - " . $value . "<br>";
    }

    // semelhante a um Map
    $nomes2 = array("João" => "21", "Maria" => "25", "Pedro" => "33", "Luzia" => "45", "José" => "15");
    echo "<br>";
    foreach ($nomes2 as $indice => $value) {
        echo $indice . " - " . $value . "<br>";
    }
    echo "<br>Quantidade de Elementos do array: " . count($nomes);

    echo "<br>=============================================";
    echo "<br>Funções";
    echo "<br>=============================================";
    echo "<br>";

    function exibirMsg()
    {
        echo "<br>Bem vindo ao nosso curso!<br>";
    }
    exibirMsg();

    function exibirMsg2($nome, $sobrenome)
    {
        echo "<br>$nome $sobrenome, bem vindo ao nosso curso!<br>";
    }
    exibirMsg2("Caio", "Guilherme Lisboa de Oliveira");

    function soma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }
    $resultado = soma(4, 6);
    echo "<br>Resultado da soma: $resultado";

    function par_ou_impar($num)
    {
        $resto = $num % 2;
        if ($resto == 0) {
            echo "<br>O número é par<br>";
        } else {
            echo "<br>O número é ímpar<br>";
        }
    }

    par_ou_impar(5);

    ?>


</body>

</html>
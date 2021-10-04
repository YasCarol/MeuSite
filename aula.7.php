<?php
//OPERADORE URINARIO (expressao ? VALOR VERDADEIRO : VALOR FALSO) 
$n1 = $_GET['10'];
$n2 = $_GET['b'];
$tipo = $_GET['op'];
echo "Os valores passados foram $n1 e $n2 <br>";
$r = ($tipo=="s") ? $n1+$n2 : $n1*$n2;
echo " O resultado será $r";

exit();

//OPERADOR === verificar se o valor é igual e do mesmo tipo
$a = 3;
$b = "3";
$r= ($a === $b)?"SIM":"NAO";
echo "As variaveis $a e $b sao iguais? $r";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$m = ($n1 + $n2)/2;
echo " A media entre $n1 e $n2 é $m <br/>";
$sit = ($m<6)?"REPROVADO":"APROVADO";
echo "A situação é $sit"; //ou echo "A situação é ". (($m<6)?"REPROVADO":"APROVADO")

//OPERADORES &&->e/OR ||->ou/!->nao VOTO OBTIGATORIO OU NAO
$ano = $_GET['ano'];
$idade = 2021 - $ano;
echo "Quem nasceu em $ano tem idade de $idade anos ";
$tipo = ($idade>=18 && $idade<65)?"VOTO OBRIGATORIO":"VOTO NAO OBRIGATORIO ";
echo $tipo;

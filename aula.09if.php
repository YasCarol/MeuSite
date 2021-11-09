<?php
/*Condições  aninhadas (condicional dentro da outra)
ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir
$ano_Nasc= isset($_GET['AC'])?$_GET['AC']:2002;
$idade= (date("Y")-$ano_Nasc);
if ($idade<16){
echo "Voce tem $idade anos e não poderá dirigir e nem votar";
}
elseif (($idade>=16 && $idade<18)|| ( $idade>=65)){
   echo "Voce tem $idade anos e seu voto é opcional mas não poderá dirigir ";
        } 
    else {
        echo "Voce tem $idade e seu voto é obrigatório e poderá dirigir";

} */

//APROVADO, REPROVADO OU DE RECUPERAÇAO 
$n1= 2;
$n2= 4;
$media= ($n1+$n2)/2;
if ($media>0 && $media <5){
    echo " A media entre $n1 e $n2 é igual a $media <br/> Situacao do Aluno: REPROVADO!";
}
elseif ($media>=5 && $media<7){
    echo "A media entre $n1 e $n2 é igual a $media <br/> Situacao do Aluno: RECUPERACAO!!";
}
    else {
        echo "A media entre $n1 e $n2 é igual a $media <br/> Situacao do Aluno: APROVADO!"; 

}

?>
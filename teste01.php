<?php

echo "Olá Mundo, meu primeiro site php";
echo " <br>";
 $nome = "Ana Paula";
 $idadeusuario = "25";
 $salario = "2,00";

 echo $nome;
 echo "<br>";
 echo $idadeusuario;
 echo "<br>";
 echo $salario;
 echo "<br>";
 echo gettype($salario);
 
 $salarioFormatado = number_format($salario, 2, '.', ',');
 




?>

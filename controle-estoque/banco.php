<?php

//cria conexao
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'controleestoque';

@$conn=mysql_connect($servidor,$usuario,$senha);

$conn=mysql_select_db($banco,$conn);
//para resolver os problemas de caracteres. Verificar em produção
mysql_query("set names 'utf8'");
?>
<?php

	$bd_local = 'localhost';
	$usuario = 'root';
	$senha = '';
	$bd_nome = 'bancotccii';

	if (!mysql_connect($bd_local,$usuario,$senha)){
	echo ('Nao foi possivel conectar: ' . mysql_error());
}

if (!mysql_select_db($bd_nome)){
	echo ('Nao foi possivel conectar ao banco de dados: ' . mysql_error());
}

?>
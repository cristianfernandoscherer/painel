<?php

require 'config.php';

if(!empty($_GET['codigo'])){
	$url = URL_BASE."rest.php/getDadosUsuario=".$_GET['codigo'];
	$context = stream_context_create(array(
	    'http' => array(
	        'method' => 'GET',
	        'header' => 'Content-Type: application/json'
	    )
	));
	$result = file_get_contents($url, false, $context);
	$retorno = json_decode($result);

	//COOKIE DE 7 DIAS
	setcookie("nome",$retorno->nome,strtotime('+7 days'));
	setcookie("email",utf8_encode($retorno->email),strtotime('+7 days'));
	setcookie("telefone",$retorno->telefone,strtotime('+7 days'));
	setcookie("empresa_id",$retorno->empresa_id,strtotime('+7 days'));
	setcookie("usuario_id",$retorno->usuario_id,strtotime('+7 days'));

	header("Location".URL_BASE."pages/index.php");

}else{
	header("Location:".URL_BASE);
}



?>
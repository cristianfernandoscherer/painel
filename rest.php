<?php

	//CONEXAO BANCO 
	require 'config.php';
	require 'db.php';
	require 'vendor/autoload.php';

	$app = new \Slim\App();

	//MÉTODO DE LOGIN
	$app->get('/autentica={codigo}', function($request, $response, $args){
		$conexao = new db();

		$dados = $conexao->getInstance()->prepare('SELECT * FROM usuario WHERE CONCAT(MD5(login), MD5(senha)) = :codigo LIMIT 1');
	    $dados->bindValue(':codigo', $request->getAttribute('codigo'));
	    $dados->execute();
	   
		if ($dados->rowCount() > 0) {
		    echo $request->getAttribute('codigo');
		}
		$conexao->close();
	});


	//MÉTODO DE COLETA DADOS USUARIO
	$app->get('/getDadosUsuario={codigo}', function($request, $response, $args){
		$conexao = new db();

		$dados = $conexao->getInstance()->prepare('SELECT usuario_id, nome, telefone, email, empresa_id, token FROM usuario WHERE CONCAT(MD5(login), MD5(senha)) = :codigo LIMIT 1');
	    $dados->bindValue(':codigo', $request->getAttribute('codigo'));
	    $dados->execute();
	   
		if ($dados->rowCount() > 0) {
		     while ($registro = $dados->fetch(PDO::FETCH_OBJ)) {
		      	echo json_encode($registro);
			}
		}
		$conexao->close();
	});

	$app->run();	
?>
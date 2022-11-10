<?php
	$usuario = $_POST['login'];
	$senha = $_POST['senha'];
	
	if ($usuario=="admin" && $senha=="admin") {
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}

		$_SESSION['usuario'] = 'admin';
		header('Location: /painel.html');

	}
	else {
		echo "ERRO!";
	}

?>
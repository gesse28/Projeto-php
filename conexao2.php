<?php
	try {
		$pdo = new PDO(
		'mysql:host=localhost;dbname=contatodoprojeto;charset=utf8',
		'root', '');
	}
	catch(PDOException $e){
		echo "Erro: ", $e->getMessage();
	}
?>
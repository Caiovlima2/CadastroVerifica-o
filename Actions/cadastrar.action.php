<?php 

	include_once "../Classes/Pessoa.class.php";

	$p = new Pessoa();

	$p->setNome($_POST["nome"]);
	$p->setEmail($_POST["email"]);
	$p->setData($_POST["data"]);
	$p->setTelefone($_POST["telefone"]);
	$p->setSexo($_POST["radioSexo"]);

	$p->cadastrar();
?>
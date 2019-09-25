<?php

class Usuario
{
	public $msgErro = "";

	public function cadastrar($nome, $cpf, $datanasc, $rg, $email, $senha, $fk_usuario_endereco)
	{
		include("../persistence/conexao.php");
		//verificar se já foi cadastrado
		$sql = $conexao->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql->bindValue(":e", $email);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			return false;
		} else { //caso não, cadastrar
			$sql = $conexao->prepare("INSERT INTO usuario (nome, cpf, datanasc, rg, email, senha, fk_usuario_endereco) VALUES (:n,:c,:d,:r,:e,:s,:f)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":c", $cpf);
			$sql->bindValue(":d", $datanasc);
			$sql->bindValue(":r", $rg);
			$sql->bindValue(":e", $email);
			$sql->bindValue(":s", md5($senha));
			$sql->bindValue(":f", $fk_usuario_endereco);
			$sql->execute();
			return true;
		}
		mysqli_close($conexao);
	}

	public function logar($email, $senha)
	{
		global $pdo;
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s ");
		$sql->bindValue(":e", $email);
		$sql->bindValue(":s", md5($senha));
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true;
		} else {
			return false;
		}
	}
}

<?php

class usuario {
	private $pdo;
	public $msgErro = "";
	public function conexao($nome, $host, $email_usuario, $senha){
		global $pdo;
		global $msgErro;
		try{
		$pdo = new PDO("mysql: bdname=".$nome.";host=".$hot, $email_usuario, $senha);
	}catch (PDOException $e){
		$msgErro = $e->getMessage();
	}
}

	public function cadastrar($nome_usuario, $dtnasc_usuario, $email_usuario, $senha){
		global $pdo;

		//verificar se o email já esta cadastrado
		$sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email_usuario = :e");
		$sql->bindValue(":e", $email_usuario);
		$sql->execute();

		if($sql->rowCount()>0){
			return false;//ja esta cadastrada 
		}
		else{
			//cadastrar 
			$sql = $pdo->prepare("INSERT INTO usuario (nome_usuario, dtnasc_usuario, email_usuario, senha) VALUES(:nome_usuario, :dtnasc_usuario, :email_usuario, :senha)");
			$sql->bindValue(":nome_usuario", $nome_usuario);
			$sql->bindValue(":dtnasc_usuario", $dtnasc_usuario);
			$sql->bindValue(":email_usuario", $email_usuario);
			$sql->bindValue(":senha", $senha);
			$sql-> execute();
			return true; 
		}
	}


	public function logar ($email_usuario, $senha){

	}
}
?>
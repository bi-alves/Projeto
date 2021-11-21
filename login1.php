<?php
	session_start();
	include("conexao.php");

	// recuperar login 
	$email_usuario = isset($POST["email_usuario"]) ? addslashes(trim($_POST["email_usuario"])) : FALSE;
	// Recupera a senha, a criptografando em MD5
	$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

	//usuario não forneceu a senha ou emial 

	if (!'$email_usuario' || !'$senha'){
		echo "Você deve digitar seu e-mail e senha!";
		
	}

	$query = "SELECT 'nome_usuario', 'id_usuario', 'dtnasc_usuario', 'email_usuario', 'senha' FROM usuario WHERE '$email_usuario'";
	$result_id = mysql_query($query) or die("Erro no banco de dados!");
	$total = mysql_num_rows($result_id);


	if ($total)
	{
		$dados = mysql_fetch_array($result_id);

		if (!strcmp('$senha', '$dados'["senha"]))
		{
			$_SESSION["id_usuario"] = $dados ["id_usuario"];
			$_SESSION["email_usuario"] = $dados ["email_usuario"];
			$_SESSION["nome_usuario"] = $dados ["nome_usuario"];
			$_SESSION["dtnasc_usuario"] = $dados ["dtnasc_usuario"];
			
			header("Location: principal.html");
			exit;
		}
		//senha invalida
		else{
			echo "Senha Inválida!";
			exit;
		}
	}
	//email invalido
	else{
		echo "O E-mail fornecido por você é inexistente no sistema. Por favor, realize seu cadastro!";
		exit;
	}
?>
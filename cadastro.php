<html>
<head>
	<title>Cadastro realizado com sucesso!</title>
</head>
<body>
	<?php
		require_once ('conexao.php');
		$nome_usuario= $_POST["nome_usuario"];
		$dtnasc_usuario= $_POST["dtnasc_usuario"];
		$email_usuario = $_POST["email_usuario"];
		$senha_usuario = $_POST["senha_usuario"];
		//verificar se já existe o email cadastrado
		//$query = "SELECT id_usuario FROM usuario WHERE 'email_usuario' VALUES  ('$email_usuario')";

		//	if('$email_usuario' = mysql_num_rows["email_usuario"]>0){
		//	return false; // ja esta cadastrado
		//}

		//else{
			$query = "INSERT INTO usuario (nome_usuario, dtnasc_usuario, email_usuario, senha) values('$nome_usuario', '$dtnasc_usuario', '$email_usuario', '$senha_usuario')";
		
		mysql_query ($query) or die (mysql_error());
		echo "Cadastro realizado com sucesso. Faça seu Login.";

		return true;
		//}

		
		
	?>

</body>
</html>
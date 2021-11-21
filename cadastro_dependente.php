<html>
<head>
	<title>Cadastro realizado com sucesso!</title>
</head>
<body>
	<?php
		require_once ('conexao.php');
		$nome_dependente= $_POST["nome_dependente"];
		$dtnasc_dependente= $_POST["dtnasc_dependente"];
		$sexo_dependente = $_POST["sexo_dependente"];
		

		echo $query = "INSERT INTO dependente (nome_dependente, dtnasc_dependente, sexo_dependente) values('$nome_dependente', '$dtnasc_dependente', '$sexo_dependente')";
		
		mysql_query ($query) or die (mysql_error());
		echo "Cadastro realizado com sucesso. Faça seu Login."
	?>

</body>
</html>
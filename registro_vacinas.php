<html>
<head>
	<title>Cadastro realizado com sucesso!</title>
</head>
<body>
	<?php
		require_once ('conexao.php');
		$tipo_calen= $_POST["tipo_calen"];
		$nome_vacina= $_POST["nome_vacina"];
		$dose = $_POST["dose"];
		$data_vacina = $_POST["data_vacina"];
		$lote_vacina = $_POST["lote_vacina"];
		$lab_prod = $_POST["lab_prod"];
		$unidade = $_POST["unidade"];
		

		echo $query = "INSERT INTO registro_vacinas (tipo_calen, nome_vacina, dose, data_vacina, lote_vacina, lab_prod, unidade) values('$tipo_calen', '$nome_vacina', '$dose', '$data_vacina', '$lote_vacina', '$lab_prod', '$unidade')";
		
		mysql_query ($query) or die (mysql_error());
		echo "Cadastro realizado com sucesso. Faça seu Login."
	?>

</body>
</html>
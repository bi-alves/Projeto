<?php
	session_start();
	include("conexao.php");

	// Primeiro verifica se o post não está vazio
if (!empty($_POST) AND !empty($_POST['email_usuario']) OR !empty($_POST['senha'])) {
    mysql_connect('localhost', 'root', '', 'banctccii') or trigger_error(mysql_error());
    // Tenta se conectar a um banco de dados MySQL
    $email_usuario = mysql_real_escape_string($_POST['email_usuario']);
    $senha = mysql_real_escape_string($_POST['senha']);
   
    //$sql = "SELECT `id`, `email_usuario`, `



	$email_usuario = mysql_real_escape_string(conexao, $_POST['email_usuario']);
	$senha = mysql_real_escape_string(conexao, $_POST['senha']);

	$_SESSION['login'] = $email;

	$sql = "select count(*) as total from where usuario = '$email_usuario'";
	$result = mysqli_query(sql);
	$row = mysql_fetch_assoc(result);

	if($row['total']==0){
		$_SESSION['usuario_nao_existe'] = true;
		header("Location cadastro.php");
		exit;
	}
?>
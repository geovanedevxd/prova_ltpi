<!DOCTYPE html>
<!-- form_alteracao_curso.html -->
<?php
include "../inc/conectabd.inc.php";
include "../inc/funcoes.inc.php";

$id = $_GET["id"];
$nome = $_GET["curso"];
?>

<html>

<head>
	<title>Cadastro de curso</title>
	<meta charset="utf-8">
</head>

<body>
	<h1>Atualizar curso</h1>
	<form action="alteracao_curso.php" method="GET">
		<label for="id_aluno">ID curso:</label>
		<input type="number" name="id_curso" value="<?php echo $id; ?>"><br>
		<label for="">Novo Nome</label>
		<input type="text" name="ds_curso" value="<?php echo $nome;?>">
		<br>
		<label for="for">Carga Horária</label>
		<input type="number" name="carga_horaria">
		<br>
		<label for="for">Data de Início</label>
		<input type="date" name="dt_inicio">
		<input type="submit" value="Ok">
	</form>
</body>
</html>
<!DOCTYPE html>
<!-- cadastro.html -->
<html>

<head>
	<title>Cadastro de Curso</title>
	<meta charset="utf-8">
</head>

<body>
	<h1>Cadastro de Curso</h1>
	<form action="insercao_curso.php" method="GET">
		<label for="">Nome</label>
		<input type="text" name="curso" id="id_curso">
		<br>
		<label for="">Carga Horária</label>
		<input type="number" name="carga_horaria">
		<br>
		<label for="">Data de Início</label>
		<input type="date" name="dt_inicio">
		<input type="submit" value="Ok">
	</form>
</body>

</html>
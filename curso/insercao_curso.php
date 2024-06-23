<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>

<head>
  <title>Cadastro de curso - Inclusão</title>
  <meta charset="utf-8">
</head>

<body>
  <?php
  // efetua inclusao do curso informado em cadastro_curso.php
  
  $curso = $_GET["curso"];
  $carga_horaria = $_GET["carga_horaria"];
  $dt_inicio = $_GET["dt_inicio"];

  include_once "../inc/conectabd.inc.php";
  $query = "SELECT ds_curso from tb_curso where ds_curso = '$curso'";
  $respostadb = mysqli_query($link, $query);
  $linhas = mysqli_num_rows($respostadb);
  if ($linhas > 0) {
    echo "Já existe um curso com esse nome";
  } else {
    
    $query = "INSERT INTO tb_curso (ds_curso,nr_carga_horaria,dt_inicio) VALUES ('$curso', $carga_horaria , '$dt_inicio')";
    if ($result = mysqli_query($link, $query)) {
      echo "Inclusão efetuada com sucesso";
    }
  }

  // fecha a conexão
  mysqli_close($link);
  ?>
  <br>
  <a href="consulta_curso.php">Ver cursos cadastrados</a>

</body>

</html>
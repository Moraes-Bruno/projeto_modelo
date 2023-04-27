<?php 

require_once "../Classes/Disciplina.php";

$id = $_POST['id'];
$disciplina = new Disciplina($id);

$disciplina->nome = $_POST['nome'];
$disciplina->carga_horaria = $_POST['carga_horaria'];

$disciplina->atualizar();

header('Location: disciplina_listar.php');


?>
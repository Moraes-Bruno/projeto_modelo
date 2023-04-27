<?php 

require_once "../Classes/Turma.php";

$id = $_POST['id'];
$turma = new Turma($id);

$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

$turma->atualizar();

header('Location: turmas_listar.php');


?>
<?php

require_once "../Classes/Disciplina.php";

$id = $_GET['id'];

$turma = new Disciplina($id);

$turma->excluir();

header('Location: turmas_listar.php');


?>
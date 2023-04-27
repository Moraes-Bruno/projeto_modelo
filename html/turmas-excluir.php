<?php

require_once "../Classes/Turma.php";

$id = $_GET['id'];

$turma = new Turma($id);

$turma->excluir();

header('Location: turmas_listar.php');


?>
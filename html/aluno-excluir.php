<?php

require_once "../Classes/Aluno.php";

$id = $_GET['id'];

$aluno = new Aluno($id);

$aluno->excluir();

header('Location: alunos_listar.php');


?>
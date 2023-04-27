<?php

require_once '../Classes/Turma.php';

$turma = new Turma();

$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

$turma->inserir();

?>
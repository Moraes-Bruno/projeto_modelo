<?php

require_once '../Classes/Disciplina.php';

$disciplina = new Disciplina();

$disciplina->nome = $_POST['nome'];
$disciplina->carga_horaria = $_POST['carga_horaria'];

$disciplina->inserir();

?>
<?php 

require_once '../Classes/Aluno.php';

$aluno = new Aluno();

$aluno->nome = $_POST['nome'];
$aluno->email = $_POST['email'];
$aluno->telefone = $_POST['telefone'];
$aluno->genero = $_POST['genero'];
$aluno->cep = $_POST['cep'];
$aluno->endereco = $_POST['rua'];
$aluno->bairro = $_POST['bairro'];
$aluno->cidade = $_POST['localidade'];
$aluno->estado = $_POST['uf'];
$aluno->curso = $_POST['curso'];

$aluno->inserir();

?>
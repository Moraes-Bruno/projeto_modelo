<?php require_once 'verifica-usuario.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Sistema academico</title>
</head>
<body>
    <div class="d-flex flex-column  w-50 gap-4 rounded-3 m-auto mt-5 p-4 opcoes">
        <h1 class="text-center mt-2 mb-2">Sistema Academico</h1>
        <a href="turmas_inserir.php" class="btn btn-primary w-75 m-auto d-block">Gerenciar Turmas</a>
        <a href="disciplina_inserir.php" class="btn btn-primary w-75 m-auto d-block">Gerenciar Disciplinas</a>
        <a href="alunos_inserir.html" class="btn btn-primary w-75 m-auto d-block">Gerenciar Alunos</a>
        <a href="alunos_listar.php" class="btn btn-primary w-75 m-auto d-block">Exibir Alunos</a>
        <a href="logout.php" class="btn btn-danger w-75 m-auto d-block">Sair</a>
    </div>
</body>
</html>
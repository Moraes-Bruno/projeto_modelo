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
<body class="p-3">
    <h1 class="text-center">Sistema academico</h1>

    <h3 class="mt-3 text-center">Nova Disciplina</h3>

    <form action="disciplina_gravar.php" method="post" class=" d-flex flex-column w-50 justify-content-center align-items-center m-auto rounded-4 p-4">

        <label for="descTurma" class="form-label mt-3 h5
        ">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control w-75">
        
        <label for="ano" class="form-label mt-3 h5
        ">Carga Horaria</label>
        <input type="number" name="carga_horaria" id="carga_horaria" class="form-control w-75">
      
        <div class="d-flex flex-row justify-content-between align-items-baseline w-75">
            <a href="home.php" class="btn btn-danger">Cancelar</a>
            <input type="submit" value="gravar" class="btn btn-primary mt-3 w-25 ">
        </div>
    </form>
</body>
</html>
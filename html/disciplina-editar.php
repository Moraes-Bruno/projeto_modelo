<?php

require_once "../Classes/Disciplina.php";

$id = $_GET['id'];

$disciplina= new Disciplina($id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sistema academico</title>
</head>
<body class="p-3">
    <h1>Sistema academico</h1>
    <h3>Editar Disciplina</h3>

    <form action="disciplina-editar-gravar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $disciplina->id ?>">
        <label for="descTurma">Nome</label>
        <input type="text" name="nome" value="<?php echo $disciplina->nome ?>">
        <br><br>
        <label for="ano">Carga Horaria</label>
        <input type="number" name="carga_horaria" value="<?php echo $disciplina->carga_horaria ?>">
        <br></br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
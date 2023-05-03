<?php

require_once "../Classes/Turma.php";

$id = $_GET['id'];

$turma = new Turma($id);

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
    <h3>Editar Turma</h3>

    <form action="turmas-editar-gravar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $turma->id ?>">
        <label for="descTurma">Turma:</label>
        <input type="text" name="descTurma" value="<?php echo $turma->descTurma ?>">
        <br><br>
        <label for="ano">Ano:</label>
        <input type="number" name="ano" value="<?php echo $turma->ano ?>">
        <br></br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
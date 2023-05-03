<?php

require_once '../Classes/Disciplina.php';

$turma = new Disciplina;

$lista = $turma->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sistema</title>
</head>
<body class="p-3">
    <h1 class="text-center mt-3">Sistema academico</h1>
    <h3 class="text-center mt-3">Disciplinas</h3>
    <table class="text-center border border-dark w-75 m-auto mt-3">
        <tr class="border border-dark">
            <th>Codigo</th>
            <th>Nome</th>
            <th>Carga</th>
            <th>Ações</th>
        </tr>

        <?php foreach($lista as $linha): ?>
            
            <tr class="border border-dark">
                <td><?php echo $linha['id']?></td>
                <td><?php echo $linha['nome']?></td>
                <td><?php echo $linha['carga_horaria']?></td>

                <td>
                    <a href="disciplina-editar.php?id=<?php  echo $linha['id'] ?>" class="text-decoration-none link-primary">Atualizar</a>
                    <a href="disciplina-excluir.php?id=<?php echo $linha['id'] ?>" class="text-decoration-none link-primary">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>
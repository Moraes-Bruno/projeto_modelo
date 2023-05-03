<?php

require_once '../Classes/Turma.php';

$turma = new Turma;

$lista = $turma->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sistema Academico</title>
</head>
<body class="p-3">
    <h1 class="text-center mt-3">Sistema academico</h1>
    <h3 class="text-center mt-3">Turmas</h3>
    <table class="text-center border border-dark w-75 m-auto mt-3">
        <tr class="border border-dark">
            <th>Codigo</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>

        <?php foreach($lista as $linha): ?>
            
            <tr  class="border border-dark">
                <td><?php echo $linha['id']?></td>
                <td><?php echo $linha['descTurma']?></td>
                <td><?php echo $linha['ano']?></td>

                <td>
                    <a href="turmas-editar.php?id=<?php  echo $linha['id'] ?>">Atualizar</a>  
                    <a href="turmas-excluir.php?id=<?php echo $linha['id'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>
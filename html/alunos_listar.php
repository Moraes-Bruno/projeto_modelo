<?php

require_once '../Classes/Aluno.php';

$aluno = new Aluno;

$lista = $aluno->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Sistema</title>
</head>
<body class="p-3">
    <h1 class="text-center mt-3">Sistema academico</h1>
    <h3 class="text-center mt-3">Alunos</h3>
    <table class="text-center border border-dark w-75 m-auto mt-3 bg-light">
        <tr class="border border-dark">
            <th>Codigo</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>

        <?php foreach($lista as $linha): ?>
            
            <tr class="border border-dark">
                <td><?php echo $linha['id']?></td>
                <td><?php echo $linha['nome']?></td>
                <td><?php echo $linha['curso']?></td>

                <td>
                    <a href="alunos_editar.php?id=<?php  echo $linha['id'] ?>" class="text-decoration-none link-primary">Atualizar</a>
                    <a href="aluno-excluir.php?id=<?php echo $linha['id'] ?>" class="text-decoration-none link-primary">Excluir</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>
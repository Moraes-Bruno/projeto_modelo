<?php 

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM tb_usuarios WHERE 
    usuario='{$usuario}' and senha='{$senha}'";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar', 'root', '');
$resultado = $conexao->query($sql);
$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];

if ($usuario_logado == null) {
    // usuario ou senha inválida
    header('location: index.html');
}
else {
    session_start();
    $_SESSION['usuario_logado'] = $usuario_logado;
    header('location: home.php');
}






?>
<?php
session_start();


if (!isset($_SESSION['usuario_logado'])) {
    //você não tem acesso a esta funcionalidade
    header('location: index.html');
}
?>

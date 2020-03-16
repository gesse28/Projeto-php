<?php
session_start();
include ("conexao.php");
?>

<?php

$login = $_POST['email'];
$senha = $_POST['senha'];

$salt = 'NaCl';
$senhaHasch = md5($salt.$senha);

$ps = $pdo->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
$ps->execute(array($login,$senhaHasch));

if ($linha = $ps->fetch()){
    $_SESSION ['email'] = $linha ['email'];
    $_SESSION ['senha'] = $linha ['senha'];

    echo "BEM VINDO!";
}else{
    echo "ERRO no login, confira seu email e senha.";
}
?>
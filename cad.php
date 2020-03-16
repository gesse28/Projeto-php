<?php
session_start();
include ("conexao.php");
?>
<?php
$ps = $pdo->prepare("INSERT INTO cadastro (nome,senha,email,telefone) VALUES (?,?,?,?);");
$nome= $_POST['nome'];
$senha= $_POST['senha'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];

$salt = 'NaCl';
$senhaHasch = md5($salt.$senha);

$ps->execute(array($_POST['nome'],$senhaHasch,$_POST['email'],$_POST['telefone']));

if ($ps->rowCount() == 1){
    echo "Cadastrado com sucesso";
}else{
    echo "erro ao cadastra";
}
?>


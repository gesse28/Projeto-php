<?php
include ("conexao2.php");
?>
<?php
$ps = $pdo->exec("
INSERT INTO contato
VALUES (NULL,'$_POST[nome]','$_POST[email]','$_POST[assunto]','$_POST[conteudo]');");

?>
<?php
$nome= $_POST['nome'];
$email= $_POST['email'];
$assunto= $_POST['assunto'];
$conteudo= $_POST['conteudo'];

if($nome != "" && $email != "" && $assunto != "" && $conteudo != ""){
    echo "Campos preenchidos <br>";
    echo "Mensagem recebida com sucesso!<br>";
	
}else{
    echo "É necessário preencher todos os campos!";
}
echo "Resultado:<br>\n";
echo "Nome:\t$nome<br>";
echo "E-mail:\t$email<br>";
echo "Assunto:\t$assunto<br>";
echo "Conteudo:\t$conteudo<br>";

?>
<?php

$ps = $pdo->query("SELECT nome,email,assunto,conteudo FROM cadastro");

while($linha = $ps->fetch(PDO::FETCH_OBJ)){

 echo "$linha->nome<br>";
 echo "$linha->email<br>";
 echo "$linha->assunto<br>";
 echo "$linha->conteudo<br>";
}

?>

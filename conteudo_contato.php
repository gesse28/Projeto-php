<html>
<head>
    <title>Projeto2</title>
    <link rel="stylesheet" type="text/css" href="css/formato.css">
</head>
<body>

    <div id="conteudo">
        <form action="cad_contato.php" method="GET">
            <label class="legenda">Nome:</label><br>
            <input type="text" name="nome" class="campos" placeholder="Nome e Sobrenome"><br>

            <label class="legenda">Email:</label><br>
            <input type="email" name="email" class="campos" placeholder="Email"><br>

            <label class="legenda">Assunto</label><br>
            <input type="text" name="assunto" class="campos" placeholder="Assunto da Mensagem"><br>

            <label class="legenda">Conteudo:</label><br>
            <textarea name="conteudo" class="campo2" placeholder="Digite sua Menssagem"></textarea><br><br>
            <input type="submit" value="enviar" class="bt_enviar">

        </form>
    </div>

</body>
</html>
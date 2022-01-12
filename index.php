<?php
// Conexão com o banco de dados
include("./connection.php");
// 
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div id="app">
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
            <input type="file" name="imagem" id="">
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['imagem'])) {
    $imagem = @$_POST['imagem'];
}

?>
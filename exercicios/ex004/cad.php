<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>resultado do processamento</h1>
</header>
    <main>
        <?php 
        //var_dump($_GET);
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p> bem vindo, <strong>$n $s ! este é meu site";
        ?>
        <a href="javascript:history.go(-1)"> voltar para a pagina</a>
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>coversor de moedas</h1>
<?php 
    $cotacao = 5.08;

    $real = $_REQUEST["din"] ?? 0;

    $dolar = $real / $cotacao;

    //echo "seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");

    //biblioteca intl(internalization php)
    $padrão = numfmt_create("pt_BR", NumberFormatter:: CURRENCY);
    echo "<p>seus " . Numfmt_Format_currency($padrão, $real, "BRL") .  "equivalem a <strong>" . Numfmt_Format_currency($padrão, $dolar, "USD") . "</strong></p>";

    ?>
      <button onclick = "javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>

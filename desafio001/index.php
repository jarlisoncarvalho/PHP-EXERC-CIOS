<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>testando números aleatórios</h1>
      <?php 
      
      $min = 0;
      $max = 100;
      $num = mt_rand($min, $max);
      echo "<p>gerando um numero aleatório entre $min e $max...<br>o valor gerado foi <strong>$num</strong></p>"
      ?>
      <button onclick="javascript:document.location.reload()">&#x1f504; gerar outro</button>
    </main>
</body>
</html>
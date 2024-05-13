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
        <h2>resposta</h2>
        <p>
    <?php 
         $n = $_REQUEST["num"] ?? 0;
         $a = $n - 1;
         $s = $n + 1;
         echo "o numero escolhido foi $n";
         echo "<br>o seu antecessor é $a";
         echo "<br>o seu sucessor é $s";
         
    
    ?>
    </p>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual; 
    ?>
    <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="nasc">Em que ano você nasceu?</label>
    <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
    <label for="ano">Quer saber a sua idade em que ano?</label>
    <input type="number" name="ano" id="ano" min = "1900" max="<?=$atual?>"value="<?=$ano?>">
   <input type="submit" value="Qual será minha idade">
   </form>
    </main>
    <section>
<?php 
    $idade = $ano - $nasc;

?>
<H2>Resultado</H2>
<p>Quem nasceu em <strong><?=$nasc?></strong> vai ter <strong><?=$idade?></strong> anos em <strong><?=$ano?><strong></p>
    </section>
</body>
</html>
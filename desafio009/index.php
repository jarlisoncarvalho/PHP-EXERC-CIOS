<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1']?? '';
        $peso1 = $_GET['p1'] ?? 0;
        $valor2 = $_GET['v2']?? '';
        $peso2 = $_GET['p2']?? 0;
    ?>
    <main>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1° valor</label>
        <input type="number" name="v1" id="v1" required value="<?= $valor1?>">
        <label for="p1">1° peso</label>
        <input type="number" name="p1" id="p1" required value="<?= $peso1?>">
        <label for="v2">2° valor</label>
        <input type="number" name="v2" id="v2" required value="<?= $valor2?>">
        <label for="p2">2 ° peso</label>
        <input type="number" name="p2" id="p2" required value="<?= $peso2?>">
        <input type="submit" value="calcular médias">
    </form>
    </main>
    <section>
        <?php 
            $m = ($valor1 + $valor2) / 2; 
            $mp = ($valor1 * $peso1 + $valor2 * $peso2 )/ ($peso1 + $peso2);

            //echo "media $m";
            //echo "media pondera $mp";
        ?>
            <h1>Calculandp as médias</h1>
            <p>Analisando os valores <?=$valor1?> e <?= $valor2?>:</p>
            <ul>
                <li>A <strong>media simples</strong> entre os valores é igual a 
                 <?=number_format($m,2,",",".")?>.</li>
                <li>A <strong> media ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?>
                e igual a <?= number_format($mp, 2,",",".")?>.</li>
            </ul>
    </section>
</body>
</html>
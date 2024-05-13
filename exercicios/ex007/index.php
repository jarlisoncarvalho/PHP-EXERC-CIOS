<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salário minimo</title>
    <link rel="stylesheet" href="style.css">n
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario = $_GET['sal'] ?? 0;  
    ?>
    <main>
        <h1>informe o salario</h1>
        <form action="<?= $_SERVER ['PHP_SELF']?>" method="get">
        <label for="sal">salario (R$)</label>
        <input type="number" name="sal" id="sal" valeu = "<?= $salario?>" step = "00.1">
        <p>considerando o salario minimo de <strong>R($)<?=number_format($minimo,2, ",", ".")?></strong></p>
        <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>resultado final</h2>
        <?php 
        $tot  = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p>ganha $tot salarios minimos + R\$ ". number_format($dif, 2, ",", ".").".</p>"
        
        ?>

    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET['total'] ?? 0;

    ?>
    <main>
            <h1>Calculadora de tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="total">Qual o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <input type="submit" value="Calcular">
            </form>
    </main>
    <?php 
           $sobra = $total;
           //semana
           $semana = (int)($sobra / 604_800);
           $sobra = $sobra % 604_800;
           //dia
           $dia = (int)($sobra / 86_400);
           $sobra = $sobra % 86_400;
           //hora
           $hora = (int)($sobra / 3_600);
           $sobra = $sobra % 3_600;
           //minutos
           $minutos = (int)($sobra / 60);
           $sobra = $sobra % 60;
           //segundos
           $segundos = $sobra;
        ?>
    <section>
        <h2>totalizando tudo</h2>
        <p>Analisando o valor que você digitou <strong><?=number_format($total, 0, ",",".")?> segundos</strong>:</p>
        <ul>
            <li><?=$total?> equivalem a <?=$semana?> semanas</li>
            <li><?=$total?> equivalem a <?=$dia?> dias</li>
            <li><?=$total?> equivalem a <?=$hora?> horas</li>
            <li><?=$total?> equivalem a <?=$minutos?> minutos</li>
            <li><?=$total?> equivalem a <?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>
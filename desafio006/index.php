<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 A anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;
        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get"></form>
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" value= "<?=$dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" min = "1"value = "<?=$divisor?>">
        <input type="submit" value="Analisar">
    </main>

    <section>
        <h1>Estrutura da divisão</h1>
        <?php 
            // Calculos 
            $quociente = intdiv($dividendo, $divisor); 
            $resto = $dividendo % $divisor; 
           // tabela php
           echo "<ul>";
           echo "<li>dividendo: $dividendo></li>";
           echo "<li>divisor: $divisor</li>";
           echo "<li>quociente: $quociente</li>";
           echo "<li> resto: $resto></li>"; 
           echo "</ul>"; 
        ?>
    </section>
</body>
</html>
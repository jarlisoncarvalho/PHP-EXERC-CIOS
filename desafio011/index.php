<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco']?? '0';
        $reajuste = $_REQUEST['reaj']?? '0';
    ?>
    <main>
        <h1>Calculando o reajuste de preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco">Preço (R$)</label>
        <input type="number" name="preco" id="preco" min = "0.10" step= "0.01 "value="<?=$preco?>">
        <label for="reaj">Qual será o percentual do reajuste? <strong><span id ="p">?</span>%</strong></label>
        <input type="range" name="reaj" id="reaj" min = "0" max = "100" step="1" 
        oninput="mudaValor()" value= "<?=$reajuste?>">
        <input type="submit" value="Calcular reajuste de preço">
        </form>
    </main>
<section>
    <?php 
        $formula = $preco * $reajuste / 100;
        $novo = $formula + $preco;
    ?>
    <h2>Resultado do reajuste</h2>
    <p><strong><?=$reajuste?></strong>% de <srtrong><?=$preco?></srtrong>
     é igual a <strong><?=$formula?></strong> e o produto irá custar <strong><?=$novo?></strong></p>
</section>

    <script>

        mudaValor()

        function  mudaValor(){

            p.innerText = reaj.value;    
        }

    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 013</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque']?? 0;
    ?>
    <main>
        <h1>caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="saque">Qual o valor deseja sacar?<sup>*</sup></label>
        <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5" required>
        <p style= "font-size:0.7em"> Notas disponiveis: R$100, R$50, R$10, R$5</p>
        <input type="submit" value="sacar">
    </form>
    </main>
    <?php 

        $resto =  $saque;
    //100
	$tot100 = floor($resto/100);
	$resto %= 100;
	
	//50
	$tot50 = floor($resto/50);
	$resto %= 50;

	//10
	$tot10 = floor($resto/10);
	$resto %= 10;
	
	//5
	$tot5 = floor($resto/5);
	$resto %= 5;
    ?>
        <section>
            <h2>saque de R$<?=number_format($saque, 2, ",",".")?> realizado</h2>
            <p>o caixa eletronico vai te entragar as segintes notas:</p>
            <ul>
                <li><img src="img/100-reais.jpg" alt="nota de 100" class="nota">x<?=$tot100?></li>
                <li><img src="img/50-reais.jpg" alt="nota de 50" class="nota"> x<?=$tot50?></li>
                <li><img src="img/10-reais.jpg" alt="nota de 10" class="nota"> x<?=$tot10?></li>
                <li><img src="img/5-reais.jpg" alt="nota de 5" class="nota"> x<?=$tot5?></li>
            </ul>
        </section>
    </body>
</html>
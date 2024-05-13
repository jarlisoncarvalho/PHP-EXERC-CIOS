<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em php</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binario 0 = octaç
    //$num = 0x1A;
    //echo "o valor da variavel é $num";

    //$v = true;
    //var_dump($v);

    //$num = 3e2;
    //echo "o valor é $num";

     //$vet = [3, 5 , 6 , 7, 9];
     //var_dump($vet);

     class pessoas{
        private string $nome;
     }

     $p = new pessoas;
     var_dump($p);

     const CANAL = "curso em video";
echo "adoro o" . CANAL;

    ?>
</body>
</html>
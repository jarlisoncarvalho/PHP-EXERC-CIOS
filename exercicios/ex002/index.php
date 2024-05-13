<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex php</title>
</head>
<body>
    <?
    
        date_default_timezone_set("america/sao_paulo"); //GMT 03
        echo "hoje é dia " . date("d/M/Y"); 
        echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>
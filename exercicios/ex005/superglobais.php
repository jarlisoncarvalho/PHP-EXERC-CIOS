<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("dia-da-semana", "segunda", time() 
            + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU";

            echo "<h1> superglobal GET</h1>";
            var_dump($_GET);
            
            echo "<h1> superglobal  POST</h1>";
            var_dump($_POST);

            echo "<h1> superglobal  REQUEST</h1>";
            var_dump($_REQUEST);

            Echo "<h1> superglobal  COOKIE</h1>";
            var_dump($_COOKIE);

            Echo "<h1> superglobal  SESSION</h1>";
            var_dump($_SESSION);

            Echo "<h1> superglobal  ENV</h1>";
            var_dump($_ENV);
            //foreach (getenv()as $c => $v){
                    //echo "<br> $c -> $v";
            //}

            Echo "<h1> superglobal  SERVER</h1>";
            var_dump($_SERVER);

            Echo "<h1> superglobal  SESSION</h1>";
            var_dump($_SESSION);

            Echo "<h1> superglobal  GLOBALS</h1>";
            var_dump($GLOBALS);

            

            


            
            
            
            
            ?>
        </pre>
    </main>
</body>
</html>
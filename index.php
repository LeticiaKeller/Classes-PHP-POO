<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color:darkseagreen;
        }

        .container {
            display: flexbox;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        echo "<h1>Classes PHP POO</h1>";
        require_once 'classes.php';
        $c1 = new celular;
        $c1->cor = "Preto";
        $c1->marca= "Xiaomi";
        $c1->modelo= "10C";
        $c1->Ligado= true;
        $c1->carga= 100;
            print_r($c1);
            echo "<br>";
    
        $c1-> AcessarRedesSociais();

        echo "<hr>";

        $c2 = new celular;
        $c2->cor = "Azul";
        $c2->marca= "iPhone";
        $c2->modelo= "9A";
        $c2->Ligado= true;
        $c2->carga= 45;
            print_r($c2);
            echo "<br>";
    
        $c2-> AcessarRedesSociais();

        echo "<hr>";

        $c3 = new celular;
        $c3->cor = "Branco";
        $c3->marca= "Samsung";
        $c3->modelo= "Galaxy";
        $c3->Ligado= false;
        $c3->carga= 20;
            print_r($c3);
            echo "<br>";
    
        $c3-> AcessarRedesSociais();
    ?>
    </div>
</body>
</html>
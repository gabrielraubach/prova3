<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <style>
        body {
            text-align: center;
        }
        input{
            margin: 0;
            margin-bottom: 40px;
        }

        form {
            margin-top: 20px;
            margin: auto;
            border: black 2px solid;
            width: auto;
            height: auto;
            text-align: center;
        }

    </style>
</head>

<body>
    <form method="POST">
        <h1>Escreva a palavra</h1>
        <input type="text" name="palavra">
        <input type="submit" name="butão">
        <?php

    if (isset($_POST['butão'])){
        $palavra = $_POST['palavra'];
        $cu = strlen($palavra);
        $CU = $palavra;
        for( $i=0;$i<($cu==2?$cu:$cu-1);$i++){
            $i2 =1;
            echo"<br>". $palavra;
            $palavra .= " ".$CU ;
        }
    }


        ?>
    </form>
</body>

</html>
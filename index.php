<?php
    require "exibir.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <style>
        *{font-family: Arial, Helvetica, sans-serif;}
        .container{display: flex; justify-content: center; align-items: center; flex-direction: column; }
        .div-conv{display: flex; justify-content: center; flex-direction: column; border: 1px solid #ccc; padding: 20px; box-shadow: 1px 1px 4px #ccc; margin: 10px 0px}
        #botao{margin-left: 30px; margin-top: 10px;}
    </style>

    <div class="container">
        <h1>Conversor de Séculos</h1>
        <div class="div-titulo">
            <h5>Digite um ano</h5>
        </div>
        <div class="div-conv">
            <form method="POST">
                Ano: <input type="number" name="ano" placeholder="Digite um ano" min="1" max="2100"></br>
                <input id="botao" type="submit" name="enviar">
            </form>
        </div>
            <?php 
              $res = exibirSeculo($_POST['ano']);
            ?>
        <div class="div-res">
            Resultado: <?php echo $res ?>;
        </div>
    </div>
</body>
</html>
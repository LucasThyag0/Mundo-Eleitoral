<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando a sua idade</title>
    <link rel="stylesheet" href="eleitoral.css">
</head>
<body>  
</div>
<?php
    
    $a = isset ($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos. <br>";
    if ($i < 16){
        $tipoVoto = "infelizmente você ainda não vota!";
    }
    elseif(($i >= 16 && $i <18) || ($i >70)){
            $tipoVoto = "o seu voto opcional, acesse o site da justiça eleitoral para criar seu titulo ou saber sua situação eleitoral.";
        }
     else {
        $tipoVoto = "o seu voto é obrigatorio, acesse o site da justiça eleitoral para saber a sua situação ou para criar seu titulo.";
    }
    echo "Para essa idade, $tipoVoto <br>";    
?><div>
 <a href="index.html">Voltar</a>
</body>
</html>
  
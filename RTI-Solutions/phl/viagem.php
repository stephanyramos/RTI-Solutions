<?php
if(isset($_POST["orgem"]) && isset($_POST["destino"])
     && isset($_POST["distancia"]) && isset($_POST["pedagio"])){
   
   
    $origem = $_POST["origem"];
    $destino = $_POST["destino"];
    $distancia= $_POST["distancia"];
    $pedagio = $_POST["pedagio"];

    $ValorFrete = 0;

    $ValorFrete = $distancia * 6;

    // $ValorFrete += $pedagio * 9.40 ;
    $ValorFrete = $ValorFrete + $pedagio * 9.40 ;



}else{
    ECHO "VOCÊ NÃO ENVIOU TODOS OS DADOS!!";
    exit;
}

?>


<!DOCTYPE html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Valor do Fret</title>
</head>
<body>
    <p class="resultado">A viagem de <?=origem?> à  <?=destino?>  irá custar o valor total de R$ 
      <em><? number_format($valorFrete,2,",",".")?></em>.
   </p>
</body>
</html>
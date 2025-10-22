<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08_01</title>
</head>
<body>
    <h1>Aula 08_01 - 30/09/25</h1>
    <form method="post" action="">
        Digite sua idade<input type="number"name="idade" required><br>
        <input type="submit" value="verificar">

    </form>
    
    <?php
    if(count($_POST)==0)exit;
    $idade=$_POST["idade"];
    echo "idade digitada: $idade<br>";

    if($idade>0 && $idade<13){
        echo "Você não pode criar uma conta, idade minima é de 13 anos";
    }
    else if($_idade>=13 && $idade<=17){
        echo "Você pode criar uma conta com consentimeno dos pais";
    }
    else if($idade>=18 && $idade<=64){
        echo "Você tem idade para criar uma conta, bem vindo a nossa rede social";
    }
    else if($idade>=65){
        echo "Você pode criar uma conta.
        Lembre-se de verificar nossas configurações de privacidade";
    }
    else{
        echo "Idade invalida";
    }
    ?>
    
</body>
</html>
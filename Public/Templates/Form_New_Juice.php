<?php
    Include_once('../config.php');

    $nome_completo = [];

    for ($i=1; $i < 6; $i++) {

        $sqlSelect = "SELECT * FROM ingredientes WHERE id=$i";
        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                array_push($nome_completo, $nome);
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="Static_Public_2/css/Tela.css"/>
    <link rel="stylesheet" href="Static_Public_2/css/Table.css"/>
    <link rel="stylesheet" href="Static_Public_2/css/Form_Create_Juice.css" />
    <script src="Static_Public_2/Scripts/View.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Juice Max | Pedir Suco</title>
</head>
<body>

<div class="box">
    <form action="new_juice.php" method="POST">
        <fieldset>
            <legend><b>Pedir Suco</b></legend>
           
        </fieldset>
    </form>
    <a href="enter.php" id="bt_voltar">Voltar</a>
</div>

<a href="Tools/Tools_All_Limpar.php" id="bt_voltar">Limpar</a>



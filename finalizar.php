<?php
    include_once('config.php');

    $sqlSelect_1 = "SELECT * FROM marcado WHERE id='1'";
    $sqlSelect_2 = "SELECT * FROM acres_ativo WHERE id='1'";

    $result_1 = $conexao->query($sqlSelect_1);
    $result_2 = $conexao->query($sqlSelect_2);

    if($result_1->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_1))
        {
            $nome_1 = $user_data['nome'];
            $valor_1 = $user_data['valor'];
        }
        header('Location: sistema.php');
    }
    else
    {
        header('Location: sistema.php');
    }

    if($result_2->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_2))
        {
            $nome_2 = $user_data['nome'];
            $valor_2 = $user_data['valor'];
        }

        $valor = $valor_1 + $valor_2;
        $result = mysqli_query($conexao, "INSERT INTO pedido (id,nome,valor) VALUES ('default','$nome_1 --- ( $nome_2 )','$valor')");

        $sqlInsert_3 = "UPDATE marcado SET id='1',nome='',valor='' WHERE id='1'";
        $result_3 = $conexao->query($sqlInsert_3);
    
        $sqlInsert_4 = "UPDATE acres_ativo SET id='1',nome='',valor=''WHERE id='1'";
        $result_4 = $conexao->query($sqlInsert_4);
        
        header('Location: 02_pagamento.php');
    }
    else
    {
        header('Location: sistema.php');
    }
?>
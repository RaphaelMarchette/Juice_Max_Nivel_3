<?php
    include_once('../../../config.php');

    $sqlSelect_1 = "SELECT * FROM create_juice_ativo WHERE id='1'";
    $sqlSelect_2 = "SELECT * FROM peso_ativo WHERE id='1'";

    $result_1 = $conexao->query($sqlSelect_1);
    $result_2 = $conexao->query($sqlSelect_2);

    if($result_1->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_1))
        {
            $nome_fk = $user_data['nome'];
            $valor_1 = $user_data['valor'];
        }
        header('Location: ../new.php');
    }
    else
    {
        header('Location: ../new.php');
    }

    if($result_2->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_2))
        {
            $peso_fk = $user_data['peso'];
        }

        $sqlSelect_3 = "SELECT * FROM peso WHERE id=$peso_fk";
        $result_3 = $conexao->query($sqlSelect_3);
        if($result_3->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_3))
            {
                $peso = $user_data['peso'];
            }
        }

        $valor = ($valor_1* $peso)* $lucro;

        $valor_soma = number_format($valor, 2, '.', '');



        $result = mysqli_query($conexao, "INSERT INTO create_juice (id, nome_fk, peso_fk, valor) VALUES ('default','$nome_fk','$peso_fk','$valor')");

        $sqlInsert_3 = "UPDATE create_juice_ativo SET nome='',valor='' WHERE id='1'";
        $result_3 = $conexao->query($sqlInsert_3);
    
        $sqlInsert_4 = "UPDATE peso_ativo SET peso='' WHERE id='1'";
        $result_4 = $conexao->query($sqlInsert_4);

        header('Location: ../new.php');
    }
    else
    {
        header('Location: ../new.php');
    }

?>

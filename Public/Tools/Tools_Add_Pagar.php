<?php
    include_once('../../config.php');

    $sqlSelect_1 = "SELECT * FROM view_suco WHERE id='1'";
    $sqlSelect_2 = "SELECT * FROM view_preferencia WHERE id='1'";

    $result_1 = $conexao->query($sqlSelect_1);
    $result_2 = $conexao->query($sqlSelect_2);


    if($result_1->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_1))
        {
            $id_fk = $user_data['id_fk'];
            $nome = $user_data['nome'];
            $valor = $user_data['valor'];
        }
        header('Location: ../Pedir.php');
    }
    else
    {
        header('Location: ../Pedir.php');
    }

    if($result_2->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_2))
        {
            $preferencia = $user_data['preferencia'];
        }

        $sqlSelect_3 = "SELECT * FROM view_pagar ";
        $result_3 = $conexao->query($sqlSelect_3);
        $cont = 1;
        if($result_3->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_3))
            {
                $cont+=1;
            }
            header('Location: ../Pedir.php');
        }
        else
        {
            header('Location: ../Pedir.php');
        }
        if($cont < 6)
        {
            $result = mysqli_query($conexao, "INSERT INTO view_pagar (id, id_fk, nome, valor, preferencia) VALUES ('$cont', '$id_fk', '$nome', '$valor', '$preferencia') ");

            $sqlInsert_3 = "DELETE FROM view_suco ";
            $result_3 = $conexao->query($sqlInsert_3);

            $sqlInsert_4 = "DELETE FROM view_preferencia ";
            $result_4 = $conexao->query($sqlInsert_4);
        
            header('Location: ../Pedir.php');
        }
    }
    else
    {
        header('Location: ../Pedir.php');
    }

    //         if(($cont < 6) && ($peso_Bat +$peso > 0 ))
?>
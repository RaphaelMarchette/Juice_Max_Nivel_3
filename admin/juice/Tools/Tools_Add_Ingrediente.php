<?php
    include_once('../../../config.php');

    $sqlSelect_1 = "SELECT * FROM create_juice_ativo WHERE id='1'";
    $sqlSelect_2 = "SELECT * FROM peso_ativo WHERE id='1'";

    $result_1 = $conexao->query($sqlSelect_1);
    $result_2 = $conexao->query($sqlSelect_2);


    $sql_6 = "SELECT SUM(peso) as pesototal FROM ingredientes";
    $sql_6 = $conexao->query($sql_6);
    $row = $sql_6->fetch_assoc();
    $soma = $row['pesototal'];
    $soma_peso = number_format($soma, 3, '.', '');
    $peso_Bat = 0.500 - $soma_peso;
    $peso_Bat = number_format($peso_Bat, 3, '.', '');

    if($result_1->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result_1))
        {
            $id_fk = $user_data['id_fk'];
            $nome = $user_data['nome'];
            $valor = $user_data['valor'];
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
            $peso = $user_data['peso'];
        }

        $sub_valor = ($valor * $peso) * $lucro;

        $sqlSelect_3 = "SELECT * FROM ingredientes ";
        $result_3 = $conexao->query($sqlSelect_3);
        $cont = 1;
        if($result_3->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result_3))
            {
                $cont+=1;
            }
            header('Location: ../new.php');
        }
        else
        {
            header('Location: ../new.php');
        }
        if(($cont < 6) && ($peso_Bat - $peso) >= 0 )
        {
            $result = mysqli_query($conexao, "INSERT INTO ingredientes (id, id_fk, nome, peso, valor) VALUES ('$cont', '$id_fk', '$nome', '$peso', '$sub_valor') ");

            $sqlInsert_3 = "DELETE FROM create_juice_ativo ";
            $result_3 = $conexao->query($sqlInsert_3);

            $sqlInsert_4 = "DELETE FROM peso_ativo ";
            $result_4 = $conexao->query($sqlInsert_4);
        
            header('Location: ../new.php');
        }
    }
    else
    {
        header('Location: ../new.php');
    }

    //         if(($cont < 6) && ($peso_Bat +$peso > 0 ))
?>
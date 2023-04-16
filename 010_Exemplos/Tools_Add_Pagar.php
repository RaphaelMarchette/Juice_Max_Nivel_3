<?php

    include_once('../../config.php');

    $sqlSelect_1 = "SELECT * FROM view_suco WHERE id=1 ";
    $result_1 = $conexao->query($sqlSelect_1);

    // select_1
    if($result_1->num_rows > 0)
    {
        while($user_data_1 = mysqli_fetch_assoc($result_1))
        {
            $id_fk = $user_data_1['id_fk'];
            $nome = $user_data_1['nome'];
            $valor = $user_data_1['valor'];
        }

            // select_2
            $sqlSelect_2 = "SELECT * FROM view_preferencia WHERE id=1 ";
            $result_2 = $conexao->query($sqlSelect_2);

            if($result_2->num_rows > 0)
            {
                while($user_data_2 = mysqli_fetch_assoc($result_2))
                {
                    $preferencia = $user_data_2['nome'];
                }



                // select_3
                $sqlSelect_3 = "SELECT * FROM view_acrescimo WHERE id=1 ";
                $result_3 = $conexao->query($sqlSelect_3);
                
                if($result_3->num_rows > 0)
                {
                    while($user_data_3 = mysqli_fetch_assoc($result_3))
                    {
                        $acrescimo = $user_data_3['nome'];
                        $valor_acrescimo = $user_data_3['valor'];
                    }


                    // Contagem para limite e novo ID
                    $sqlInsert = "SELECT * FROM view_pedido ";
                    $result_Insert = $conexao->query($sqlInsert);
                    $cont = 1;
                    if($result_Insert->num_rows > 0)
                    {
                        while($user_data = mysqli_fetch_assoc($result_Insert))
                        {
                            $cont+=1;
                        }
                    }
                        // Inserir dados e limpas tabelas
                        if($cont < 6)
                        {
                            $result = mysqli_query($conexao, "INSERT INTO view_pedido (id, id_fk, nome, valor, preferencia, acrescimo, valor_acrescimo) VALUES ('$cont', '$id_fk', '$nome', '$valor', '$preferencia','$acrescimo', '$valor_acrescimo') ");
                            header('Location: ../Pagar.php');

                        }
                        else
                        {
                            header('Location: ../Pedir.php');
                        }

                }
                else
                {
                    header('Location: ../Pedir.php');
                }
            }
            else
            {
                header('Location: ../Pedir.php');
            }
    }
    else
    {
        header('Location: ../Pedir.php');
    }



    //         if(($cont < 6) && ($peso_Bat +$peso > 0 ))
?>
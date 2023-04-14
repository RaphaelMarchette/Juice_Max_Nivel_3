<?php
    if(!empty($_GET['id']))
    {
        include_once('../../config.php');

        $id_3 = $_GET['id'];

        $table_3 = $_GET['table'];
        
    }
?>


<div class="title_table" id="table_create_juice">Ingredientes</div>

<table id="table_create_juice">
    <thead>
        <tr>
            <th class="id"      >Id   </th>
            <th class="nome"    >Nome   </th>
            <th class="valor"   >Kg.    </th>
            <th class="valor"   >Valor  </th>
            <th class="preenche"   >   </th>
            <th class='botao'>
                <a href='Tools/Tools_Add_Ingrediente.php?table=frutas&id=$user_data[id_fk]&table_2=create_juice&id_2=1' title='Adicionar' id='btn-primary'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bag-plus' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z'/>
                        <path d='M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z'/>
                    </svg>
                </a> 
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            include_once('../../config.php');

            $sql_2 = "SELECT * FROM ingredientes ";
            $result_2 = $conexao->query($sql_2);
            
            while($user_data = mysqli_fetch_assoc($result_2)) {
                    echo "<tr>";            
                    echo "<td class='id'>".$user_data['id_fk']."</td>";
                    echo "<td class='nome'>".$user_data['nome']."</td>";
                    echo "<td class='valor'>".$user_data['peso']."</td>";
                    echo "<td class='valor'>".$user_data['valor']."</td>";
                    echo    "<td class='preenche'></td>";   
                    echo "<td class='botao'>
                        <a href='tools/CRUD_Delete.php?table=ingredientes&id=$user_data[id]' title='Deletar' id='btn-danger'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                        </td>";
                    echo "</tr>";
            }
            ?>
    </tbody>
</table>

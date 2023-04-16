<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juice Max | Home</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 2rem;
        }

        .aba{
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4rem;
        }

        .bt_admin{
            width: 8rem;
            height: 1.6rem;
            font-size: 1.4rem;
            position: absolute;
            top:0.3rem;
            left: 1rem;
        }

        .bt_home {
            width: 8rem;
            height: 1.6rem;
            font-size: 1.6rem;
            position: absolute;
            top:0.3rem;
            right: 1rem;
        }

        #bt_entrar {
            width: 8rem;
            height: 1.6rem;
            font-size: 1.6rem;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
        <div class="aba">
            <a class="bt_admin" href="login/login.php">Logar Admin</a>
        </div>
        <br><br><br><br>
    <h1>Juice Max</h1>
    <h2>...</h2>
    <div class="box">
        <a id="bt_entrar" href="Public/Pagar.php">Entrar</a>
    </div>
</body>

<script>
    document.addEventListener('keydown', function(e) {
    if(e.keyCode == 32){  //  Tecla Space
    document.getElementById("bt_entrar").click();
    }
    });
</script>


</html>
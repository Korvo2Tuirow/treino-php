<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    
    <header>
        <?php require "view/navbar/navbar.php";?>
    </header>

    <?php /*
    if(array_key_exists('novo', $_POST)){
    include "../conn/conn.php";
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y H:i");

    $novo_pedido = "
    INSERT INTO `point_do_canal`.`novo_pedido` (`pedido`, `data`) VALUES (default, '$data')";
    
    echo $data;
    header('location:../cardapio/cardapio.php');   

    //mysqli_query($conn, $novo_pedido);

    

    if(!isset($_SESSION)){
        session_start();
        $_SESSION['pedido'] = "pedido";
    };

    };
    
   */
    ?>

    <form method="post">
    <div class="row flex justify-content-end">
    <input type="submit" name="novo" class="btn btn-primary mr-4" value="Novo Pedido">
    </div>
    </form>





</body>
</html>
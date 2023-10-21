<?php include "conn/conn.php"; ?>

<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php include "view/navbar/navbar.php";?>

    <div class="container d-flex justify-content-center mt-4">
        <h1 class="d-flex">PEDIDOS</h1>
    </div>

    <div class="container">
        <form id="formPedido" action="" method="POST">
            <div>
                <label for="nome">Selecione o cliente</label>
                <select class="form-control" id="nome" name="pedido" required onchange="escolherPedido(this.value)">
                    <option value="">Selecione o Pedido</option>
                    <?php

                    $sql = "SELECT * FROM novo_pedido";
                    $query = mysqli_query($conn, $sql);
                    while ($res = mysqli_fetch_array($query)) {

                        $pedido = ($res['pedido']);
                        $data = ($res['data']);

                        echo
                        "<option value=\"$data\">$pedido</option>";
                    };

                    ?>
                </select>

                <output class="form-control mt-3" id="data"></output>
                <script>
                    function escolherPedido(value) {
                        document.querySelector("#data").innerHTML = value;
                    }
                </script>

            </div>


            <!--  <div class="mt-4">

                <div class="form-group">
                    <label for="formGroupExampleInput ">Endereço</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="#">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="#">
                </div>
           
                <input type="submit" value="ENVIAR" class="btn btn-success mt-5"> -->

        </form>
    </div>


    <script src="javascript.js"></script>
</body>

</html>
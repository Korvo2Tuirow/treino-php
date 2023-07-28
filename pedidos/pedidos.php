<?php include "../conn/conn.php";?>

<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <?php include "../navbar/navbar.php" ?>

    <div class="container d-flex justify-content-center mt-4">
        <h1 class="d-flex">PEDIDOS</h1>
    </div>

    <div class="container">
             <form id="formCliente" action="" method="POST">           
            <div>
                <label for="nome" >Selecione o cliente</label>
                <select class="form-control" id="nome" name="cliente" required onchange="escolherCliente(this.value)">
                    <option value="">Selecione o cliente</option>
                    <?php
                        
                        $sql = "SELECT * FROM clientes order by nome;";
                        $query = mysqli_query($conn, $sql);
                        while ($res = mysqli_fetch_array($query)) {
        
                            $cliente = ($res['nome']);
                            $endereco = ($res['endereco']);
                            $telefone = ($res['telefone']);
                            echo
                            "<option value=\"$endereco\">$cliente</option>";
                        };
                    
                    ?>
                </select>
                <p class="mt-3 mb-1">Endereço</p>
                <output type="text" name="endereco" class="form-control mt-0" id="rua"></output>
            </div>
            <script>
            function escolherCliente(value) {
                   
                document.querySelector("#rua").innerHTML = value;        
                   
                   
                
                }
            </script>
                
            


            
            
            
         <!--  <div class="mt-4">

                <div class="form-group">
                    <label for="formGroupExampleInput ">Endereço</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="#">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="#">
                </div>
            -->
                <input type="submit" value="ENVIAR" class="btn btn-success mt-5">

        </form>
    </div>


    <script src="javascript.js"></script>
</body>

</html>
<?php
include "conn/conn.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cardapio</title>
</head>

<body>
    <header>
        <?php include "view/navbar/navbar.php"; ?>
    </header>

    <section class="container mx-auto mt-lg-5 row d-flex justify-content-center ">
        <h1 class="row container d-flex justify-content-center text-center">Lanches Tradicionais</h1>
        <?php
        $sql = "SELECT * FROM cardapio WHERE disponivel = '1'";
        $query = mysqli_query($conn, $sql);
        while ($res = mysqli_fetch_array($query)) {

            $id = $res['id_lanche'];
            $lanche = $res['lanche'];
            $ingredientes = $res['ingredientes'];
            $preco = $res['preco'];
            $img = $res['imagem'];
            
            echo "               
                <div class=\"card m-3 \"style=\"width: 18rem;\">
                <img class=\"card-img-top\" src=$img alt=\"Imagem de capa do card\">
                <div class=\"card-body d-flex  flex-column bd-highlight mb-3\">
                    <h5 class=\"card-title\">$lanche</h5>
                    <p class=\"mb-2\">cod: $id</p>
                    
                    <p class=\"card-text\">$ingredientes</p>
                    
                    <a href=\"#\" class=\"btn btn-primary p-2 bd-highlight mt-auto\">Adicionar</a>
                </div>
            </div>
        ";
        };
        ?>
    </section>





</body>

</html>
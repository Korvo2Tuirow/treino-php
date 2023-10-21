<?php 

$url = strtoupper($_GET['url']);


if($url == "HOME"){
    require_once "View/home/home.php";
}else if ($url == "INDEX"){
    require_once "View/login/login.php";
}else if ($url == "PEDIDOS"){
    require_once "View/pedidos/pedidos.php";
}else if ($url == "CARDAPIO"){
    require_once "View/cardapio/cardapio.php";
}else if ($url == null) {

    require_once "View/login/login.php";
    

}

?>
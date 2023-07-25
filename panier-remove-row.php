<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    session_start();
    unset($_SESSION['panier'][$_GET['id']]);
    header("location:panier.php");
}
else
{
    header("location:panier.php");
}

?>
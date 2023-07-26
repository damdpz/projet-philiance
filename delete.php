<?php
require_once("inc/init.inc.php");



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `product` WHERE `id`=:id;";

    $pdo = get_connection();
    $query = $pdo->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: administration.php');
}

?>

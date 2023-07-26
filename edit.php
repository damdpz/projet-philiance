<?php

require_once("inc/init.inc.php");
require_once("inc/function.inc.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['price']) && !empty($_POST['price']) && isset($_POST['category_id']) && !empty($_POST['category_id'])) {
        $id = strip_tags($_GET['id']);
        $name = strip_tags($_POST['name']);
        $description = strip_tags($_POST['description']);
        $price = strip_tags($_POST['price']);
        $category_id = strip_tags($_POST['category_id']);
    

    $sql = "UPDATE product SET name = :name, description = :description, price = :price, category_id = :category_id WHERE id=".$_GET['id'];
    $pdo = get_connection();
    $query = $pdo->prepare($sql);

    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':price', $price);
    $query->bindValue(':category_id', $category_id, PDO::PARAM_INT);
    

    $query->execute();
    
    header('Location: administration.php');
}
}

// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/administration.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");



if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM product WHERE id = :id;";

    $pdo = get_connection();
    $query = $pdo->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}


?>

<main>
    
<form method="post">
        <p>
            <label for="name">Nom du produit</label>
            <input type="text" name="name" id="name" value="<?= $result['name'] ?>">
        </p>
        <p>
            <label for="description">Description du produit</label>
            <input type="text" name="description" id="description" value="<?= $result['description'] ?>">
        </p>
        <p>
            <label for="price">Prix</label>
            <input type="text" name="price" id="price" value="<?= $result['price'] ?>">
        </p>
        <p>
            <label for="category_id">Catégorie</label>
            <input type="number" name="category_id" id="category_id" value="<?= $result['category_id'] ?>">
        </p>
        <p>
            <button>Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>


</main>

<?php
require_once("inc/footer.inc.php");
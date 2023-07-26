<?php

require_once("inc/init.inc.php");
require_once("inc/function.inc.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['price']) && !empty($_POST['price']) && isset($_POST['category_id']) && !empty($_POST['category_id'])) {
        $name = strip_tags($_POST['name']);
        $description = strip_tags($_POST['description']);
        $price = strip_tags($_POST['price']);
        $category_id = strip_tags($_POST['category_id']);
    }

    $sql = "INSERT INTO product(`name`, `description`, `price`, `category_id`) VALUES (:name, :description, :price, :category_id)";
    $pdo = get_connection();
    $query = $pdo->prepare($sql);

    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':price', $price);
    $query->bindValue(':category_id', $category_id, PDO::PARAM_INT);

    $query->execute();
    $_SESSION['message'] = "Produit ajouté avec succès !";
    header('Location: administration.php');
}

// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/administration.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");





?>
<main>
    <div class="form-container">
        <form class="form" method="post">
            <div class="champ-input">
                <label for="name">Marque du roduit</label>
                <input type="text" name="name" id="name" class="input">
            </div>
            <div class="champ-input">
                <label for="description">Description du produit</label>
                <input type="text" name="description" id="description" class="input">
            </div>
            <div class="champ-input">
                <label for="price">Prix</label>
                <input type="text" name="price" id="price" class="input">
            </div>
            <div class="champ-input">
                <label for="category_id">Catégorie</label>
                <input type="number" name="category_id" id="category_id" class="input">
            </div>
            <div>
            <button>Enregistrer</button>
            </div>
        </form>
        
    </div>

</main>

<?php
require_once("inc/footer.inc.php");
?>
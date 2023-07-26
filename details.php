<?php
session_start();

require_once("inc/init.inc.php");
require_once("inc/function.inc.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM product WHERE id = :id';

    // On prépare la requête
    $pdo = get_connection();
    $query = $pdo->prepare($sql);

    // On attache les valeurs
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    //On stocke le résultat dans un tableau associatif
    $product = $query->fetch();

    if (!$product) {
        header('location: administration.php');
    }
} else {
    header('location: administration.php');
}



// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/administration.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");



?>

<main>
    <div class="details-container">
        <div class="details-title">
            <h2>Détails du produit :</h2>
        </div>
        <div class="details">
            <p><b>ID : </b><?= $product['id'] ?></p>
            <p><b>Produit : </b><?= $product['name'] ?></p>
            <p><b>Description : </b><?= $product['description'] ?></p>
            <p><b>Category : </b><?= $product['category_id'] ?></p>
            <p><b>Prix : </b><?= $product['price'] ?></p>
            <div class="btn-details"><a href="edit.php?id=<?= $product['id'] ?>">Modifier</a> <a href="delete.php?id=<?= $product['id'] ?>">Supprimer</a></div>
        </div>
    </div>
</main>

<?php
require_once("inc/footer.inc.php");

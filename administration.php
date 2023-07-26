<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/administration.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

$pdo = get_connection();
// On écrit notre requête
$sql = "SELECT * FROM product";
// On prépare la requête
$query = $pdo->prepare($sql);
// On exécute la requête
$query->execute();
// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);


?>

</main>

<table class="admin-container">
    <trc class="cat-produits">
        <th>ID</th>
        <!-- <th>Image</th> -->
        <th>Nom</th>
        <th>Description</th>
        <th>Catégorie</th>
        <th>Prix</th>
        <th></th>
        </tr>
        <?php
        foreach ($result as $product) {
        ?>
            <tr class="admin-produits">
                <td class="produit"><?= $product['id']; ?></td>
                <!-- <td><img src="image1.jpg" alt="Image 1"></td> -->
                <td><?= $product['name']; ?></td>
                <td><?= $product['description']; ?></td>
                <td><?= $product['category_id']; ?></td>
                <td><?= $product['price'] . " €"; ?></td>
                <td class="btn-admin"><a href="details.php?id=<?= $product['id'] ?>">Détails</a> <a href="edit.php?id=<?= $product['id'] ?>">Modifier</a> <a href="delete.php?id=<?= $product['id'] ?>">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>
</table>
<div class="btn-add">
    <a href="add.php">Ajouter</a>
</div>
</main>

<?php
require_once("inc/footer.inc.php");

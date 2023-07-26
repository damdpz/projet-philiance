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

    <table>
        <tr>
            <th>ID</th>
            <!-- <th>Image</th> -->
            <th>Nom</th>
            <th>Description</th>
            <th>Catégorie</th>
            <th>Prix</th>
        </tr>
        <?php
        foreach ($result as $product){
            ?>
        <tr>
            <td><?= $product['id']; ?></td>
            <!-- <td><img src="image1.jpg" alt="Image 1"></td> -->
            <td><?= $product['name']; ?></td>
            <td><?= $product['description']; ?></td>
            <td><?= $product['category_id']; ?></td>
            <td><?= $product['price']." €"; ?></td>
            <td><a href="details.php?id=<?= $product['id'] ?>">Détails</a> <a href="edit.php?id=<?= $product['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $product['id'] ?>">Supprimer</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <a href="add.php">Ajouter</a>
</main>

<?php
require_once("inc/footer.inc.php");
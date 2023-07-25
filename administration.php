<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/administration.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>

</main>

    <table>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Référence</th>
            <th>Catégorie</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="image1.jpg" alt="Image 1"></td>
            <td>Produit 1</td>
            <td>REF001</td>
            <td>Catégorie 1</td>
            <td>10.99€</td>
            <td>100</td>
            <td>En stock</td>
        </tr>
        <tr>
            <td>2</td>
            <td><img src="image2.jpg" alt="Image 2"></td>
            <td>Produit 2</td>
            <td>REF002</td>
            <td>Catégorie 2</td>
            <td>24.50€</td>
            <td>50</td>
            <td>En stock</td>
        </tr>
        <tr>
            <td>3</td>
            <td><img src="image3.jpg" alt="Image 3"></td>
            <td>Produit 3</td>
            <td>REF003</td>
            <td>Catégorie 1</td>
            <td>18.75€</td>
            <td>75</td>
            <td>En rupture de stock</td>
        </tr>
    </table>

</main>

<?php
require_once("inc/footer.inc.php");
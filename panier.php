<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>


<main>
    
    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produit 1</td>
                <td>29.99€</td>
                <td>2</td>
                <td>59.98€</td>
            </tr>
            <tr>
                <td>Produit 2</td>
                <td>19.99€</td>
                <td>1</td>
                <td>19.99€</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total:</td>
                <td>79.97€</td>
            </tr>
        </tfoot>
    </table>
    
    <button type="button">Passer à la caisse</button>

</main>

<?php
require_once("inc/footer.inc.php");
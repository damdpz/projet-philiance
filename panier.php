<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/panier.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>

<main>
<section class="cart-items">
      <table>
        <tr>
          <th>Article</th>
          <th>Prix unitaire</th>
          <th>Quantité</th>
          <th>Total</th>
          <th>Supprimer</th>
        </tr>
        <tr>
          <td>Article 1</td>
          <td>10 EUR</td>
          <td><input type="number" min="1" value="1"></td>
          <td>10 EUR</td>
          <td><button class="remove-btn">Supprimer</button></td>
        </tr>
        <!-- Ajoutez d'autres lignes ici pour plus d'articles -->
      </table>
    </section>
   
    <section class="cart-summary">
      <h2>Résumé du Panier</h2>
      <ul>
        <li>Total: <span id="total">10</span> EUR</li>
      </ul>
      <button>Passer à la caisse</button>
    </section>
    
  </main>
  
<?php
require_once("inc/footer.inc.php");







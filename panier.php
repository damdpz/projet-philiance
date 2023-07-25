<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/panier.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

if (isset($_GET['id'])) {
  //Ajouter dans 1 session le panier avec son id
  if (!isset($_SESSION['panier'][$_GET['id']])) {
    $_SESSION['panier'][$_GET['id']] = 1;
  } else {
    $_SESSION['panier'][$_GET['id']]++;
  }


  // echo "<pre>";
  // print_r($_SESSION['panier']);
  // echo "</pre>";
  // die;
}



// echo "<pre>";
// print_r($_SESSION['panier']);
// echo "</pre>";
// die;


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
      <?php
      if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
        $total = 0;
        foreach ($_SESSION['panier'] as $id => $value) {

          //Requête SQL
          $pdo_articles = get_connection();
          $query = $pdo_articles->prepare("SELECT * FROM product where id = :id");
          $query->bindParam('id', $id, PDO::PARAM_INT);
          $query->execute();
          $product = $query->fetch(PDO::FETCH_ASSOC);

          //Calcul du total
          $prix = $product['price'] * $value;
          $total += $prix;
      ?>
          <tr>
            <td><?= $product['name'] . " " . $product['description']; ?></td>
            <td><?= $product['price'] . " €"; ?></td>
            <td><input type="number" min="1" value="<?= $value ?>"></td>
            <td><?= $prix . " €"; ?></td>

            <td>
              <a href="panier-remove-row.php?id=<?= $product['id']; ?>" class="remove-btn" onclick="return confirm('Etes-vous sûre de vouloir supprimer l\'article ?');">Supprimer</a>
            </td>
          </tr>
        <?php
        }
      } else {
        ?>
        <tr colspan="5">Vous n'avez aucun article dans le panier</tr>
      <?php } ?>
      <!-- Ajoutez d'autres lignes ici pour plus d'articles -->
      <tr>
        <td colspan="3" style="text-align:left"><b>TOTAL :</b></td>
        <td>
          <?php if (isset($total)) {
            echo $total . " €";
          } else {
            echo "0";
          }
          ?>
        </td>
        <td><a href="" class="btn-empty">Payer</a></td>
      </tr>
    </table>
  </section>

  <!-- <section class="cart-summary">
      <h2>Résumé du Panier</h2>
      <ul class="total">
        <li>Total : <span id="total">
          <?php if (isset($total)) {
            echo $total;
          } else {
            echo "0";
          }
          ?>
        </span> €</li>
        <li><a href="panier_cancel.php" class="btn-empty">Vider le panier</a></li>
      </ul>
  <button>Passer à la caisse</button>
  </section> -->

</main>

<?php
require_once("inc/footer.inc.php");
?>

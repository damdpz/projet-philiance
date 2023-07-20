<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/article.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");


if (isset($_GET['id'])) {
    $subcategory_id = $_GET['id'];
    $pdo_articles = get_connection();
    $query = $pdo_articles->prepare("SELECT id, name, description, price, discount FROM product where id = :parent_id");
    $query->bindParam('parent_id', $subcategory_id, PDO::PARAM_INT);
    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    $pdo_articles_img = get_connection();
    $article_id = $article['id'];
    $query = $pdo_articles->prepare("SELECT id, name, source, product_id FROM product_images where product_id = :article_id");
    $query->bindParam('article_id', $article_id, PDO::PARAM_INT);
    $query->execute();
    $images = $query->fetchAll(PDO::FETCH_ASSOC);

}

?>

<main>
    <section>
        <div class="article-container">
            <div class="image-article">
                <div class="one">
                    <image src="<?php echo $images[0]['source'] ?>" alt="<?php echo $images[0]['name'] ?>">
                </div>
                <div class="two">
                <image src="<?php echo $images[1]['source'] ?>" alt="<?php echo $images[1]['name'] ?>">
                </div>
            </div>

            <div class="description-article">
                <div class="titre-article">
                    <h3><?php echo $article['description'] ?></h3>
                </div>
                <div class="prix-article">
                <h3><?php echo $article['price'] ?>€</h3>
                </div>
                <p> <?php echo $article['name'] ?></p>

                <p>Numéro d'article: 15CMSS022AZE5086W-456
                    <br>
                    Sexe : Hommes
                    <br>
                    Couleur : Bois de cèdre
                    <br>
                    Matériel : 100% coton
                </p>
                <a href="panier.php" class="btn-article">Ajouter au panier</a>
            </div>
        </div>

        </div>

    </section>

    <section>
        <div class="title-selection">
            <h2>NOS SÉLÉCTIONS</h2>
        </div><br>

        <div class="selection">
            <div class="selection-article">
                <image src="assets/img/nouveautes/pantalon.webp" alt="pantalon">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">CARHARTT WIP NOLAN PANT
                        </a>
                    </div>
                    <a href="#" class="btn-price-selection">89.99€</a>
            </div>

            <div class="selection-article">
                <image src="assets/img/nouveautes/veste.webp" alt="veste">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">X WALES BONNER KNIT TRACK</a>
                    </div>
                    <a href="#" class="btn-price-selection">279.99€</a>
            </div>

            <div class="selection-article">
                <image src="assets/img/nouveautes/sneakers.jpg" alt="sneakers">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">Nike WMNS DUNK LOW LX</a>
                    </div>
                    <a href="#" class="btn-price-selection">119.99€</a>
            </div>
    </section>
</main>

<?php
require_once("inc/footer.inc.php");

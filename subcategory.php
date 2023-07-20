<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");
if (isset($_GET['id'])) {
    $subcategory_id = $_GET['id'];
    $pdo_articles = get_connection();
    $query = $pdo_articles->prepare("SELECT id, name, description, price, discount FROM product where category_id = :parent_id");
    $query->bindParam('parent_id', $subcategory_id, PDO::PARAM_INT);
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach( $articles as $key => $article) {
        $pdo_articles_img = get_connection();
        $article_id = $article['id'];
        $query = $pdo_articles->prepare("SELECT id, name, source, product_id FROM product_images where product_id = :article_id");
        $query->bindParam('article_id', $article_id, PDO::PARAM_INT);
        $query->execute();
        $image = $query->fetch(PDO::FETCH_ASSOC);
        $articles[$key]['img_source'] = $image['source'];
        $articles[$key]['img_alt'] = $image['name'];
    }

}

?>

<main>
    <div class="title-subcat">
    <h2>Accessoires</h2>
    </div>
    <div class="container-subcat">
        <?php foreach ($articles as $value): ?>
            <div class="subcat">
                <a href="article.php?id=<?php echo $value['id'] ?>"><img src="<?php echo $value['img_source'] ?>" alt="<?php echo $value['img_alt'] ?>"/>
                <div class="content-subcat">
                    <!-- <a href="article.php?id=<?php echo $value['id'] ?>" class="btn-subcat"> -->
                        <h3><?php echo $value['description'] ?></h3>
                    <!-- </a> -->
                    <p><?php echo $value['name'] ?></p>
                    <p><?php echo $value['price'] ?>€</p>
                </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>


</main>

<?php
require_once("inc/footer.inc.php");

<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
$page = $_GET["page"];
// echo var_dump($page);
$categories = array(
    "homme" => array(
        "showcase" => "assets/img/category/img-category.jpg",
        "subcat" => array(
            "jean" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt.jpg",
            "Sneakers" => "assets/img/category/sneakers.jpg",
            "Accessoires" => "assets/img/category/accessoires.jpg"
        )
    ),
    "femme" => array(
        "showcase" => "assets/img/category/t-shirt.jpg",
        "subcat" => array(
            "robe" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt.jpg",
            "Sneakers" => "assets/img/category/sneakers.jpg",
            "Accessoires" => "assets/img/category/accessoires.jpg"
        )
    ),
    "sneakers" => array(
        "showcase" => "assets/img/category/img-sneakers.jpg",
        "subcat" => array(
            "mocasin" => "assets/img/category/jean.jpg",
            "talons" => "assets/img/category/t-shirt.jpg",
            "bottes" => "assets/img/category/sneakers.jpg",
            "espadrilles" => "assets/img/category/accessoires.jpg"
        )
    ),
    "accessoires" => array(
        "showcase" => "assets/img/category/img-accessoires.jpg",
        "subcat" => array(
            "ceintures" => "assets/img/category/jean.jpg",
            "sac" => "assets/img/category/t-shirt.jpg",
            "lunettes" => "assets/img/category/sneakers.jpg",
            "chapeaux" => "assets/img/category/accessoires.jpg"
        )
    )
    );
if(isset($page)) {
    $list = $categories[$page]; //$categories["homme"];
    $showcase = $categories[$page]["showcase"];
    $subcat = $categories[$page]["subcat"];
    // echo var_dump($list);
}


?>

<main>


<div class="carroussel">
        <img src="<?php echo $showcase ?>" alt="photo_01">
    </div>

    <section>
        <div class="title-category">
            <h2>Catégories</h2>
        </div>
        
        <div class="category">
            <?php foreach ($subcat as $key => $value): ?>
            <div class="category-product">
                <img src="<?php echo $value ?>" alt="<?php echo $key ?>">
                <div class="overlay-btn">
                    <a href="#" class="category-btn"><?php echo $key ?></a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="about-container">
        <div class="grid-about">
            <div class="grid-video">
                <video src="assets/videos/videocategory.mp4" type="video.mp4" width="100%" autoplay="true" muted loop></video>
            </div>
            <div class="grid-text">
                <div class="grid-text-content">
                    <h2>Summer 2023</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora vero laudantium adipisci voluptatibus in dolorem expedita neque, suscipit repellendus illo, perferendis qui. Blanditiis expedita vel doloribus aliquam temporibus, provident qui doloremque voluptatum impedit consequatur. Debitis pariatur cum nam saepe laboriosam. Repudiandae autem ad debitis eos quisquam maiores quibusdam placeat error.</p>
                </div>
                <a href="#" class="btn-about">Bouton</a>
            </div>
        </div>
    </section>

    <section>
        <div class="title-nouveauté">
            <h2>Nouveauté</h2>
        </div>
        
        <div class="whatsnew">
            <div class="nouveaute-product">
                <img src="assets/img/nouveautes/pantalon.webp" alt="Article01">
                <div class="type-nouveauté">
                    <a href="#" class="btn-nouveauté">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-nouveauté">269.99€</a>
            </div>
            <div class="nouveaute-product">
                <img src="assets/img/nouveautes/casquette.webp" alt="Article02">
                <div class="type-nouveauté">
                    <a href="#" class="btn-nouveauté">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-nouveauté">269.99€</a>
            </div>
            <div class="nouveaute-product">
                <img src="assets/img/nouveautes/lunette.webp" alt="Article03">
                <div class="type-nouveauté">
                    <a href="#" class="btn-nouveauté">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-nouveauté">269.99€</a>
            </div>
            <div class="nouveaute-product">
                <img src="assets/img/nouveautes/pull.jpg" alt="Article04">
                <div class="type-nouveauté">
                    <a href="#" class="btn-nouveauté">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-nouveauté">269.99€</a>
            </div>
        </div>  
    <section>
        <div class="notre-selection">
            <h2>Notre Selection</h2>
        </div>
        
        <div class="notre-selection">
            <div class="notre-selection-product">
                <img src="assets/img/best-seller/produit-01/02.webp" alt="Article05">
                <div class="type-notre-selection">
                    <a href="#" class="btn-notre-selection">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-notre-selection">269.99€</a>
            </div>     
            <div class="notre-selection-product">
                <img src="assets/img/best-seller/produit-02/02.webp" alt="Article06">
                <div class="type-notre-selection">
                    <a href="#" class="btn-notre-selection">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-notre-selection">269.99€</a>
            </div> 
            <div class="notre-selection-product">
                <img src="assets/img/best-seller/produit-03/02.webp" alt="Article07">
                <div class="type-notre-selection">
                    <a href="#" class="btn-notre-selection">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-notre-selection">269.99€</a>
                </div>
            </div>    
        </div>
</main>

<?php
require_once("inc/footer.inc.php");

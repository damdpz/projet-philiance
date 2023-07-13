<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");

?>

<main>


<div class="carroussel">
        <img src="assets/img/category/img-category.jpg" alt="photo_01">
    </div>

    <section>
        <div class="title-category">
            <h2>Catégories</h2>
        </div>
        
        <div class="category">
            <div class="category-product">
                <img src="assets/img/category/jean.jpg" alt="photo_jean">
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Jean</a>
                </div>
            </div>

            <div class="category-product">
                <img src="assets/img/category/t-shirt.jpg" alt="photo_t-shirt">
                <div class="overlay-btn">
                    <a href="#" class="category-btn">T-shirt</a>
                </div>
            </div>    
           
            <div class="category-product">
                <img src="assets/img/category/sneakers.jpg" alt="photo_sneakers">
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Sneakers</a>
                </div>
            </div>
            <div class="category-product">
                <img src="assets/img/category/accessoires.jpg" alt="photo_accessoires">
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Accessoires</a>
                </div>
            </div>
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

<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/inscription.css" rel="stylesheet" type="text/css">';

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
    <div class="form1">
        <img src="assets/img/image-compte/foret-printemps.jpg" alt="background">
        <!--FORMULAIRE-->
 <form class="connexion1">
    <h1>Inscription</h1>

    <input type="text" placeholder="Nom" name="nom">
    <label for="nom"></label>

    <input type="text" placeholder="Prénom" name="prenom">
    <label for="prenom"></label>

    <input type="date" placeholder="Date de naissance" name="date_de_naissance">
    <label for="date_de_naissance"></label>

    <input type="number" placeholder="Numéro de téléphone">
    <label for="number"></label>

    <input type="email" placeholder="Email" name="email">
    <label for="email"></label>

    <input type="text" placeholder="Adresse" name="adresse">
    <label for="adresse"></label>

    <input type="password" placeholder="Mot de passe" name="password">
    <label for="password"></label>

    <input type="password" placeholder="Répéter le mot de passe" name="validation_password">
    <label for="validation_password"></label>


    <input type="submit" value="Valider">

    
 </form>
       
    </div>


</main>

<?php
require_once("inc/footer.inc.php");
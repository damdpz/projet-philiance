<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");



// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/inscription.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");
require_once('src/bootstrap.php');
require_once("src/entities/Categories.php");

$catClass = $entityManager->getRepository('Categories');
$categories_listed = $catClass->findAll();
echo var_dump($categories_listed);
if (isset($_POST["nom"])) {
    $catego = new Categories;
    $nom_category = $_POST["nom"];
    $catego->setNom($nom_category);
    if(isset($_POST['showcaseimg'])) {
        $showcase_image = $_POST['showcaseimg'];
        $catego->setShowcaseImg($showcase_image);
    }
    
    $entityManager->persist($catego);
    $entityManager->flush();
}
// $catego = new Categories;
// $catego->setNom("tata");
// echo var_dump($catego);
// $entityManager->persist($catego);
// $entityManager->flush();
// echo var_dump($catego);

?>


<main>
    <div class="form1">
        <img src="assets/img/image-compte/foret-printemps.jpg" alt="background">
        <!--FORMULAIRE-->
 <form class="connexion1" method="post">
    <h1>Ajouter une categorie</h1>

    <input type="text" placeholder="Nom" name="nom">
    <label for="nom"></label>

    <input type="text" placeholder="ShowcaseImage" name="showcaseimg">
    <label for="nom"></label>

    <input type="submit" value="Valider">

    
 </form>
       
    </div>


</main>

<?php
require_once("inc/footer.inc.php");
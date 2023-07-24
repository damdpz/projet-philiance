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

// Recuperer la liste des categories stockés en base de donnés
$pdo_all_categories = get_connection();
$unbufferedResult = $pdo_all_categories->query("SELECT nom FROM Categories");
foreach ($unbufferedResult as $row) {
    if($_ENV == 'DEV') {
        echo $row['nom'] . PHP_EOL;
    }
}

// receptioner les paramettres passés dans le formulaire et les inserer dans la base de donnée
if (isset($_POST["nom"]) && isset($_POST["showcaseimg"])) {
    // Recuperation des variables postés via la methode POST du formulaire
    $nom = $_POST["nom"];
    $showcase_image = $_POST["showcaseimg"];
    // Preparation de la requette 
    $pdo_insert_categories = get_connection();
    $statement = $pdo_insert_categories->prepare("insert into Categories (nom, showcase_img) VALUES (:nom, :showcase_image)");
    $statement->bindParam('nom', $nom, PDO::PARAM_STR);
    $statement->bindParam('showcase_image', $showcase_image, PDO::PARAM_STR);
    $statement->execute();
}
// @todo: A faire pour toutes les table 

// $catClass = $entityManager->getRepository('Categories');
// $categories_listed = $catClass->findAll();
// select * from categories;
// echo var_dump($categories_listed);
// if (isset($_POST["nom"])) {
//     $catego = new Categories;
//     $nom_category = $_POST["nom"];
//     $catego->setNom($nom_category);
//     if(isset($_POST['showcaseimg'])) {
//         $showcase_image = $_POST['showcaseimg'];
//         $catego->setShowcaseImg($showcase_image);
//     }
    
//     $entityManager->persist($catego);
//     // insert into table ()
//     $entityManager->flush();
//     // execute
// }
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
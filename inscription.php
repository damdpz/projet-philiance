<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/inscription.css" rel="stylesheet" type="text/css">';

?>


<main>
    <div class="form1">
        <!--FORMULAIRE-->
 <form class="connexion">
    <h1>Inscription</h1>

    <input type="text" placeholder="Nom" name="nom">
    <label for="nom"></label>

    <input type="text" placeholder="Prénom" name="prenom">
    <label for="prenom"></label>

    <input type="date" placeholder="Date de naissance" name="date_de_naissance">
    <label for="date_de_naissance"></label>

    <input type="text" placeholder="adresse" name="adresse">
    <label for="adresse"></label>

    <input type="submit" value="Valider">

    
 </form>
       
    </div>


</main>

<?php
require_once("inc/footer.inc.php");
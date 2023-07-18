<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>


<main>
    <div class="form1">
        <img src="assets/img/image-compte/coucher-de-soleil.jpg" alt="background">
        <!--FORMULAIRE-->
 <form class="connexion">
    <h1>Mon compte</h1>

    <div class="champ">

        <input type="email" placeholder="Email"> <br>
        <label for="email"></label>


        <input type="password" placeholder="Mot de passe"> <br>
        <label for="password"></label>
        
        <a href="#" class="pw">Mot de passe oublié</a><br>

        <input type="button" value="Connexion" style="
         margin-top: 20px;"> 
    </div>

   
        <div class="champ1">
           <h3>Pas de compte ?</h3>
        
           <a href="inscription.php" class="compte"><input type="button" value="Créer un compte"></a>
        </div>
    </form>
 </form>
       
    </div>


</main>

<?php
require_once("inc/footer.inc.php");
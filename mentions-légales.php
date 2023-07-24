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

<section>
        <h2>Informations légales</h2>
        <p>Nom de l'entreprise : [Nom de l'entreprise]</p>
        <p>Statut juridique : [Statut juridique de l'entreprise]</p>
        <p>Adresse : [Adresse de l'entreprise]</p>
        <p>Numéro de téléphone : [Numéro de téléphone de l'entreprise]</p>
        <p>Email : [Adresse email de l'entreprise]</p>
    </section>

    <section>
        <h2>Responsable de la publication</h2>
        <p>Nom du responsable : [Nom du responsable]</p>
        <p>Adresse : [Adresse du responsable]</p>
        <p>Email : [Adresse email du responsable]</p>
    </section>

    <section>
        <h2>Hébergement</h2>
        <p>Nom de l'hébergeur : [Nom de l'hébergeur]</p>
        <p>Adresse : [Adresse de l'hébergeur]</p>
        <p>Numéro de téléphone : [Numéro de téléphone de l'hébergeur]</p>
        <p>Email : [Adresse email de l'hébergeur]</p>
    </section>

    <section>
        <h2>Propriété intellectuelle</h2>
        <p>Tous les contenus présents sur ce site sont protégés par le droit d'auteur. Toute reproduction totale ou partielle sans autorisation préalable est interdite.</p>
    </section>

    <section>
        <h2>Politique de confidentialité</h2>
        <p>[Expliquez ici votre politique de confidentialité concernant les données collectées sur le site]</p>
    </section>

</main>


<?php
require_once("inc/footer.inc.php");
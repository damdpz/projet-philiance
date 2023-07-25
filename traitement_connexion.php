<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

//SELECT * FROM clients WHERE email=$_POST['email'] and password=$_POST['password']

if(isset($_POST['email']) && isset($_POST['mdp']))
{
    //On se protége des injections XSS
    $email = htmlentities($_POST['email']);
    $mdp = htmlentities($_POST['mdp']);

    //On se connecte pour la requete SQL
    $host = "mysql:host=localhost;dbname=daikles"; // hôte + bdd
    $login = "root"; // login
    $password = "root"; // mot de passe
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // gestion des erreurs
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // on force l'utf8 sur les données provenants de la bdd
    );
    // Création de l'objet PDO :
    $pdo = new PDO($host, $login, $password, $options);
    
    //Faire la requête
    $reponse = $pdo->prepare("SELECT * FROM clients WHERE email = :email and mdp=:mdp");
    // Je donne ici la valeur attendue :
    $reponse->bindParam(':email', $email, PDO::PARAM_STR); // le filtre PARAM_STR permet de transformer la saisie en 100% string
    $reponse->bindParam(':mdp', $mdp, PDO::PARAM_STR); // il faudrait une ligne de bindParam par marqueur
    // $reponse->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);

    // Maintenant que l'information attendue est fournie à la requête, on peut exécuter
    $reponse->execute();

    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($donnees);
    // echo "</pre>";

    if(!empty($donnees) && !is_null($donnees))
    {
        die("BRAVO vous êtes connecté");
        //ICI TU Créé la SESSION - Et tu redirige vers la page une fois connecté
        //$_SESSION['user'] = $donnees;
        $_SESSION['clients'] = $donnees;
    header("Location: index.php");
    exit;
    }
    else{
        //die("OOps erreur d'authentification");
        header("location:compte.php?error=2");
    }

}
else{
    header("location:compte.php?error=1");
}

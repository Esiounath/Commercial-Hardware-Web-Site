<?php
//C'est le bon fichier avec le bon code 
session_start();
include'../class.php';
if (isset($_SESSION['ide']) && isset($_SESSION['pass'])) {
    header('Location:../admission/admission.php');
}
else{
if (isset($_POST['envoi'])) {
    $formulaire = new formulaire($prenom,$nom,$age,$email,$continent,$ville,$dep,$sexe,$ide,$pass,$pass2,$pass3);
$message = $formulaire->verifAuthen($ide,$pass3);
//Instance d'objet connexion base de donnée 
//Méthode L'instance objet $connexion
}
}
?>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <title>Page connexion</title>
        <link rel="stylesheet" href="connexion.css" media="screen" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <!-- zone de connexion -->
            
            <form method="POST">
                <h1>Connexion</h1>
                <label><h3>Nom d'utilisateur</h3></label>
                <input type="text" placeholder="Entrer votre  nom d'utilisateur" name="ide" required value=<?php if(isset($_COOKIE['identifiant'])) {echo "$_COOKIE[identifiant]";}?> >

                <label><h3>Mot de passe</h3></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="pass" required value=<?php if (isset($_COOKIE['mdp'])) {echo "$_COOKIE[mdp]";
                }?>>
                <label class="memo">Se souvenir de moi ?<input type="checkbox" style="background-color: #912C22;" name="memo"></label>
                <input type="reset" value="Effacer">
                <input type="submit" class='submit' value='Connexion' name="envoi">
                <button class="acceuille" >
                    <a href="../../../Front-end/home_page/home_page.html" style="text-decoration: none ;">Page d'acceuille</a>
                </button>
                 <button class="oublier">
                    <a href="acceuille.html" style="text-decoration: none;">Mot de Passe Oublier ? </a>
                </button>
                <?php
                if (isset($message)) {
                   echo "<p style=\"text-align: center;
      line-height: 1vh;
        color: #fcedd8;
        font-family: 'Niconne', cursive;
        font-weight: 10;
      text-shadow: 1px 1px 0px #eb452b, 
                  1px 1px 0px #efa032, 
                  2px 2px 0px #46b59b, 
                  3px 3px 0px #017e7f, 
                  4px 4px 0px #052939, 
                  4px 4px 0px #c11a2b, 
                  5px 5px 0px #c11a2b;
                  font-size: 1.5em ;\">$message</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
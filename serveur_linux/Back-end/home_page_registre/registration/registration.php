<?php
// error_reporting(E_ALL);
// error_reporting(-1);
//C'est le bon fichier avec le bon code 
include'../class.php';
session_start();
if (isset($_SESSION['ide']) && isset($_SESSION['pass'])){
  header('Location:../admission/admission.php');
}
elseif(isset($_COOKIE['identifiant']) && isset($_COOKIE['mdp']))
{
  echo "<script> var reponse = confirm(\"Vous êtes déjàa inscrit auparavant souhaitez vous vous inscrire une seconde fois ?\");
  if(reponse == true)
  {
    window.href=\"'../connexion/connexion.php'\";</script>
  }";

}
else{
  if (isset($_POST['envoi'])) {
 $formulaire = new formulaire($_POST['prenom'],$_POST['nom'],$_POST['age'],$_POST['mail'],$_POST['continent'],$_POST['ville'],$_POST['dep'],$_POST['sexe'],$_POST['ide'],$_POST['pass'],$_POST['pass2']);//($_POST['prenom,$nom,$age,$email,$continent,$ville,$dep,$sexe,$ide,$pass,$pass2)
$message = $formulaire->verifForm($_POST['prenom'],$_POST['nom'],$_POST['age'],$_POST['mail'],$_POST['continent'],$_POST['ville'],$_POST['dep'],$_POST['sexe'],$_POST['ide'],$_POST['pass'],$_POST['pass2']);
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="registration.css">
  <meta charset="utf-8">
  <title>Inscription</title>
</head>
<body>
  <fieldset style="border-color : #edde9c">
    <legend><h1 style="color: #005900;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;">Inscription</h1></legend>
<?php
if(isset($message)){
                               echo "<script> alert('$message'); </script>";
                             }
    ?>
    <form method="post">
      <table>
       <!-- <a href="../Back-end/error_page/error_page.html">je suis la </a>-->
        <tr>
          <td>
            <h2>Prenom</h3><input type="text" name="prenom" maxlength="102" placeholder="Entrez votre Prenom ?" >
          </td>
        </tr>
        <tr>
          <td>
            <h2> Nom</h3> <input type="text" name="nom" placeholder="Entrez votre Nom ?" maxlength="47" >
          </td>
        </tr>
                <tr>
                  <td>
                    <h2>Age</h3> <input type="number" name="age" placeholder="Entrez votre Age ?" max="120" min="1" style="width: 60% ;" >
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2>Ville</h3> <input type="text" name="ville" maxlength="58" placeholder="Entrez votre Ville de résidence ?" style="width: 70%;">
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2> Département de résidence</h3><input type="number" name="dep" placeholder="Entrez votre département de résidence ?" min="1" max="976">
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2>Adresse Mail</h3><input type="email" name="mail" placeholder="Entrez votre Adresse Mail ?" maxlength="254" >
                  </td>
                  <tr>
                    
                  </tr>
                </tr>
                <tr>
                  <td>
                    <h2>Continent</h2>
                    <select name="continent" >
                      <option>Europe</option>
                      <option>Amérique du Sud</option>
                      <option>Amérique du Nord</option>
                      <option>Asie du Sud</option>
                      <option>Asie du Nord</option>
                      <option>Asie de l'Est</option>
                      <option>Asie de l'Ouest</option>
                      <option>Océanie</option>
                      <option>Afrique</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h2>Civilité</h2>
                    <label><h4 style="color: #005900;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;">Monsieur</h4><input type="radio" name="sexe" value="Monsieur" style="height: 1em ; width: 1em ;" checked></label>
                    <br>
                    <label><h4 style="color: #005900;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;">Madame</h4><input type="radio" name="sexe" value="Madame" style="height: 1em ; width: 1em ;" checked></label >
                  </td>
                </tr>
      </table>
        <fieldset class="f2" style="border-color: #F7C1C1 ;">
      <legend><h3 style="color: #005900;
text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;">Espace membre</h3></legend>
      <table style="margin-left: 5%;">
                              <tr>
                                <td>
                                  <h2 style="text-shadow: 4px 3px 0px #7A7A7A; color: #FFFFFF;
background: #F7C1C1;">Identifiant & mot de passe</h2>
                                  <input type="text" name="ide" placeholder="Entrez un identifiant" maxlength="255" style="background: #F7C1C1;">
                                  <br>
                                  <input type="password" name="pass" placeholder="Entrez un mot de passe" style="background: #F7C1C1;" maxlength="255">
                                  <br>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <h2 style="text-shadow: 4px 3px 0px #7A7A7A; color: #FFFFFF;
background: #F7C1C1;">Confirmation</h2>
                                  <input type="password" name="pass2" placeholder="Confirmation du mot de passe" style="background: #F7C1C1;">
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <h2 style="text-shadow: 4px 3px 0px #7A7A7A; color: #FFFFFF;
background: #F7C1C1;">Validation</h2>
                                  <input type="reset" value="Effacer" style="color: #FFFFFF;
background: #F7C1C1;">
                                  <input type="submit" name="envoi" value="Validez" style="color: #FFFFFF;
background: #F7C1C1;">           </td>
                              </tr>
                          </table>
                    </fieldset>
                    <table style="margin-top: 1%; margin-left: 35%;">
                    <tr>
                      <td>
                        <h2>Page d'acceuille</h2>
                        <button>
                          <a href="../../../Front-end/home_page/home_page.html" style="text-decoration: none ;">Page d'acceuille</a>
                        </button>
                      </td>
                    </tr>
                  </table>
     </form>
  </fieldset>
</body>
</html>
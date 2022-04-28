<?php 
// error_reporting(E_ALL);
// error_reporting(-1);
//C'est le bon fichier avec le bon code 
class connexion
{
   protected $host='localhost';
   protected $db='Clients' ;
   protected $passw='KSIKSI';
   protected $user='eden';
   protected $cnx;
  
   public function __construct($host,$db,$passw,$user)
   {
        $this->host = $host ;
        $this->db = $db ;
        $this->passw = $passw ;
        $this->user = $user ;
        $this->connexion($host,$db,$user,$passw);
  }
     public function connexion($host,$db,$user,$passw)
     {
     try {
    $cnx = new PDO('mysql:host='.$this->host.';charset=utf8;dbname='.$this->db,$this->user,$this->passw);
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->cnx = $cnx ;
  }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:.html');
    exit();
    }
    return $cnx ;
  }
   
}

class formulaire extends connexion {
 private $prenom ;
 private $nom ;
 private $age ;
 private $email ;
 private $continent ;
 private $ville ;
 private $dep ;
 private $sexe ;
 private $pass2 ;
 private $pass ;
 private $pass3 ;
 private $message ;
 private $reqIdentifiant ;
 private $reqInsertion;
 private $reqMail ;
 private $Reqprenom ;
 private $Reqnom ;
 
 //Fonction publique
 public function __construct($prenom,$nom,$age,$email,$continent,$ville,$dep,$sexe,$ide,$pass,$pass2)
 {
  $this->prenom = $prenom ;
  $this->nom = $nom ;
  $this->email = $email ;
  $this->age= $age ;
  $this->continent = $continent ;
  $this->ville = $ville ;
  $this->dep = $dep ;
   $this->sexe = $sexe ;
   $this->ide = $ide ;
   $this->pass = $pass ;
   $this->pass2 = $pass2 ;
   $this->connexion($host,$db,$user,$passw);

 }
 public function connexion($host,$db,$user,$passw)
     {
     try {
    $cnx = new PDO('mysql:host='.$this->host.';charset=utf8;dbname='.$this->db,$this->user,$this->passw);
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->cnx = $cnx ;
  }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:page_erreur.html');
    exit();
    }
    return $cnx ;
  }
  public function verifForm($prenom,$nom,$email,$age,$continent,$ville,$dep,$sexe,$ide,$pass,$pass2)
  {
    if (isset($_POST['envoi']))
{
   
    $this->prenom = $_POST['prenom'] ;
    $this->nom = $_POST['nom'];
    $this->email = $_POST['mail'];
    $this->age = $_POST['age'];
    $this->continent = $_POST['continent'] ;
    $this->ville = $_POST['ville'];
    $this->dep = $_POST['dep'];
   $this->sexe = $_POST['sexe'];
   $this->ide = $_POST['ide'];
   $this->pass = $pass ;
   $this->pass2 = $pass2 ;
   $this->prenom = $_POST['prenom'];
   try
   {
   $stmt  = $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre FROM information WHERE identifiant = '$this->ide' OR email = '$this->email' OR nom = '$this->nom' AND prenom = '$this->prenom' ;");
   $stmt->setFetchMode(PDO::FETCH_ASSOC);

   foreach ($stmt as $ligne) {
      $resultat = $ligne['nombre'];
   }
   //->
   if (!empty($this->prenom) && !empty($this->nom) && !empty($this->age) && !empty($this->ville) && !empty($this->dep) && !empty($this->email) && !empty($this->continent) && !empty($this->sexe) && !empty($this->ide ) && !empty($this->pass) && !empty($this->pass2)) 
    {
   if ( strpbrk($this->pass,$this->pass2) == null ) {
      $message ='Les mot de passe ne sont pas identique ! ';
   }
   elseif ($resultat == 1 ) {
      $message='L adresse mail ou l identifiant ou le prenom ainsi que le nom entrée auparavant existe déjà ! ';
   }
   elseif (strlen($this->ide) <= 8 && strlen($this->pass) <= 8 ) {
       $message='** le mot de passe doit etre superieur a 8 carateres ainsi que l identifiant ! ';
   }
   elseif (strpbrk($this->ide,'@-_%!*$¨~') == null && strpbrk($this->pass,'@-_%!*$¨~') == null && strpbrk($this->ide,'0123456789') == null && strpbrk($this->pass,'0123456789') == null) {
    $message='** L identifiant ainsi que le mot de passe doit etre composer d un de ces carateres :@-_%!*$¨~0123456789 et avoir 8 carateres ';
   }
   elseif($resultat == 0)
   {
     $stmt->closeCursor();
     $exec = $this->connexion($host,$db,$user,$passw)->exec($reqInsertion='INSERT INTO information VALUES (NULL,"'.ucfirst($this->prenom).'","'.ucfirst($this->nom).'","'.$this->age.'","'.ucfirst($this->ville).'","'.$this->dep.'","'.$this->email.'","'.ucfirst($this->continent).'","'.ucfirst($this->sexe).'","'.$this->ide.'","'.$this->pass.'");');
     $stmt = null ;
     $cnx = null ;
     header('Location:../connexion/connexion.php');
     exit();
   }
}
else{
    $message='**Le formulaire doit être remplis intégralement !';
    }


   }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:../../error_page/error_page.html');
    exit();
    }
    }
   return $message ;
  
  }
  public function verifAuthen($ide,$pass3)
  {
      if ($_POST['envoi']) {
                    $this->ide = $_POST['ide'];
                    $this->pass3 = $_POST['pass'];
    
try
   {
   $stmt  = $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre FROM information WHERE identifiant = '$this->ide' AND mot_de_passe = '$this->pass3';");//AND identifiant="'.$this->ide.'"
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   foreach ($stmt as $ligne) {
      $resultat = $ligne['nombre'];
   }
   if (!empty($this->pass3) && !empty($this->ide )) {
    if($resultat == 0) {
            $message ='Erreur de Connexion <br> <br> <br><br> MOT DE PASSE OU IDENTIFIANT <br> <br> <br> INCORRECT  !';
            }
   elseif($resultat == 1) {
         $_SESSION['pass'] = $_POST['pass'];
         $_SESSION['ide'] = $_POST['ide'];
         if (isset($_POST['memo'])) {
        setcookie("identifiant",$this->ide,time()+3 * 24 * 60 * 60,'/','',true,true);
        setcookie('mdp',$this->pass3,time()+3 * 24 * 60 * 60,'/','',true,true);
    }
    else
    {
        if (isset($_COOKIE['identifiant'])) {
            setcookie($_COOKIE['identifiant'],"");
        }
        elseif (isset($_COOKIE['mdp'])) {
            setcookie($_COOKIE['mdp'],"");
        }
    }
         $stmt->closeCursor();
         $stmt = null ;
         $cnx = null ;
         $resultat = null ;
            header('Location:../admission/admission.php');
             exit();
                }
            }
  }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:page_erreur.html');
    exit();
    }
}
    return $message ;
 }

 public function afficher()
 {
  echo"$this->prenom".
   "$this->nom".
   "$this->email".
   "$this->age".
   "$this->continent".
   "$this->ville".
   "$this->dep".
   "$this->sexe".
   "$this->ide";
 }


}
class requete extends connexion
{
   private $req ;
   private $req2 ;
   private $stmt ;
   private $pass ;
   private $prenom ;
   private $nom ;
   private $sexe ;
   private $ville ;
   private $dep ;
   private $email ;
   private $continent ;
   private $ide ;
   private $exec ;
   private $exec2 ;
   private $reqModif;
   private $reqSupp ;

   function __construct($req,$prenom,$nom,$sexe,$ville,$dep,$email,$continent,$ide,$ide2,$pass)
   {
      $this->req = $req ;
      $this->connexion($host,$db,$user,$passw);
      $this->prenom = $prenom ;
      $this->nom = $nom ;
      $this->sexe = $sexe ;
      $this->ville  = $ville ;
      $this->dep = $dep ;
      $this->email = $email ;
      $this->continent = $continent ;
      $this->ide = $ide ;
      $this->ide2 = $ide2 ;
      $this->pass = $pass ;
   }
    public function connexion($host,$db,$user,$passw)
     {
     try {
    $cnx = new PDO('mysql:host='.$this->host.';charset=utf8;dbname='.$this->db,$this->user,$this->passw);
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->cnx = $cnx ;
  }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:page_erreur.html');
    exit();
    }
    return $cnx ;
  }
  public function listCandidat($req,$prenom,$nom,$sexe,$ville,$dep,$email,$continent,$ide,$ide2,$pass)
  {
   try
   {
    echo "<form method=\"post\">
     <input type=\"text\" name=\"ide\" placeholder=\"Entrez votre identifiant ?\" maxlength=\"254\" required value=$_SESSION[ide]>
     <input type=\"password\" name=\"pass\" placeholder=\"Entrez votre mot de passe ?\" maxlength=\"254\" required>
     <input type=\"submit\" value=\"Recherchez\" name=\"rech\">
     </form>";
     if (isset($_POST['rech'])) {
         $this->ide = $_POST['ide'];
         $this->pass = $_POST['pass'];
     }
   $stmt = $this->connexion($host,$db,$user,$passw)->query($this->req='SELECT * FROM information WHERE identifiant="'.$this->ide.'" AND mot_de_passe="'.$this->pass.'";');
   $stmt->setFetchMode(PDO::FETCH_BOTH);
   foreach ($stmt as $ligne) {
     echo"
<table>
   <thead>
        <tr>
            <th colspan=\"12\">Liste candidat</th>
        </tr>
        <tr>
        <th>Prenom</th>
            <th>Nom</th>
            <th>Âge</th>
            <th>Ville</th>
            <th>Département</th>
            <th>Email</th>
            <th>Identifiant</th>
            <th>Continent</th>
            <th>Civilité</th>
            <th>Reinitialiser</th>
            <th>Modifié</th>
            <th>Supprimer</th>
         </tr>
    </thead>
    <tbody>
    <form method=\"post\">
        <tr>
        <td><input type\"text\" name=\"prenom\" value=\"$ligne[prenom]\" size=\"10\"></td>
           <td> <input type=\"text\" name=\"nom\" value=\"$ligne[nom]\" size=\"10\"></td>
            <td>$ligne[age]</td>
            <td> <input type=\"text\" name=\"ville\" value=\"$ligne[ville]\" size=\"10\"></td>
            <td> <input type=\"number\" name=\"dep\"  max=\"976\" value=\"$ligne[departement]\"> </td>
            <td> <input type=\"email\" readonly name=\"email\" value=\"$ligne[email]\" size=\"18\"></td>
            <td><input name=\"ide\" readonly value=\"$ligne[identifiant]\" disble></td>
            <td>
            <select name=\"continent\">
                       <option>Amérique du Sud</option>
                      <option>Amérique du Nord</option>
                      <option>Europe</option>
                      <option>Asie du Sud</option>
                      <option>Asie du Nord</option>
                      <option>Asie de l'Est</option>
                      <option>Asie de l'Ouest</option>
                      <option>Océanie</option>
                      <option>Afrique</option>
            </select>
            </td>
            <td>
            <select name=\"sexe\">
            <option>Monsieur</option>
            <option>Madame</option>
            </select>
            </td>
            <td><input type=\"reset\" value=\"Reinitialiser\"></td>
            <td><input type=\"submit\"  name=\"modif\" value=\"Modifiez\"></td>
            <td><input type=\"submit\" name=\"supp\" value=\"Supprimez\"></td>
        </tr>
            </form>
    </tbody>
</table>";
//$stmt->closeCursor();

}
if (isset($_POST['modif'])) {
    $this->prenom = ucfirst($_POST['prenom']);
    $this->nom = ucfirst($_POST['nom']);
    $this->sexe = ucfirst($_POST['sexe']);
    $this->ville = ucfirst($_POST['ville']);
    $this->ide2 = $_POST['ide'];
    $this->dep = $_POST['dep'];
    $this->email = $_POST['email'];
    $this->continent = ucfirst($_POST['continent']);
    $exec = $this->connexion($host,$db,$user,$passw)->exec($reqModif='UPDATE information SET prenom="'.$this->prenom.'",nom="'.$this->nom.'",sexe="'.$this->sexe.'",ville="'.$this->ville.'", departement="'.$this->dep.'", email="'.$this->email.'", continent="'.$this->continent.'" WHERE identifiant="'.$this->ide2.'";');
    echo "<h2> Les Modification ont été apporté sur la base de donnée ! </h2>";
}
elseif (isset($_POST['supp'])) {
    $this->email = $_POST['email'];
    $exec2 = $this->connexion($host,$db,$user,$passw)->exec($reqSupp='DELETE FROM information WHERE email="'.$this->email.'";');
    echo "<h2>Votre compte à belle et bien été supprimez !</h2>";
    session_start();
    session_unset();
    session_destroy();
    echo "<button>
    <a href=\"../registration/registration.php\" style=\"text-decoration:none;\"><b>-></b>Retour<b><-</b></a>
    </button>";
}


}catch (PDOException $e) {
    print'<h4>Erreur:!</h4>'.$e->getMessage() . "<br>";
    die('<h2>Connexion Avec la base de donnée perdue</h2>');


  }
}
}           
?>
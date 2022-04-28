<?php 
// error_reporting(E_ALL);
// error_reporting(-1);
class recherche 
{
  private $recherche ;
  private $host ;
  private $user ;
  private $db ;
  private $passw ;
	


	public function __construct($recherche,$host,$db,$user,$passw)
	{
		$this->recherche = $recherche ;
    $this->host = $host ;
    $this->user = $user ;
    $this->passw = $passw ;
    $this->db = $db ; 
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
	public function recherche($recherche)
	{
    $keyboard= $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre FROM keyboard WHERE produitID LIKE '%$this->recherche%' OR nom LIKE '%$this->recherche%' OR forme LIKE '%$this->recherche%' OR marque LIKE '%$this->recherche%' OR description LIKE '%$this->recherche%' ;");
    $keyboard->setfetchMode(PDO::FETCH_ASSOC);

      $screen= $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre2 FROM screen WHERE produitID LIKE '%$this->recherche%' OR nom LIKE '%$this->recherche%' OR forme LIKE '%$this->recherche%' OR marque LIKE '%$this->recherche%' OR description LIKE '%$this->recherche%' ;");
    $screen->setfetchMode(PDO::FETCH_ASSOC);

    $pc_tower= $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre3 FROM pc_tower WHERE produitID LIKE '%$this->recherche%' OR nom LIKE '%$this->recherche%' OR forme LIKE '%$this->recherche%' OR marque LIKE '%$this->recherche%' OR description LIKE '%$this->recherche%' ;");
    $pc_tower->setfetchMode(PDO::FETCH_ASSOC);

    $mouse = $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre4 FROM mouse WHERE produitID LIKE '%$this->recherche%' OR nom LIKE '%$this->recherche%' OR forme LIKE '%$this->recherche%' OR marque LIKE '%$this->recherche%' OR description LIKE '%$this->recherche%' ;");
    $mouse->setfetchMode(PDO::FETCH_ASSOC);

    $hard_drive = $this->connexion($host,$db,$user,$passw)->query("SELECT COUNT(*) AS nombre5 FROM hard_drive WHERE produitID LIKE '%$this->recherche%' OR nom LIKE '%$this->recherche%' OR forme LIKE '%$this->recherche%' OR marque LIKE '%$this->recherche%' OR description LIKE '%$this->recherche%' ;");
    $hard_drive->setfetchMode(PDO::FETCH_ASSOC);

    foreach ($hard_drive as $ligne5) {
      $resultat5 = $ligne5['nombre5'];
    }

    foreach ($mouse as $ligne4) {
      $resultat4 = $ligne4['nombre4'];
    }

    foreach ($pc_tower as $ligne3) {
      $resultat3 = $ligne3['nombre3'];
    }

    foreach ($screen as $ligne2) {
      $resultat2 = $ligne2['nombre2'];
    }
      
    foreach ($keyboard as $ligne) {
      $resultat = $ligne['nombre'];
    }



    //<--------------------->
      if ($resultat == 1 || $resultat >= 1)
    {
    $keyboard->closeCursor();
       $keyboard= null ;
      header('Location:./keyboard/keyboard.html');
      exit();
    }
    elseif ($resultat2 == 1 || $resultat2 >= 1)
    {
      $screen->closeCursor();
      $screen = null ;
      header('Location:./screen/screen.html');
      exit();
    }
     elseif($resultat3 == 1 || $resultat3 >= 1)
    {
      $pc_tower->closeCursor();
      $pc_tower = null ;
      header('Location:./pc_tower/pc_tower.html');
      exit();
    }
     elseif ($resultat4 == 1 || $resultat4 >= 1)
    {
      $mouse->closeCursor();
      $mouse = null ;
      header('Location:./mouse/mouse.html');
      exit();
    }
    elseif ($resultat5 == 1 || $resultat5 >= 1)
    {
      $hard_drive->closeCursor();
      $hard_drive = null ;
      header('Location:./hard_disk/hard_disk.html');
      exit();
    }
}
}
if (isset($_POST['envoi'])) {
	$recherche1 = new recherche($_POST['recherche'],'localhost','Stockage','eden','KSIKSI');
	$recherche1->recherche($_POST['recherche']);
  // var_dump($recherche1->screen($_POST['recherche']));
}
?>
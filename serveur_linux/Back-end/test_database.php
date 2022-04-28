<?php
// error_reporting(E_ALL);
// error_reporting(-1);
class envoi
{
      private $nom ;
      private $prix ;
      private $poids ;
      private $dimensions ;
      private $couleur ;
      private $forme ;
      private $marque ;
      private $description ;
      private $host ;
      private $user ;
      private $passw ;
      private $db ;
      private $reference ;
      private $quantite ;
    
   public function __construct($nom,$prix,$poids,$dimensions,$couleur,$forme,$marque,$description,$reference,$quantite,$host,$db,$user,$passw)
    {
        $this->nom = $nom ;
        $this->prix = $prix ;
        $this->poids = $poids ;
        $this->dimensions = $dimensions ;
        $this->couleur = $couleur ;
        $this->forme = $forme ;
        $this->marque = $marque ;
        $this->reference = $reference ;
        $this->quantite = $quantite ;
        $this->db = $db ;
        $this->user = $user ;
        $this->passw = $passw ;
        $this->host = $host ;
        $this->description = $description ;
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
  public function envoyerProduit($nom,$prix,$poids,$dimensions,$couleur,$forme,$marque,$description,$reference,$quantite)
  {
    
    if (isset($_POST['envoi'])) {
      try{
        $rechercheproduitID = $this->connexion($host,$db,$user,$passw)->query('SELECT COUNT(*) AS reference FROM mouse WHERE produitID ="'.$this->reference.'" ;');
         echo "La taille description :".strlen($this->description)."\n";
          echo "La taille nom :".strlen($this->nom)."\n";
      foreach ($rechercheproduitID as $ligne) {
          $resultat = $ligne['reference'];
      }
        if (!empty($this->reference) && $resultat == 0 ) {
           $stmt = $this->connexion($host,$db,$user,$passw)->exec($req='INSERT INTO mouse VALUES ("'.strtoupper($this->reference).'","'.$this->nom.'","'.floatval($this->prix).'","'.floatval($this->poids).'","'.$this->dimensions.'","'.$this->couleur.'","'.$this->forme.'","'.$this->marque.'","'.$this->description.'","'.floatval($this->quantite).'");');
                $stmt = null ;
                 
                $message = 'Votre envoi a bien ete effectué';
                
        }
             else {
            $message = 'Vous n\'avez pas rempli la référence et elle doit être composer de plus de 10 caracteres ou elle existe déja ! ';
        }
        
       
    }catch (PDOException $e) {
    $e->getMessage() . "<br>";
    header('Location:page_erreur.html');
    exit();
    }
  }
 return $message ;
}
}

if (isset($_POST['envoi'])) {
$stock = new envoi($_POST['nom'],$_POST['prix'],$_POST['poids'],$_POST['dimensions'],$_POST['couleur'],$_POST['forme'],$_POST['marque'],$_POST['description'],$_POST['reference'],$_POST['quantite'],'localhost','Stockage','eden','KSIKSI');
// $stock->user = 'root';
$stock->connexion($host,$db,$user,$passw);
echo $stock->envoyerProduit($nom,$prix,$poids,$dimensions,$couleur,$forme,$marque,$description,$reference,$quantite);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tratiement data base </title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="post">
    <input type="text" name="reference" placeholder="Entrez la reference du produit ?">
    <input type="text" name="nom" placeholder="Entrez le nom du produit ?">
    <input type="text" name="prix" placeholder="Entrez le prix du produit ?">
    <input type="text" name="poids" placeholder="Entrez le poids du produit ?">
    <input type="text" name="dimensions" placeholder="Entrez les dimensions du produit ?">
    <input type="text" name="couleur" placeholder="Entrez la couleur ?">
    <input type="text" name="forme" placeholder="Entrez la forme du produit ?">
    <input type="text" name="marque" placeholder="Entrez la marque du produit ?">
    <input type="number" name="quantite" placeholder="Entrez la quantité du produit ?">
    <input type="textarea" name="description" placeholder="Entrez la description du produit ?">
    <input type="reset" value="Effacer">
    <input type="submit" name="envoi" value="Envoyer">
</form>
    </div>
  </div>
</nav>
</header>
<body>
    <div style='text-align: center;'>
  <!-- insert your custom barcode setting your data in the GET parameter "data" -->
  <img alt='Barcode Generator TEC-IT'
       src='https://barcode.tec-it.com/barcode.ashx?data=JGB+012100123412345678AB19XY1A+0+++++++++++++123456&code=RoyalMailMailmark2D&multiplebarcodes=true&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=0&hidehrt=False&eclevel=L&dmsize=Default'/>
</div>
<div style='padding-top:8px; text-align:center; font-size:15px; font-family: Source Sans Pro, Arial, sans-serif;'>
  <!-- back-linking to www.tec-it.com is required -->
  <a href='https://www.tec-it.com' title='Barcode Software by TEC-IT' target='_blank'>
    TEC-IT Barcode Generator<br/>
    <!-- logos are optional -->
    <img alt='TEC-IT Barcode Software' border='0'
         src='http://www.tec-it.com/pics/banner/web/TEC-IT_Logo_75x75.gif'>
  </a>
</div>
</body>
</html>
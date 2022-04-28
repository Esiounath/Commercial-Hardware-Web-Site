<?php
session_start();
include'../class.php';
$requete = new requete($req,$prenom,$nom,$sexe,$ville,$dep,$email,$continent,$ide,$ide2,$pass);
if (isset( $_SESSION['pass']) && isset($_SESSION['ide'])) {
	
}
else
{
	header('Location:../connexion/connexion.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admission.css">
	<meta charset="utf-8">
	<title>Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../../Front-end/home_page/home_page.html">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
       <li><a class="dropdown-item" href="../deconnexion.php">Deconnexion</a></li>
             <li><a class="dropdown-item" href="../../../Front-end/hardware/keyboard/keyboard.html">Keyboard</a></li>
             <li><a class="dropdown-item" href="../../../Front-end/hardware/pc_tower/pc_tower.html">PC Tower</a></li>
             <li><a class="dropdown-item" href="../../../Front-end/hardware/screen/screen.html">Screen</a></li>
             <li><a class="dropdown-item" href="../../../Front-end/hardware/mouse/mouse.html">Mouse</a></li>
          </ul>
        </li>
        <form class="d-flex" method="post" action="../../../Front-end/hardware/recherche.php">
        <input class="form-control me-2" type="search" placeholder="Search any Hardware" aria-label="Search" name="recherche" >
        <input class="btn btn-outline-success" name="envoi" type="submit" value="Search">
      </form>
      </ul>
    </div>
  </div>
</nav>
        </header>
        <body>
<?php
$requete->listCandidat($req,$prenom,$nom,$sexe,$ville,$dep,$email,$continent,$ide,$ide2,$pass);
?>

        </body>
</html>
<header>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#cdcfd1">
   <img src="img\Nouveau dossier\14.jpg" class="card-img-top rounded" alt="..." style="width: 100px;">
        <a class="navbar-brand">it Plus Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cours
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="premiereAdmin.php">Première année</a>
          <a class="dropdown-item" href="#">Deuxième année</a>
          <a class="dropdown-item"href="#">troisième année</a>
          <a class="dropdown-item" href="#">quatrième année</a>
          <a class="dropdown-item"href="#">cinquième année</a>
          <a class="dropdown-item" href="#">sixième année</a>
          <a class="dropdown-item"href="#">septième année</a>
          <a class="dropdown-item" href="#">huitième année</a>
          <a class="dropdown-item"href="#">neuvième année</a>
          <a class="dropdown-item" href="#">Première année secondaire</a>
          <a class="dropdown-item"href="#">Deuxième année secondaire</a>
          <a class="dropdown-item" href="#">troisième année secondaire</a>
          <a class="dropdown-item" href="#">Baccalaureat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="acceuil.php"> formation</a>
          
      <li class="nav-item active">
        <a class="nav-link" href="user.php">Liste des utilisateurs <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <ul class="navbar-nav">
                <li>
                <img src="img/<?=  $ligne['photo']  ?>" class="myphoto" style="width: 50px;">
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bienvenue <?=  $ligne['user_name']  ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="deconnexion.php">Deconnexion</a>
                  </div>
              </li>
            </ul>
  </div>
</nav>
</nav></header>



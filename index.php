<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WePost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

  <body class="row mx-auto px-0">
    <nav class=" row px-0 mx-0 navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="./index.php"><img class="logo" src="./images/logo/logo.webp" alt="Mon logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarColor02">
                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./pages/ajoutPost.php">Ajouter post</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./pages/apropos.php">A propos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="recherche..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>
    <div class=" contenu px-0  mx-auto container-fluid text-center">
    <h1>WePost</h1>   
<div class="row px-0 mx-0">

    <div id="sidebare" class="row col-md-12 col-lg-3 px-0 m-3 mx-auto col-mb-0" >
        bonjour !<br>
        <br>
        Ce site est conçu pour permettre aux utilisateurs de télécharger et de partager leurs photos en ligne. .<br>
        Notre interface conviviale facilite le téléchargement de vos photos en quelques clics seulement. Vous pouvez également ajouter des descriptions à vos photos pour les aider à se démarquer ou pour donner des informations supplémentaires sur les lieux.
    </div>
    <div class=" row col-md-12 col-lg-9 p-0 ">
    <div class="row p-3 mx-auto">
    <?php
#récuperer les données de connexion a la base de donnée
require_once'config/dbconnexion.php';
#récuperer les 6 derniéres lignes de la base de donnée
$sql = 'SELECT pseudo, titre, endroit, file_name, datedecreation, extension FROM uploadedphotos ORDER BY id DESC LIMIT 6';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $pseudo = $row['pseudo'];
    $titre = $row['titre'];
    $endroit = $row['endroit'];
    $filename = $row['file_name'];
    $datedecreation = $row['datedecreation'];
    $timstamp = time();
    $extension = $row['extension'];

        /*
important !! si je rajoute $timstamp dans la destination l'image sera pas affiché parceque y'a une défference entre 
le seconde  ou l'image est ajouter a la base de données  et le seconde ou l'image est enregetrer dans le dossier uploaded 

    */

    $imagePath = 'uploaded/' . $pseudo . $endroit . '.' . $extension;
     #afficher l'image et les données titre endroit la date de création et le pseudo sous un carde bootstrap
    echo'
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
    <div class="card ">
    <img src="' . $imagePath . '" class="card-img-top img-fluid rounded" style="width:350px;height:200px;" alt="' . $imagePath . '">
        <div class="card-body">
            <h5 class="card-title">'. $titre .'</h5>
            <p class="card-text">'.$titre.', at '.$endroit. '<br>
            ajouté le '.$datedecreation.' par @ '.$pseudo.'
            </p>
        </div>
    </div>
</div>';
}
    ?>
</body>


</html>
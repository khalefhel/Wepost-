<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WePost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" ></head>
    <link href="../styles/post.css" rel="stylesheet" >
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="../index.php"><img  class="logo" src="../images/logo/logo.webp" alt="Mon logo"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarColor02">
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./ajoutPost.php">Ajouter post</a>
              </li>
         
              <li class="nav-item">
                <a class="nav-link" href="./apropos.php">A propos</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="recherche..." aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Recherche</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">
        <h4>information : </h4><h8>pour ajouter des images veuillez remplir les informations suivantes </h8>
          <h1>Formulaires</h1>
          <form action="dbinsert.php" method="post" enctype="multipart/form-data" >
            <fieldset>
              <legend>ajout de l'image </legend>
              <div class="form-group">
                <label for="nom">Entrez votre pseudo</label>
                <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="pseudo">
              </div>
              
              <div class="form-group">
                <label for="text">Entrez votre titre</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="le titre de l'image" >
              </div>         
              <div class="form-group">
                <label for="endroit">endroit ou la photos est prise</label>
                <input type="text" class="form-control" id="endroit" name="endroit" placeholder="l'endroit  de l'image" >
                <input type="file" class="form-control" name="file" id="file" >
                <label for="checkbox">j'accepte de donner les droits d'ajouter cette photo</label>
                <input type="checkbox" class="form-control" id = "checkbox" name = "checkbox" >
                <button type="submit" class="btn btn-primary" >souvergarder</button></div>
              </div>   
              </form>
            </fieldset>
          </form>
        </div>
      </div>
  </body>
</body>
</html>
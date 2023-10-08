<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="styles/styles.css" rel="stylesheet">

</head>
</html>
<?php
    //connecter a la base de donné 
    require_once'../config/dbconnexion.php';
    //récupérer les valeurs des  champs de formulaire 
    $PSEUDO = $_POST["pseudo"];
    $TITRE = $_POST["titre"];
    $ENDROIT = $_POST["endroit"];
    // Récupère le nom et l'emplacement l'éxtention du l'image téléchargé
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $timstamp = time();
    //récuperer l'éxtension de l'image
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    //les éxtentions de l'image autorisés
    $extentionautorise = array ('jpg' , 'png');
    // enregestré l'image dans le dossier uploaded
    $chem_destination = $PSEUDO . $ENDROIT . '.' .$extension;
    $destination = '../uploaded/' . $chem_destination;
    move_uploaded_file($fileTmpName, $destination);
    //condition si  l'éxtension correspond avec les extensions autorisé 
    if (in_array($extension, $extentionautorise)){
    //insérer a la base de donnée le pseudo titre endroit et le nom de fichier
    $ins ="INSERT INTO uploadedphotos (pseudo, titre, endroit, file_name, extension) VALUES ('$PSEUDO', '$TITRE','$ENDROIT','$fileName','$extension')";
    $result = mysqli_query($conn,$ins); 
    //si l'insertion a réussi en vas apparaitre un message souvegardement reussi et a button pour revenir a l'aceuille 
    if($result) {
        echo '
        <div class = "styledbinsert">
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="15" height="15" role="img" aria-label="Success:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>souvegardemenr reussi</div>
      </div>
      <a href="../index.php" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">RETOUR </a>
      <div>
        ';
       
    }
    else {
        echo 'sa ne marche pas !!';
        var_dump($ins); //afficher comment le navigateur intérpréte le code
    }
}

    //
    else {
        echo ('<div class="alert alert-danger" role="alert">
        veuillez entrez une image de type jpg ou png!
      </div>
      <a href="ajoutPost.php" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">RETOUR au formulaire  </a>
      '
    );
    }
       
?>   
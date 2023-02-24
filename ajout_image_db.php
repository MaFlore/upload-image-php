<?php
include("connexion.php");
//on vérifie que le formulaire a été envoyé
if (isset($_POST['ajouter'])) {
    /*dossier où le fichier sera téléchargé il doit exister
    à l'avance sur votre serveur, sinon PHP vous affiche
    un message d'erreur s'il n'existe pas
    */
    $dossier='upload/';
    //l'utilisateur a choisi un fichier
    if (is_uploaded_file($_FILES['code']['tmp_name'])) {
        //nom du fichier
        $nom_fichier=$_FILES['code']['name'];
        //on déplace le fichier dans le repertoire
        if (move_uploaded_file($_FILES['code']['tmp_name'], $dossier.$nom_fichier)) {
           $image = $connexion->prepare('INSERT INTO image(code) VALUES(:code)');
           if($image->execute(array(
                'code'=>$nom_fichier
            ))){
                header('Location: /upload-image-php/index.php');
            }
        }
    }
}
?>
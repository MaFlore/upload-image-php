<?php 
    try{
        $connexion=new PDO('mysql:host=localhost;dbname=upload_img_db;charset=utf8','root', '');
    }
    catch(Exception $e){
        die('Erreur connexion non reussi'.$e->getMessage());
    }
?>
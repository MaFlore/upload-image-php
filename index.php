<?php
    include('connexion.php');
    $images=$connexion->query("SELECT * FROM image");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>App - Upload Image</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="card">
        <?php while($element=$images->fetch()){
        ?>
            <img src="../upload-image-php/upload/<?php echo $element['code']?>" alt="" style="width:15%">
        <?php } ?>
    </div>
    </div>
</body>
</html>
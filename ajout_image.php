<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ajout d'une</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    <h2>Ajout d'une image</h2>
    <a href=""><button type="button" class="btn rounded-pill btn-success">Retour</button></a>
    <form class="form-horizontal" method="post" action="/upload-image-php/ajout_image_db.php" enctype="multipart/form-data">
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="code">Image :</label>
            <div class="col-sm-10 ">
                <input type="file" class="form-control " id="code" name="code" required>
            </div>
        </div>
        <div class="form-group button">
            <div class="col-sm-offset-2 col-sm-10 ">
                <button type="submit" name="ajouter" class="btn btn-primary">ajouter</button>
            </div>
        </div>
    </form>
    </div>
</body>

</html>
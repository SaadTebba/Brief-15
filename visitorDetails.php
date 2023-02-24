<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brief-15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================================= Cards container ================================= -->

    <?php include 'header.php' ?>

    <?php

    include_once('connection.php');

    $id = $_GET['id'];

    $statement = $conn->prepare("SELECT * FROM annonce WHERE N_ann = $id");
    $statement->execute();
    $announces = $statement->fetchAll();
    foreach ($announces as $announce) {
    ?>

    <div class="container p-5">
        <div class="row">
            <div class="col">
                <p><span class="fw-bold">Title:</span> <?php echo $announce['Title']; ?></p>
                <p><span class="fw-bold">Category:</span> <?php echo $announce['Categorie']; ?></p>
                <p><span class="fw-bold">Type:</span> <?php echo $announce['Type']; ?></p>
                <p><span class="fw-bold">Area:</span> <?php echo $announce['Title']; ?></p>
                <p><span class="fw-bold">Adress:</span> <?php echo $announce['Adresse']; ?></p>
                <p><span class="fw-bold">Price:</span> <?php echo $announce['Prix']; ?></p>
                <p><span class="fw-bold">Description:</span> <?php echo $announce['Title']; ?></p>
                <p><span class="fw-bold">Contact owner:</span> <?php echo $announce['Title']; ?></p>
            </div>
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cdn.pixabay.com/photo/2014/11/13/06/12/boy-529067_960_720.jpg" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2016/02/28/12/55/boy-1226964_960_720.jpg" class="d-block w-100" alt="image">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2013/01/29/01/02/google-76522_960_720.png" class="d-block w-100" alt="image">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php } include 'footer.php' ?>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
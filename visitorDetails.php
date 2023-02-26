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

    <!-- ================================= Header (100vh) ================================= -->

    <header class="p-3 bg-white position-fixed z-3" id="header">

        <div class="row">

            <div class="col-3">
                <a href="index.php"><img src="logo.png" alt="logo" class="w-50"></a>
            </div>

            <div class="col-6">
                <form method="POST">
                    <div class="input-group">
                        <input type="search" name="search" id="search" class="form-control" placeholder="Search">
                        <select class="border" name="filter_search">
                            <option value="All">All</option>
                            <option value="City">City</option>
                            <option value="Category">Category</option>
                            <option value="Type">Type</option>
                            <option value="Price">Price</option>
                        </select>
                        <button type="submit" class="btn searchbtn border" title="Search"><i class="fas fa-search filtersearch"></i></button>
                    </div>
                </form>
            </div>

            <div class="col-3 d-flex justify-content-end gap-2">
                <button class="btn signin"><span class="h6">SIGN IN</span></button>
                <button class="btn btn-primary signup"><span class="h6">SIGN UP</span></button>
            </div>

        </div>

    </header>

    <div id="image" class="d-flex align-items-center">
        <h1 class="h1 text-center container pt-5 display-1 fw-bold">Buy, rent and sell your properties easily with us!</h1>
    </div>

    <div class="down-arrow" onclick="scrollDown()"></div>

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

    <?php }
    include 'footer.php' ?>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
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

        $statement = $conn->prepare("   SELECT N_tele
                                        FROM client
                                        JOIN annonce
                                        ON client.N_cl = annonce.N_cl   
                                        WHERE N_ann = $id");
        $statement->execute();
        $phoneNumber = $statement->fetch();

        $statement = $conn->prepare("   SELECT Img_url
                                        FROM galerie_images
                                        JOIN annonce
                                        ON galerie_images.N_ann = annonce.N_ann
                                        WHERE annonce.N_ann = $id");
        $statement->execute();
        $pictures = $statement->fetchAll();

        echo "<pre>";
        print_r($pictures);
        echo "</pre>";

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
                    <p><span class="fw-bold">Description:</span> No description</p>
                    <p><span class="fw-bold">Contact owner:</span> <?php echo $phoneNumber[0]; ?></p>
                </div>

                <div class="col">

                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://thumbs.dreamstime.com/z/medina-chefchaouen-morocco-chaouen-city-northwest-chief-town-province-50530429.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://thumbs.dreamstime.com/z/medina-s-architecture-chefchaouen-morocco-chaouen-city-northwest-chief-town-province-same-name-54375221.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                            <img src="https://thumbs.dreamstime.com/z/medina-chefchaouen-morocco-chaouen-city-northwest-chief-town-province-same-name-noted-54328394.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://thumbs.dreamstime.com/z/chefchaouen-morocco-beautiful-blue-medina-34474818.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                            <img src="https://thumbs.dreamstime.com/z/gate-house-medina-chefchaouen-morocco-chaouen-city-northwest-chief-town-province-same-name-54374879.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                        </div>
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
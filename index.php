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

    <form method="POST">
        <div class="input-group">
            <select class="form-select btn sortingSelect" name="sortSelect">
                <option selected disabled value="Sort by">Sort by</option>
                <option value="Publication date">Publication date</option>
                <option value="Price">Price</option>
            </select>
            <button class="btn sortingSelectBtn" type="submit" title="Sort" name="sort"><i class="fa-solid fa-arrow-down-short-wide"></i></button>
        </div>
    </form>

    <div class="container p-5 text-center">

        <?php

        include_once('connection.php');

        if (isset($_POST['search'])) {

            $searched_value = $_POST['search'];

            if ($_POST['filter_search'] == 'All') {

                $statement = $conn->prepare("SELECT * FROM annonce WHERE Title LIKE '{$searched_value}%' OR Ville LIKE '{$searched_value}%' OR Categorie LIKE '{$searched_value}%' OR `Type` LIKE '{$searched_value}%' OR Prix LIKE '{$searched_value}%'");
                $statement->execute();
                $announces = $statement->fetchAll();
            } elseif ($_POST['filter_search'] == 'Ville') {

                $statement = $conn->prepare("SELECT * FROM annonce WHERE Ville LIKE '{$searched_value}%'");
                $statement->execute();
                $announces = $statement->fetchAll();
            } elseif ($_POST['filter_search'] == 'Categorie') {

                $statement = $conn->prepare("SELECT * FROM annonce WHERE Categorie LIKE '{$searched_value}%'");
                $statement->execute();
                $announces = $statement->fetchAll();
            } elseif ($_POST['filter_search'] == 'Type') {

                $statement = $conn->prepare("SELECT * FROM annonce WHERE `Type` LIKE '{$searched_value}%'");
                $statement->execute();
                $announces = $statement->fetchAll();
            } elseif ($_POST['filter_search'] == 'Prix') {

                $statement = $conn->prepare("SELECT * FROM annonce WHERE Prix LIKE '{$searched_value}%'");
                $statement->execute();
                $announces = $statement->fetchAll();
            }
        } else {
            $statement = $conn->prepare("SELECT * FROM annonce");
            $statement->execute();
            $announces = $statement->fetchAll();
        }

        if ($announces == null) {
            echo "<h3>Unfortunately, there are no matches for your search</h3>";
            $id = "null";
            $statement = $conn->prepare("SELECT * FROM annonce WHERE 1 = 0");
            $statement->execute();
            $announces = $statement->fetchAll();
        }

        if (isset($_POST['sort'])) {

            if ($_POST['sortSelect'] == 'Publication date') {

                $statement = $conn->prepare("SELECT * FROM annonce ORDER BY D_pub ASC");
                $statement->execute();
                $announces = $statement->fetchAll();
            } elseif ($_POST['sortSelect'] == 'Price') {

                $statement = $conn->prepare("SELECT * FROM annonce ORDER BY Prix ASC");
                $statement->execute();
                $announces = $statement->fetchAll();
            } else {

                $statement = $conn->prepare("SELECT * FROM annonce ORDER BY Title ASC");
                $statement->execute();
                $announces = $statement->fetchAll();
            }
        }

        foreach ($announces as $announce) {

        ?>

            <div class="card d-inline-block m-1" style="width: 18rem;">
                <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
                <div class="card-body" <?php $id = $announce['N_ann']; ?>>
                    <h5 class="card-title"><?php echo $announce['Title']; ?></h5>
                    <!-- <p class="card-text">description</p> -->
                    <p class="card-text"><?php echo $announce['Categorie']; ?></p>
                    <p class="card-text"><?php echo $announce['Prix']; ?></p>
                    <a class="btn detailsButton" href="visitorDetails.php?id=<?php echo $id; ?>">Details</a>
                </div>
            </div>

        <?php
        }
        ?>

    </div>

    <?php include 'footer.php'; ?>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
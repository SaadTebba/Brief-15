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
    <link rel="stylesheet" href="https://kit.fontawesome.com/165265fe22.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================================= Cards container ================================= -->

    <?php include 'header.php' ?>

    <form action="POST">
        <select class="form-select btn sortingSelect" name="sortBy" id="sortBy">
            <option selected disabled value="none">Sort by</option>
            <option value="pubDate">Publication date</option>
            <option value="price">Price</option>
        </select>
    </form>

    <?php

    if (isset($_POST['sortBy'])) {
        $sort = $_POST['sortBy'];
        echo "Selected option: $sort";
    }

    ?>



    <div class="container p-5 text-center">

        <?php

        // $statement = $conn->prepare("SELECT * FROM annonce");
        // $statement->execute();

        // $announces = $statement->fetchAll();

        // foreach ($announces as $announce) {

            include_once('connection.php');
            $statement = $conn->prepare("SELECT * FROM annonce");
            $statement->execute();

            $announces = $statement->fetchAll();

            foreach ($announces as $announce) {

        ?>

                <div class="card d-inline-block m-1" style="width: 18rem;">
                    <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
                    <div class="card-body" data-id="<?php echo $announce['N_ann']; ?>">
                        <h5 class="card-title"><?php echo $announce['Title']; ?></h5>
                        <p class="card-text"><?php echo $announce['Title']; ?></p>
                        <p class="card-text"><?php echo $announce['Categorie']; ?></p>
                        <p class="card-text"><?php echo $announce['Prix']; ?></p>
                        <a class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow" onclick="details()">Details</a>
                    </div>
                </div>

        <?php
            }
        ?>

    </div>

    <!-- ================================= Modal window ================================= -->

    <?php 
        // $query = "SELECT * FROM annonce WHERE N_ann LIKE"
        // $statement = $conn->prepare();
    ?>

    <div class="modal modal-lg fade" id="ModalWindow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">More about this article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><span class="fw-bold">Title:</span> <?php echo $announce['Title']; ?></p>
                    <p><span class="fw-bold">Category:</span> <?php echo $announce['Categorie']; ?></p>
                    <p><span class="fw-bold">Type:</span> <?php echo $announce['Type']; ?></p>
                    <p><span class="fw-bold">Area:</span> <?php echo $announce['Title']; ?></p>
                    <p><span class="fw-bold">Adress:</span> <?php echo $announce['Adresse']; ?></p>
                    <p><span class="fw-bold">Price:</span> <?php echo $announce['Prix']; ?></p>
                    <p><span class="fw-bold">Description:</span> <?php echo $announce['Title']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
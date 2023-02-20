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
</head>

<body>

    <style>
        <?php include 'style.css' ?>
    </style>

    <!-- ================================= Header (100vh) ================================= -->

    <header class="p-3 bg-white">
        <!-- <div class="d-flex justify-content-start">
            <img src="logo.png" alt="logo">
        </div> -->
        <div class="d-flex justify-content-end gap-2">
            <button class="btn signin"><span class="h6">SIGN IN</span></button>
            <button class="btn btn-primary signup"><span class="h6">SIGN UP</span></button>
        </div>
    </header>
    <div id="image">
        <h1 class="h1 text-center container pt-5 display-1 fw-normal">Buy, rent and sell your properties easily with us!</h1>
    </div>
    <div class="down-arrow"></div>

    <!-- ================================= Cards container ================================= -->

    <div class="container p-5 text-center">

        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>
        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>
        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>
        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>
        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>
        <div class="card d-inline-block m-1" style="width: 18rem;">
            <img src="announceimg.jfif" class="card-img-top" alt="announceImage">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn detailsButton" data-bs-toggle="modal" data-bs-target="#ModalWindow">Details</a>
            </div>
        </div>

    </div>

    <!-- ================================= Modal window ================================= -->

    <div class="modal fade" id="ModalWindow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">More about this article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><span class="fw-bold">Title:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Category:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Type:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Area:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Adress:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Price:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span class="fw-bold">Description:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ================================= Footer ================================= -->

    <footer class="text-center text-black bg-white">

        <div class="text-center text-dark p-3 footertext">
            Contact us!
        </div>

        <div class="container pt-3">
            <section class="mb-3">
                <i class="fa-solid fa-envelope icons"></i>
                <i class="fa-brands fa-instagram icons"></i>
                <i class="fa-brands fa-twitter icons"></i>
                <i class="fa-brands fa-facebook icons"></i>
            </section>
        </div>

        <div class="text-center text-dark p-3 footertext">
            © All right reserved. Solicode Tanger 2022/2023.
        </div>

    </footer>

    <!-- ================================= Scripts ================================= -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/165265fe22.js" crossorigin="anonymous"></script>
</body>

</html>
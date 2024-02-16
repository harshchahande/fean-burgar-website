<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Feane
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Autour+One&family=Croissant+One&family=Gloria+Hallelujah&family=Kanit&family=Merriweather&family=Orbitron:wght@600&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/116af2a26d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- section 1 -->
    <section class="section">
        <nav class="s1-nav navbar navbar-expand-lg  fixed-top">
            <div class="container">
                <a class="s1-a text-decoration-none fs-2" href="#"> Feane</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-link ">
                            <a class="s1-a text-decoration-none active " aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item nav-link ">
                            <a class="s1-a text-decoration-none active px-4" aria-current="page"
                                href="Menu.html">MENU</a>
                        </li>
                        <li class="nav-item nav-link ">
                            <a class="s1-a text-decoration-none active" aria-current="page" href="about.html">ABOUT</a>
                        </li>
                        <li class="nav-item nav-link ">
                            <a class="s1-a text-decoration-none active ps-4" aria-current="page"
                                href="Book Table.html">BOOK TABLE</a>
                        </li>


                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-link pe-4">
                            <a class="s1-a text-decoration-none active" aria-current="page" href="#"><i
                                    class="fa-solid fa-user"></i></a>
                        </li>
                        <li class="nav-item nav-link pe-4">
                            <a class="s1-a text-decoration-none active" aria-current="page" href="#"><i
                                    class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item nav-link pe-4">
                            <a class="s1-a text-decoration-none active" aria-current="page" href="#"><i
                                    class="fa-solid fa-magnifying-glass"></i></a>
                        </li>

                    </ul>
                    <form class="d-flex " role="search">
                        <button class="btn btn-warning rounded-pill text-light " type="submit">Order Online</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- section 2 -->
    <section class="section2  " onmouseout="s2()">
        <div class="s2-d container text-light">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-12">
                            <h1 class="s2-h1" id="typing-animation"></h1>
                            <p class="py-4 ">Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente
                                ad
                                mollitia
                                laborum
                                quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste
                                magni quos nihil ducimus libero ipsam.
                            </p>
                            <button class="btn btn-warning rounded-pill text-light px-5 py-2 " type="submit">Order
                                Online</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-12">
                            <h1 class="s2-h1">Fast Food Restaurant</h1>
                            <p class="py-4 ">Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente
                                ad
                                mollitia
                                laborum
                                quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste
                                magni quos nihil ducimus libero ipsam.
                            </p>
                            <button class="btn btn-warning rounded-pill text-light px-5 py-2 " type="submit">Order
                                Online</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-6 col-md-6 col-ms-12 col-12">
                            <h1 class="s2-h1">Fast Food Restaurant</h1>
                            <p class="py-4 ">Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente
                                ad
                                mollitia
                                laborum
                                quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste
                                magni quos nihil ducimus libero ipsam.
                            </p>
                            <button class="btn btn-warning rounded-pill text-light px-5 py-2 " type="submit">Order
                                Online</button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- section 3 -->
    <section class="section3 my-5 py-5" onmouseover="s3()">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-6 col-ms-6 col-12 ">
                    <div class="row m-1" style="background-color: rgb(34,40,49);">
                        <div class=" col-lg-4 col-md-12 col-ms-12 col-12 p-4 ">
                            <div class="s3-d rounded-pill" style="border: 5px solid yellow;">
                                <img class="s3-img rounded-pill" src="img/o1.jpg" alt="" width="100%">
                            </div>
                        </div>
                        <div class=" col-lg-8 col-md-12 col-ms-12 col-12 text-light">
                            <h4 class="pt-5">
                                Tasty Thursdays</h4>
                            <h6 class=""><span class="s3-span " style="color: rgb(205,205,205);">20% </span>Off</h6>
                            <button class="btn btn-warning rounded-pill text-light px-4 py-2 mb-3 " type="submit">Order
                                Online <i class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></button>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 col-ms-6 col-12 ">
                    <div class="row m-1" style="background-color: rgb(34,40,49);">
                        <div class=" col-lg-4 col-md-12 col-ms-12 col-12 p-4 ">
                            <div class="s3-d rounded-pill" style="border: 5px solid yellow;">
                                <img class="s3-img rounded-pill" src="img/o2.jpg" alt="" width="100%">
                            </div>
                        </div>
                        <div class=" col-lg-8 col-md-12 col-ms-12 col-12 text-light">
                            <h4 class="pt-5">
                                Tasty Thursdays</h4>
                            <h6 class=""><span class="s3-span " style="color: rgb(205,205,205);">15% </span>Off</h6>
                            <button class="btn btn-warning rounded-pill text-light px-4 py-2 mb-3" type="submit">Order
                                Online <i class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 4 -->
    <section class="section4 container my-5 py-5">
        <h2 class="text-center">Our Menu</h2>
        <div class="text-center my-5 ">
            <button type="button" class="btn btn-light rounded-pill" onclick="fun()">All</button>
            <button type="button" class="btn btn-light rounded-pill mx-4" onclick="burger()">Burger</button>
            <button type="button" class="btn btn-light rounded-pill" onclick="Pizza()">Pizza</button>
            <button type="button" class="btn btn-light rounded-pill mx-4" onclick="Pasta()">Pasta</button>
            <button type="button" class="btn btn-light rounded-pill" onclick="Fries()">Fries</button>
        </div>

        <div class="row s4-r">
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4 ">
                <div class="card " style="background-color: rgb(241,242,243);">
                    <div class=" s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f1.png " class="s4-img card-img-top" alt="..." width="100%">
                    </div>
                    <div class=" s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$20</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f2.png " class="s4-img card-img-top py-3" alt="..." width="100%">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$15</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f3.png " class="s4-img card-img-top " alt="..." width="100%" height="145px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$17</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-4  " style="background-color: rgb(241,242,243);">
                        <img src="img/f4.png " class="s4-img card-img-top py-4 " alt="..." width="100%" height="199px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pasta</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$18</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-4 " style="background-color: rgb(241,242,243);">
                        <img src="img/f5.png " class="s4-img py-3 card-img-top" alt="..." width="100%" height="199px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$10</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f6.png " class="s4-img card-img-top" alt="..." width="100%" height="150px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$15</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f7.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Tasty Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$12</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f8.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Tasty Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$14</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c1 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f9.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pasta</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$10</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- *********burger -->
            <div class="s4-c2 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-4 " style="background-color: rgb(241,242,243);">
                        <img src="img/f2.png " class="s4-img card-img-top py-3" alt="..." width="100%">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$15</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c2 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f7.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Tasty Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$12</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c2 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f8.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Tasty Burger</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$14</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ****pizza -->
            <div class="s4-c3 col-lg-4 col-md-6 col-ms-12 col-12 mt-4 ">
                <div class="card " style="background-color: rgb(241,242,243);">
                    <div class=" s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f1.png " class="s4-img card-img-top" alt="..." width="100%">
                    </div>
                    <div class=" s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$20</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c3 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f6.png " class="s4-img card-img-top" alt="..." width="100%" height="150px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$15</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c3 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-5 " style="background-color: rgb(241,242,243);">
                        <img src="img/f3.png " class="s4-img card-img-top " alt="..." width="100%" height="145px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pizza</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$17</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--**** Pasta -->
            <div class="s4-c4 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d py-4 " style="background-color: rgb(241,242,243);">
                        <img src="img/f9.png " class="s4-img card-img-top" alt="...">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pasta</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$10</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="s4-c4 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-4  " style="background-color: rgb(241,242,243);">
                        <img src="img/f4.png " class="s4-img card-img-top py-4 " alt="..." width="100%" height="199px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">Delicious Pasta</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$18</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ****fries -->
            <div class="s4-c5 col-lg-4 col-md-6 col-ms-12 col-12 mt-4">
                <div class="card  " style="background-color: rgb(241,242,243);">
                    <div class="s4-d p-4 " style="background-color: rgb(241,242,243);">
                        <img src="img/f5.png " class="s4-img py-3 card-img-top" alt="..." width="100%" height="199px">
                    </div>
                    <div class="s4-c card-body text-light py-4" style="background-color: rgb(34,40,49);">
                        <h5 class="card-title">French Fries</h5>
                        <p class="card-text">Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit,
                            magnam voluptatem repellendus sed eaque</p>
                        <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12">
                                <h6>$10</h6>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-ms-12 col-12 text-end">
                                <span class="s4-span  rounded-pill" style="background-color: rgb(255,190,51)"><i
                                        class="fa-solid fa-cart-shopping" style="color: #fafafa;"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- section 5 -->
    <section class="section5 my-5   " style="background-color: rgb(34, 40, 49);">
        <div class="container text-light">
            <div class="row">
                <div class=" col-lg-6 col-md-12 col-ms-12 col-12 p-5">
                    <div class="p-5 m-4">
                        <img src="img/about-img.png" alt="" width="100%">
                    </div>
                </div>
                <div class=" col-lg-6 col-md-12 col-ms-12 col-12 pt-5">
                    <div class="s5-d">
                        <h1 class="s2-h1">
                            We Are Feane</h1>
                        <p class="py-4 ">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words
                            which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything embarrassing hidden in the middle of text. All
                        </p>
                        <button class="btn btn-warning rounded-pill text-light px-5 py-2  mb-3" type="submit">Read
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 6 -->
    <form action="db.php" method="post">
        <section class="section container  py-5">
            <div class="row">
                <div class=" col-lg-6 col-md-12 col-ms-12 col-12 mt-4 ">
                    <h2>Book A Table</h2>
                    <div class="form-floating mb-3">
                        <input type="text" name="Name" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Your Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="Number" name="phone" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Your Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="persons" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>How Many Persons?</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect"></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="date" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput"></label>
                    </div>
                    <button class="btn btn-warning rounded-pill text-light px-5 py-2 " name="submit" value="submit"
                        type="submit">BOOK NOW</button>
                </div>
                <div class=" col-lg-6 col-md-12 col-ms-12 col-12 mt-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438349.1308611906!2d-10.856854252409342!3d53.35756972168986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d0a98a6c1ed5df%3A0xf4e19525332d8ea8!2sEngland%2C%20UK!5e0!3m2!1sen!2sin!4v1705966702560!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </form>
    <!-- section 7 -->
    <section class="section container my-5 py-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Payal Hamell</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client1.jpg" alt="" width="20%">
                        </div>
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Arpit Milk</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client2.jpg" alt="" width="20%">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Payal Hamell</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client1.jpg" alt="" width="20%">
                        </div>
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Arpit Milk</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client2.jpg" alt="" width="20%">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Payal Hamell</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client1.jpg" alt="" width="20%">
                        </div>
                        <div class=" col-lg-6 col-md-12 col-ms-12 col-12 ">
                            <div class="text-light p-3 rounded-3" style="background-color: rgb(34, 40, 49);">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam quaerat dolor at quo
                                    dolorem
                                    quasi
                                    quos ullam minus recusandae aspernatur! Numquam delectus perspiciatis voluptate
                                    deserunt non
                                    eveniet
                                    eaque eius necessitatibus!</p>
                                <h3>Arpit Milk</h3>
                                <p>magna aliqua</p>
                            </div>
                            <img class="s7-img rounded-pill my-4" src="img/client2.jpg" alt="" width="20%">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- section 8 -->
    <section class="section  mt-5 py-5 text-light" style="background-color: rgb(34, 40, 49);">
        <div class="container ">
            <div class="row py-5">
                <div class=" col-lg-4 col-md-6 col-ms-12 col-12   text-center">
                    <h3 class="pb-3">Contact Us</h3>
                    <p> <a href="" class=" text-decoration-none text-light"> <i class="fa-solid fa-location-dot"
                                style="color: #ffffff;"></i>
                            Location</a></p>
                    <p> <a href="" class=" text-decoration-none text-light"><i class="fa-solid fa-phone  "
                                style="color: #ffffff;"></i>
                            Call +01 1234567890</a></p>
                    <p> <a href="" class=" text-decoration-none text-light"><i class="fa-solid fa-envelope  "
                                style="color: #ffffff;"></i>
                            demo@gmail.com</a></p>
                </div>
                <div class=" col-lg-4 col-md-6 col-ms-12 col-12  text-center ">
                    <h3 class="pb-3">Feane</h3>
                    <p>Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200
                        Latin words, combined with</p>
                    <span><i class="fa-brands fa-facebook-f fa-lg"></i></span>
                    <span><i class="fa-brands fa-twitter fa-lg"></i></span>
                    <span><i class="fa-brands fa-linkedin-in fa-lg"></i></span>
                    <span><i class="fa-brands fa-instagram fa-lg"></i></span>
                    <span><i class="fa-brands fa-pinterest fa-lg"></i></span>
                </div>
                <div class=" col-lg-4 col-md-6 col-ms-12 col-12 text-center ">
                    <h3 class="pb-3">Opening Hours</h3>
                    <p>Everyday</p>
                    <p>10.00 Am -10.00 Pm</p>
                </div>
            </div>
            <h6 class="text-center pb-3">© 2024 All Rights Reserved By Free Html Templates</h6>
            <h6 class="text-center">© Distributed By ThemeWagon</h6>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js.js"> </script>
</body>

</html>
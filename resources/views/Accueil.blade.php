<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" href="js/swiper/swiper-bundle.min.css">

</head>

<body>
    <div class="hero_area">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            var alertElement = document.querySelector('.alert');
            var closeButton = alertElement.querySelector('.btn-close');
    
            closeButton.addEventListener('click', function() {
                alertElement.classList.add('d-none');
            });
        </script>
        @endif
        <!-- header section strats -->
        @include('partials.header')
        <!-- end header section -->

        <!-- slider section -->
        <section class="slider_section ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-7 col-md-8 mx-auto">
                        <div class="detail-box">
                            <h1>
                                BIENVENUE CHEZ 2R-Shop <br>
                            </h1>
                            <h2 style="font-weight: bold;">
                                Votre boutique en ligne
                            </h2>
                            <p>
                                Explorer un monde de possibilité avec nos produits variés, conçus pour enrichire votre
                                vie !!!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="find_container ">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <form>
                                    <div class="form-row ">
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" id="inputPatientName"
                                                placeholder="Rechercher......">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select name="" class="form-control wide" id="inputDepartmentName">
                                                <option value="Normal distribution ">Téléphone </option>
                                                <option value="Normal distribution ">Électroménager </option>
                                                <option value="Normal distribution ">Informatique </option>
                                                <option value="Normal distribution ">Mode </option>
                                                <option value="Normal distribution "> Électronique</option>
                                                <option value="Normal distribution "> Cosmétique </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <div class="btn-box">
                                                <button type="submit" class="btn ">Rechercher</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Section Carousels -->
    <section>
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/carou1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Best-sellers Beauté</h3>
                            <p>Créez des looks à couper le souffle avec notre palette polyvalente. Soyez votre propre
                                artiste.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carou2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Soin du Corps</h3>
                            <p>Réveillez votre peau avec notre hydratant rajeunissant. Combattez les signes de l'âge
                                tout en hydratant en profondeur. <br> Votre peau mérite ce luxe.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carou3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Incontournables de la Maison</h3>
                            <p>Un ménage automatisé à portée de main laissant votre maison impeccable.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/carou4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Solutions de Communication</h3>
                            <p>Explorez la perfection technologique avec notre smartphone premium. <br> Écran brillant,
                                performances exceptionnelles, et appareil photo de pointe.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Section Swiper  -->
    <section class="Swiper container">
        <div class="row swiper-container">
            <div class="swiper-wrapper">
                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Téléphone/t2.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Infinix Smart 7 </p>
                            </h3>
                            <h4 class="product-price">55, 900 FCFA <del class="product-old-price">75, 000 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Electroménager/em11.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Bouilloires Electrique</p>
                            </h3>
                            <h4 class="product-price">6, 200 FCFA <del class="product-old-price">7, 200 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Electroménager/em9.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Cuisinière à 4 Feux</p>
                            </h3>
                            <h4 class="product-price">29,000 FCFA <del class="product-old-price">32,000 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Informatique/i12.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>HP 15-notebook</p>
                            </h3>
                            <h4 class="product-price">139, 500 FCFA <del class="product-old-price">150,000 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row swiper-container">
            <div class="swiper-wrapper">

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Mode/mode5.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Ensemble</p>
                            </h3>
                            <h4 class="product-price">6, 000 FCFA <del class="product-old-price">7, 000 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Mode/mode9.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Soutra-voil</p>
                            </h3>
                            <h4 class="product-price">6,000 FCFA <del class="product-old-price">7,500 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Electronique/e2.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Congélateur</p>
                            </h3>
                            <h4 class="product-price">139, 500 FCFA <del class="product-old-price">159, 000 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Electronique/e12.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Galaxy slim</p>
                            </h3>
                            <h4 class="product-price">36, 200 FCFA <del class="product-old-price">46, 000 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row swiper-container">
            <div class="swiper-wrapper">
                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Cosmétique/c8.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Sivoderm</p>
                            </h3>
                            <h4 class="product-price">2, 100 FCFA <del class="product-old-price">2, 800 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Cosmétique/c2.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Parfum</p>
                            </h3>
                            <h4 class="product-price">800 FCFA <del class="product-old-price">1, 000 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Cosmétique/c1.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Crème</p>
                            </h3>
                            <h4 class="product-price">500 FCFA <del class="product-old-price">800 FCFA</del></h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col swiper-slide">
                    <div class="product">
                        <div class="product-img">
                            <img src="images/Informatique/i9.jpg" alt="">
                            <div class="product-label">
                                <span class="new">Nouveau</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <h3 class="product-name">
                                <p>Souris wireless</p>
                            </h3>
                            <h4 class="product-price">5,000 FCFA <del class="product-old-price">6,000 FCFA</del>
                            </h4>
                            <div class="text-center">
                                <button type="button" class="btn btn-danger w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-plus" viewBox="0 0 16 16">
                                        <path
                                            d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                        <path
                                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                    <span>Achetter</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section -->
    <section class="category_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('telephone') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Téléphone
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('electromenager') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Électroménager
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('informatique') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Informatique
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('mode') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Mode
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('electronique') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c5.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Électronique
                            </h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-2 px-0">
                    <a href="{{ route('cosmetique') }}" class="box" target="_blank">
                        <div class="img-box">
                            <img src="images/c6.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Cosmétique
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end category section -->

    <!-- info section -->
    @include('partials.footer')
    <!-- footer section -->


    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

    <script src="js/swiper/swiper-bundle.min.js"></script>
</body>

</html>
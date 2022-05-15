<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pizza Menu Website">
    <meta name="author" content="Enis Gjini">

    <!-- Title of Website -->
    <title>Pizzeria Al Vesuvio</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- AOS - Animate on scroll - JavaScript Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fav Icon -->
    <link rel="shortcut icon" type="images/gallery/" href="https://scontent.fprn13-1.fna.fbcdn.net/v/t1.6435-9/86695068_2906077336111738_7098085690373570560_n.jpg?_nc_cat=107&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=3pRcn_jDMnUAX8A3PrD&_nc_ht=scontent.fprn13-1.fna&oh=00_AT_kmlFNTZBkXnztcrI_6nUqYz9AxnUO1MSwQ2X_Rrtz8g&oe=62A7D938" />


</head>

<body id="top">
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                    Al Vesuvio
                    <strong class="d-block">Pizzeria</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>



                        <a class="navbar-brand d-none d-lg-block" href="index.html">
                            Al Vesuvio
                            <strong class="d-block">Pizzeria</strong>
                        </a>

                        <li class="nav-item">
                            <a class="nav-link" href="#menu">Menu</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                        <div id="google_translate_element" class="mt-1"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en',

                                    autoDisplay: 'true',

                                    includedLanguages: 'en,it,sq,,fr',
                                }, 'google_translate_element');
                            }
                        </script>

                        <script>
                            function changeGoogleTranslate() {
                                if ($(".goog-te-combo option:first-child").text() == "") {
                                    $(".goog-te-combo").selectBox();
                                } else {
                                    setTimeout(changeGoogleTranslate, 50);
                                }
                            }
                            changeGoogleTranslate();
                        </script>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </ul>
                </div>

            </div>
        </nav>
        <section class="hero" id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slider/prapavija-1.png" class="img-responsive" alt="" style="width: 100%;height:auto; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider/prapavija-2.png" class="img-responsive" alt="" style="width: 100%;height:auto; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slider/prapavija-3.png" class="img-responsive" alt="" style="width: 100%;height:auto; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="heroText d-flex flex-column justify-content-center">
                            <h1 class="mt-auto mb-2">
                                Better
                                <div class="animated-info">
                                    <span class="animated-item">food</span>
                                    <span class="animated-item">experience</span>
                                </div>
                            </h1>
                            <p class="mb-4" data-aos="fade-up" data-aos-duration="3000">Pizzeria Al Vesuvio</p>
                            <div class="heroLinks d-flex flex-wrap align-items-center">
                                <a class="custom-link me-4" href="#about" data-aos="fade-up" data-aos-duration="3000">Look more</a>
                                <a class="custom-link me-4" href="tel:39 347 892 9921" data-aos="fade-up" data-aos-duration="3000"><i class="bi bi-telephone-fill"></i> +39 347 892 9921</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section → About | Start -->
        <section class="section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="mb-lg-3 mb-3" data-aos="fade-up" data-aos-duration="3000">Pizzeria Al Vesuvio</h2>
                        <p data-aos="fade-up" data-aos-duration="3000">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12 mx-auto" data-aos="fade-up" data-aos-duration="3000">
                        <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                            <p class="featured-text"><span class="featured-number">5</span> Years<br> of Experiences</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section → About | End -->
        <!-- Section → Gallery | Start -->
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-6 ps-0">
                        <img src="images/gallery/gallery-1.webp" class="img-thumbnail galleryImage shadow" alt="get a vaccine" title="get a vaccine for yourself" data-aos="fade-up" data-aos-duration="3000">
                    </div>
                    <div class="col-lg-6 col-6 pe-0">
                        <img src="images/gallery/gallery-2.webp" class="img-thumbnail galleryImage shadow" alt="wear a mask" title="wear a mask to protect yourself" data-aos="fade-up" data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section → Gallery | End -->
        <!-- Icluded Menu -->
        <?php include('sections/section-menu.php') ?>
        <footer class="site-footer section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h5 class="mb-lg-4 mb-3">Our pizzeria</h5>
                        <p><a href="mailto:sellaj30@gmail.com" class="text-white">Email : sellaj30@gmail.com</a>
                        <p>
                        <p>Location : 123 Digital Art Street, San Diego, CA 92123</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h5 class="mb-lg-4 mb-2">Socials</h5>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/pizzeriaalvesuvio2018" target="_blank" class="social-icon-link bi-facebook text-white"></a></li>
                            <li><a href="https://www.instagram.com/pizzeria_al_vesuvio_olmi/" target="_blank" class="social-icon-link bi-instagram text-white"></a></li>
                        </ul>
                        <div>
                            <p class="copyright-text">Copyright © Al Vesuvio 2022
                                <br>
                                Design: <a href="https://gjinienis.netlify.app/" target="_blank">Enis Gjini</a>
                            </p>
                        </div>
                    </div>
                </div>
        </footer>
    </main>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
<script>
    AOS.init();
</script>
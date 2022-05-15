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
        <section class="section-padding m-1" id="menu" data-aos="fade-up" data-aos-duration="3000">
            <div class="container">
                <div class="row">

                    <ul class="nav nav-pills flex-row flex-sm-row black" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-CLASSISCHE-tab" data-bs-toggle="pill" data-bs-target="#pills-CLASSISCHE" type="button" role="tab" aria-controls="pills-CLASSISCHE" aria-selected="true">CLASSISCHE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-VEGETARIANE-tab" data-bs-toggle="pill" data-bs-target="#pills-VEGETARIANE" type="button" role="tab" aria-controls="pills-VEGETARIANE" aria-selected="false">VEGETARIANE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-PATATE-tab" data-bs-toggle="pill" data-bs-target="#pills-PATATE" type="button" role="tab" aria-controls="pills-PATATE" aria-selected="false">PATATE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-AFFETTATI-tab" data-bs-toggle="pill" data-bs-target="#pills-AFFETTATI" type="button" role="tab" aria-controls="pills-AFFETTATI" aria-selected="false">AFFETTATI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-SPECIALITA-tab" data-bs-toggle="pill" data-bs-target="#pills-SPECIALITA" type="button" role="tab" aria-controls="pills-SPECIALITA" aria-selected="false">SPECIALITA'</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-FORMAGGI-tab" data-bs-toggle="pill" data-bs-target="#pills-FORMAGGI" type="button" role="tab" aria-controls="pills-FORMAGGI" aria-selected="false">FORMAGGI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-CALZONI-tab" data-bs-toggle="pill" data-bs-target="#pills-CALZONI" type="button" role="tab" aria-controls="pills-CALZONI" aria-selected="false">CALZONI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-PIZZA-tab" data-bs-toggle="pill" data-bs-target="#pills-PIZZA" type="button" role="tab" aria-controls="pills-PIZZA" aria-selected="false">CATEGORIA PIZZA</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-BIBITE-tab" data-bs-toggle="pill" data-bs-target="#pills-BIBITE" type="button" role="tab" aria-controls="pills-BIBITE" aria-selected="false">BIBITE</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- CLASSISCHE -->
                        <div class="tab-pane fade show active" id="pills-CLASSISCHE" role="tabpanel" aria-labelledby="CLASSISCHE">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">CLASSISCHE</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CAPRICCIOSA <p>Pomodoro, fior di latte, prosciutto, funghi, carciofi</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>DIAVOLA <p>Pomodoro, fior di latte, salamino piccante</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FUNGHI <p>Pomodoro, fior di latte, funghi champignon</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>MARINARA <p>Pomodoro olio extravergine all'aglio</p>
                                        </td>
                                        <td>€ 3.5</td>
                                        <td>€ 6.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PROSCIUTTO <p>Pomodoro, fior di latte, prosciutto</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CIPOLLA <p>Pomodoro, fior di latte, cipolla di Tropea</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>QUATTRO STAGIONI <p> Pomodoro, fior di latte, prosciutto, funghi, carciofi, olive nere</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ROMANA <p>Pomodoro, fior di latte,acciughe</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SALSICCIA <p>Pomodoro, fior di latte,salsiccia</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SICILIANA <p>Pomodoro,fior di latte acciughe,olive,capperi</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VIENNESE <p>Pomodoro,fior di latte,wurstel</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>MARGHERITA <p>Pomodoro,fior di latte</p>
                                        </td>
                                        <td>€ 5</td>
                                        <td>€ 8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>TONNO <p>Pomodoro fior di latte,tonno</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- VEGETARIANE -->
                        <div class="tab-pane fade show" id="pills-VEGETARIANE" role="tabpanel" aria-labelledby="VEGETARIANE">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">VEGETARIANE</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ESTATE <p>Pomodoro, fior di latte, datterino, rucola grana</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ORTOLANA <p>Pomodoro, fior di latte, verdure miste, chiodini grana</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PARMIGIANA <p>Pomodoro, fior di latte, melanzane, grana</p>
                                        </td>
                                        <td>€ 6.5</td>
                                        <td>€ 9.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VEGETARIANA <p>Pomodoro, fior di latte,peperoni, zucchine, melanzane</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SAPORITA <p>Pomodoro, fior di latte, pomodori secchi,brie,noci</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CIPOLLA <p>Pomodoro, fior di latte, cipolla di Tropea</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>QUATTRO STAGIONI <p> Pomodoro, fior di latte, prosciutto, funghi, carciofi, olive nere</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ROMANA <p>Pomodoro, fior di latte,acciughe</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SALSICCIA <p>Pomodoro, fior di latte,salsiccia</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SICILIANA <p>Pomodoro,fior di latte acciughe,olive,capperi</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VIENNESE <p>Pomodoro,fior di latte,wurstel</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>MARGHERITA <p>Pomodoro,fior di latte</p>
                                        </td>
                                        <td>€ 5</td>
                                        <td>€ 8</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>TONNO <p>Pomodoro fior di latte,tonno</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9 </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- PATATE -->
                        <div class="tab-pane fade show" id="pills-PATATE" role="tabpanel" aria-labelledby="PATATE">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">PATATE</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>DELLA CASA <p>Pomodoro, fior di latte, salamino, patate al forno, brie</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>MC DONALD <p>Pomodoro, fior di latte, wurstel, patate fritte*</p>
                                        </td>
                                        <td>€ 6.5</td>
                                        <td>€ 9.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SEMPLICE <p>Pomodoro, fior di latte, salsiccia, patate al forno</p>
                                        </td>
                                        <td>€ 6.5</td>
                                        <td>€ 9.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PATATOSA <p>Pomodoro,fior di latte patate fritte*</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PATATE AL FORNO <p>Pomodoro,fior di latte,patate al forno</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- AFFETTATI -->
                        <div class="tab-pane fade show" id="pills-AFFETTATI" role="tabpanel" aria-labelledby="AFFETTATI">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">AFFETTATI</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BRESAOLA <p>Pomodoro, fior di latte, bresaola di manzo</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PANCETTA <p>Pomodoro, fior di latte, pancetta affumicata</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SPECK <p>Pomodoro,fior di latte prosciutto crudo</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CRUDO <p>Pomodoro, fior di latte, bresaola di manzo</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PORCHETTA <p>Pomodoro, fior di latte, porchetta</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>MONTELLO <p>Pomodoro, fior di latte, porchetta porcini</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>DEL BOSCO <p>Pomodoro, fior di latte, misto funghi, porchetta</p>
                                        </td>
                                        <td>€ 8.5</td>
                                        <td>€ 11.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VALTELLINA <p>Pomodoro, fior di latte, bresaola, rucola, grana</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <!-- SPECIALITA -->
                        <div class="tab-pane fade show" id="pills-SPECIALITA" role="tabpanel" aria-labelledby="SPECIALITA">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">SPECIALITA</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>AFFUMICATA <p>Pomodoro, fior di latte, pancetta, affumicata scamorza</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ALISA <p>Pomodoro, fior di latte, salamino, funghi, peperoni, olive nere</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BRIANZOLA <p> Pomodoro, fior di latte,pancetta affumicata, burrata</p>
                                        </td>
                                        <td>€ 9</td>
                                        <td>€ 12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CALABRESE <p>Pomodoro, fior di latte, salamino, salsiccia, pomodori secchi</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PIRATA <p>Pomodoro, fior di latte, peperoni, tonno, acciughe</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>RUSTICA <p>Pomodoro, fior di latte, pancetta affumicata, cipolla, patate fritte*</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SARACENA <p>Pomodoro, fior di latte,salamino, cipolla, grana</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>TIROLESE <p>Pomodoro, fior di latte, speck, gorgonzola, noci</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VENETA <p>Pomodoro, fior di latte, salsiccia, funghi ,cipolla</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>VESUVIO <p>Pomodoro, burrata DOP, salamino</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ZINGARA <p>Pomodoro, fior di latte, salamino, funghi, olive nere</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>AMALFI <p>Pomodoro, fior di latte, porcini, melanzane, scamorza, crudo</p>
                                        </td>
                                        <td>€ 9</td>
                                        <td>€ 12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CAPRESE <p>Pomodoro, bufala DOP, datterino</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FANTASIA DEL PIZZAIOLO <p> Ingredienti scelti al posto tuo</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>SANITA'<p>Pomodoro, bufala DOP, olive nere, datterino</p>
                                        </td>
                                        <td>€ 8</td>
                                        <td>€ 11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>TOMBOLA <p>Pomodoro, fior di latte, burrata DOP, carciofi, crudo</p>
                                        </td>
                                        <td>€ 9.5</td>
                                        <td>€ 12.5</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- FORMAGGI -->
                        <div class="tab-pane fade show" id="pills-FORMAGGI" role="tabpanel" aria-labelledby="FORMAGGI">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">FORMAGGI</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">MAXI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>QUATTRO FORMAGGI <p>Pomodoro, fior di latte,gorgonzola, brie, scamorza, pecorino</p>
                                        </td>
                                        <td>€ 6.5</td>
                                        <td>€ 10.5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BUFALINA <p>Pomodoro, bufala DOP</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BURRATA <p>Pomodoro, fior di latte, burrata DOP</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td>€ 10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>RICOTTA <p>Pomodoro, fior di latte, ricotta</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>PHILADELPHIA <p>Pomodoro,fior di latte, philadelphia</p>
                                        </td>
                                        <td>€ 6</td>
                                        <td>€ 9</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- CALZONI -->
                        <div class="tab-pane fade show" id="pills-CALZONI" role="tabpanel" aria-labelledby="CALZONI">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">CALZONI</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CALZONE CLASSICO<p> Pomodoro, fior di latte prosciutto, funghi</p>
                                        </td>
                                        <td>€ 6.5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CALZONE FARCITO<p> Pomodoro, fior di latte, prosciutto, funghi, salamino, ricotta</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CALZONE SUD<p> Pomodoro,fior di latte, pancetta affumicata, ricotta, pepe nero</p>
                                        </td>
                                        <td>€ 7.5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>CALZONE VEGETARIANO<p> Pomodoro, fior di latte, peperoni, zucchine, melanzane</p>
                                        </td>
                                        <td>€ 7</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- PIZZA -->
                        <div class="tab-pane fade show" id="pills-PIZZA" role="tabpanel" aria-labelledby="PIZZA">
                            <h1 class="mt-4 text-center">PIZZA'S</h1>

                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">Pizza Frita</h3>

                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Normale</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Pomodoro, fior di latte, pancetta affumicata, ricotta, pepe nero </td>
                                        <td>€ 7.5</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>


                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">Pizza Familiare Diametro 50cm</h3>

                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp; </th>
                                        <th scope="col"> &nbsp; </th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Margherita</td>
                                        <td>€ 12</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FARCITA</td>
                                        <td>€ 15</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FARCITA CON AFFETTATO,BUFALINA O BURRATA&nbsp;</td>
                                        <td>€ 18</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">Pizza DA 1/2 METRO</h3>

                                <thead>
                                    <tr>
                                        <th scope="col">&nbsp; </th>
                                        <th scope="col"> &nbsp; </th>
                                        <th scope="col">Normale</th>
                                        <th scope="col">&nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Margherita</td>
                                        <td>€ 15</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FARCITA</td>
                                        <td>€ 18</td>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>FARCITA CON AFFETTATO,BUFALINA O BURRATA&nbsp;</td>
                                        <td>€ 20</td>
                                        <td>&nbsp; </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- BIBITE -->
                        <div class="tab-pane fade show" id="pills-BIBITE" role="tabpanel" aria-labelledby="BIBITE">
                            <table class="table mt-2 caption-top">
                                <h3 class="mt-4">BIBITE</h3>
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>ACQUA DA 0.5 L
                                        </td>
                                        <td>€ 1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BIBITA IN LATTINA</td>
                                        <td>€ 2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>BIRRA IN BOTTIGLIA</td>
                                        <td>€ 3</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>COCA COLA O FANTA IN BOTTIGLIA DA 1.5L</td>
                                        <td>€ 3</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
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
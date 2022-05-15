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
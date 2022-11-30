<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Uniacademia</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
<!-- Background Video-->
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/uniacademia.mp4" type="video/mp4" /></video>
        <!-- Masthead-->
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">UniAcademia</h1>
                    <p class="mb-5">
                    O UniAcademia tem por missão formar profissionais altamente qualificados, com competências, habilidades e padrão ético suficientemente desenvolvidos para atender às necessidades contemporâneas nas áreas acadêmicas em que atua. </p>
                    <form action="{{ route('voyager.login') }}" id="contactForm" >
                        <div class="row input-group-newsletter">
                            <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">Entre</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-primary m-3" href="https://twitter.com/uniacademiajf"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary m-3" href="https://www.facebook.com/uniacademiajf"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary m-3" href="https://www.instagram.com/uniacademiajf/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <form action="" method="post"></form>
</body>

</html>

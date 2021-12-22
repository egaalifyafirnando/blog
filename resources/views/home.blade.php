<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- style custom --}}
    <link rel="stylesheet" href="/css/landing-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <title>GO-BLOG | {{ $title }}</title>
</head>

<body id="page-top">
    @include('partials.navbar')

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">GO-BLOG</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Kumpulan artikel tentang teknologi yang menarik untuk
                        dibahas.</h2>
                    <a class="btn btn-danger rounded-pill" href="/posts">Go to blog</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact-->
    <div class="contact-section" style="background-color: black">
        <div class="container px-lg-5">
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://www.linkedin.com/in/egaalifyafirnando/"><i
                        class="bi bi-linkedin"></i></a>
                <a class="mx-2" href="https://github.com/egaalifyafirnando"><i class="bi bi-github"></i></a>
                <a class="mx-2" href="https://www.instagram.com/egaalfy_/"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <footer class="footer small text-center text-white-50" style="background-color: black">
        <div class="container px-4 px-lg-5">Copyright &copy; Ega Alifya Firnando, 2021</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

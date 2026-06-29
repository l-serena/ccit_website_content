<?php
    include '../includes/access.php';
function foot() { ob_start() ; ?>
    <!-- Footer -->
    <footer class="py-3" style="background-color: #1d2ade !important;">
        <div class="container">
        <p class="m-0 text-center text-white" style="background-color: #1d2ade !important;">PBHA Chinatown Citizenship </p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>
</html>
<?php return ob_get_clean(); } 

function head($num) { ob_start(); ?>
    <html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166619564-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166619564-1');
        </script>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>US History <?php echo $num ?></title>
        <link rel="icon" href="../assets/images/favicon.png">

        <!-- Bootstrap core CSS -->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="../assets/css/custom.css" rel="stylesheet">

        <!-- Flashcard JS -->
        <script type="text/javascript" src="../assets/js/apicalls.js"></script>

    </head>

    <body id="page-top">

    <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="background-color: #1d2ade !important;">            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.html">Chinatown Citizenship</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="../english.html">English</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link active" href="../ushistory.html">US History</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../other.html">Other Resources</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

<?php return ob_get_clean(); } ?>

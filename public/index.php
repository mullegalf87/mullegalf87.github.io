<?php
// Initialize the session sempre prima dell'html
session_start();
?>
<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="tpl/js/jquery_3_5_1.js"></script>
        <!-- popper -->
        <script src="tpl/js/popper.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='tpl/css/bootstrap_4_5_2.css'>
        <script src="tpl/js/bootstrap_4_5_2.js"></script>
        <!-- css pages -->
        <link rel='stylesheet' href='tpl/css/home.css'>
        <link rel='stylesheet' href='tpl/css/login.css'>
        <link rel='stylesheet' href='tpl/css/e-commerce.css'>
        <link rel='stylesheet' href='tpl/css/page_not_found.css'>
        <!-- js pages -->
        <script src="tpl/js/home.js"></script>
        <script src="tpl/js/login.js"></script>
        <script src="tpl/js/e-commerce.js"></script>
        <script src="tpl/js/page_not_found.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                            if ($_SESSION["username"]) {
                                echo htmlspecialchars($_SESSION["username"]);
                            }else{
                                echo "Dropdown";
                            }
                        ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            if ($_SESSION["username"]) {
                                echo '<a class="dropdown-item" href="/e-commerce">E-commerce</a>';
                                echo '<a class="dropdown-item" href="inc/logout.php">Logout</a>';
                            }else{
                                echo '<a class="dropdown-item" href="/login">Login</a>';
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
            $actual_link = "$_SERVER[REQUEST_URI]";
            switch (explode("/",$actual_link)[1]) {
                case 'login':
                    include('tpl/login.tpl.php');
                break;
                case 'e-commerce':
                    if ($_SESSION["username"]) {
                        require('inc/e-commerce.php');
                        include('tpl/e-commerce.tpl.php');
                    }else{
                        require('inc/page_not_found.php');
                        include('tpl/page_not_found.tpl.php');
                    }
                break;
                default:
                    if (explode("/",$actual_link)[1] == '') {
                        require('inc/home.php');
                        include('tpl/home.tpl.php');
                    }else {
                        require('inc/page_not_found.php');
                        include('tpl/page_not_found.tpl.php');
                    }
                break;
            }
        ?>
    </body>
</html>

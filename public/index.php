<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="tpl/js/jquery_3_5_1.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='tpl/css/bootstrap_4_5_2.css'>
        <script src="tpl/js/bootstrap_4_5_2.js"></script>
        <!-- css pages -->
        <link rel='stylesheet' href='tpl/css/home.css'>
        <link rel='stylesheet' href='tpl/css/contact.css'>
        <link rel='stylesheet' href='tpl/css/events.css'>
        <link rel='stylesheet' href='tpl/css/news.css'>
        <link rel='stylesheet' href='tpl/css/page_not_found.css'>
        <!-- js pages -->
        <script src="tpl/js/home.js"></script>
        <script src="tpl/js/contact.js"></script>
        <script src="tpl/js/events.js"></script>
        <script src="tpl/js/news.js"></script>
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
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/contact">Contact</a>
                        <a class="dropdown-item" href="/events">Events</a>
                        <a class="dropdown-item" href="/news">News</a>
                    </li>
                </ul>
            </div>
        </nav>
<?php
    $actual_link = "$_SERVER[REQUEST_URI]";
    //folder inc function php
    switch (explode("/",$actual_link)[1]) {
        case 'news':
            require('inc/news.php');
            include('tpl/news.tpl.php'); 
        break;
        case 'events':
            require('inc/events.php');
            include('tpl/events.tpl.php');
        break;
        case 'contact':
            require('inc/contact.php');
            include('tpl/contact.tpl.php');
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
        require('inc/connection_db.php');
    }
?>
    </body>
</html>

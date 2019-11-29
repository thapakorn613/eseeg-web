<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/EseeG-shortCut.png" />
        <title>ECG Chart</title>
        <!-- <title></title> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/magnific-popup.css">
        <link rel="stylesheet" href="public/css/jquery-ui.css">
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="public/css/owl.theme.default.min.css">


        <link rel="stylesheet" href="public/css/aos.css">

        <link rel="stylesheet" href="public/css/style.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <!-- Styles -->
        <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            .topnav a.active {
            background-color: #4CAF50;
            color: white;
            }
        </style>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
</head>

<body>
    <div class="site-wrap">
        <div class="site-navbar py-2">
            <div class="search-wrap">
                <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" ><img src ="images/logo.png" width="150px" hight="200px"></a>
                <div class="icons">
                    <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="positive">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active"><a style="color:white" href="index.html">Home</a></li>
                        <li><a style="color:white" href="shop.html">Services</a></li>
                        <li><a style="color:white" href="about.html">About</a></li>
                        <li><a style="color:white" href="contact.html">Contact</a></li> 
                        <li><a href="#" class="icons-btn d-inline-block js-search-open">
                        <span class="icon-search"><img src ="images/btn_search.png" width="20px" hight="20px"></span>
                        </a>
                        </li>
                        <li><a href="#" class="icons-btn d-inline-block js-search-open">
                        <span class="icon-search"><img src ="images/user.png" width="25px" hight="25px" class="icon-search"></span>
                        </a></li>
                    </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">     
            @yield('content')
        </div>
        </div>
    </div>
</body>
</html>
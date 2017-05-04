<!DOCTYPE html>
<html lang="fa">

<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <meta name=viewport content="width=device-width, initial-scale=1"> {{--
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.css" />--}}
    <title>Grand Waves</title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
</head>

<body> {{--***************************Navigation bar ***********************************************--}}
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand scrollToTop" href="/"><img src="/img/icon.png" alt="Grand Waves" class="menuIcon"></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav  nav-justified">
                <li class=" navOptions page-scroll scrollToTop"><a href="/" class = "nav-link " id="homeLink"><span class="glyphicon glyphicon-home homeIcon"></span>صفحه اصلی</a></li>
                <li class="navOptions page-scroll scrollToProduct"><a class = "nav-link" href="/products" id = "productsLink">محصولات</a></li>
                 <li class="navOptions page-scroll scrollToContact"><a class = "nav-link" href="/order" id = "orderLink">سفارش</a></li>
                 <li class="navOptions page-scroll scrollToContact"><a class = "nav-link" href="/blog" id = "blogLink" >بلاگ</a></li>
                 <li class="navOptions page-scroll scrollToContact"><a class = "nav-link" href="/about" id = "aboutLink">درباره ما</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

<div id="main"> @yield('content') </div>
<footer>
    <div class="footerTop">
        <div class="container newsLetters">

          <div class="row">
            <div class="col-xs-12">
<label style="color:#fff;"for="">عضویت در خبرنامه</label>
            </div>
            <div class="col-xs-12">
              <form class="" action="#" method="get">
                <div class="col-xs-2">
                  <input class="form-control btn-block btn-success" type="submit" name="registerBottom" value="عضویت">
                </div>
                <div class="col-xs-10">
                  <input class="form-control btn-block" type="text" name="registerInput" value="">
                </div>
              </form>

            </div>

          </div>



            </div>
        </div>

        <div class="footerContent">


          <a href="https://t.me/GrandWaves" class="fa fa-telegram shareIcons"></a>

          <a href="https://www.instagram.com/grandwaves/" class="fa fa-instagram shareIcons"></a>

      </div>

    <div class="footerBottom ">
    <small>تمامی حقوق برای شرکت گرند ویوز محفوظ است . قانون کپی رایت 2017</small>
    </div>
</footer>
<script src="/js/jquery-3.1.1.min.js "></script>
<script src="/js/bootstrap.js "></script>
<script src="/js/jquery.easing.min.js "></script>
<script src="/js/scrolling-nav.js "></script>
<script src="/js/script.js " type="text/javascript "></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="../bower/jquery/dist/jquery.js"></script>
    <link href="../bower/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sites/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sites/home.css') }}">
    <link rel="stylesheet" type="text/css" href="../bower/owl.carousel/dist/assets/owl.carousel.css">
</head>
<body>
    <div id="home">
        @include('sites.component.header')
            <div class="container content">
                <div class="header-slider">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item"><img src="../images/sites/slide1.jpg" class="fix-height" alt=""></div>
                        <div class="item"><img src="../images/sites/slide2.jpg" class="fix-height" alt=""></div>
                        <div class="item"><img src="../images/sites/slide3.jpg" class="fix-height" alt=""></div>
                    </div>
                </div>
                <marquee behavior="" direction=""><h3 class="header-style" style="color:#b7325d;font-family: Abril Fatface"><i>♥♥♥ Wish you have a good meal. ♥♥♥ !!!</i></h3></marquee>
    <!-- <iframe width="0" height="0" scrolling="no" frameborder="no" src="../music/huexua.mp3" 
        color= "ff6600&amp;auto_play=true&amp;show_artwork=true"></iframe> -->
                <div class="main-content">
                    @include('sites.component.product_new_hot')
                    @include('sites.component.list_product')
                </div>
            </div>
        @include('sites.component.show_product_user')
        @include('sites.component.edit_profile')
        @include('sites.component.footer')
    </div>
    <script src="../bower/vue/dist/vue.js"></script>    
    <script src="../bower/jquery/dist/jquery.min.js"></script>
    <script src="../bower/axios/dist/axios.min.js"></script>
    <script src="../bower/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../bower/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="../js/sites/home.js"></script>
</body>
</html>
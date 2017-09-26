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
                    <div class="row">
                        <div class="col-md-3 fix-top-3">
                            <div class="btn btn-3" v-on:click="getfood">Food</div>
                            <div class="btn btn-3" style="margin-top: 20px" v-on:click="getdrink">Drink</div>
                            <div class="food-new food">
                                <h2 class="text-center food-new-title"><span>Food New</span></h2>
                                <h3 class="item-food-new">
                                    <a href="javascript:void(0)" v-on:click="show_product" title="">Masala Omlet<span style="float: right;">$23</span></a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Chesese Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Veg Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Bulls Eye <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Butter Toast  <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Cheese <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        American <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Plain Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Steam Cake <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-food-new">
                                    <a href="">    
                                        Uppmaa <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                            </div>
                            <div class="drink-new drink">
                                <h2 class="text-center drink-new-title"><span>Drink New
                                </span></h2>
                                <h3 class="item-drink-new">
                                    <a href="" title="">Masala Omlet <span style="float: right;">$23</span></a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Chesese Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Veg Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Bulls Eye <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Butter Toast  <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink  Cheese <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink American <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Plain Omlet <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink Steam Cake <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                                <h3 class="item-drink-new">
                                    <a href="">    
                                        Drink  Uppmaa <span style="float: right;">$23</span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-9 fix-top-9 food">
                            <h1 class="text-center food-new-title"><span>Food Hot</span></h1>
                            <div class="col-md-12 item-food">
                                <div class="owl-theme text-center" id="item-food-1">
                                    <div class="fix-width-div">
                                        <a href="javascript:void(0)" v-on:click="show_product">    
                                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="javascript:void(0)" v-on:click="show_product" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g2.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g3.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g4.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g5.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 fix-top-9 drink">
                            <h1 class="text-center food-new-title"><span>Drink Hot</span></h1>
                            <div class="col-md-12 item-drink">
                                <div class="owl-theme text-center" id="item-drink-1">
                                   <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g2.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g3.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g4.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                    <div class="fix-width-div">
                                        <a href="" title="">    
                                            <img src="../images/g5.jpg" alt="" class="item fix-width-images">
                                        </a>
                                        <div class="name_product"> <a href="" title="">Chesese Omlet</a> </div>
                                        <span class="price_product">$24</span>
                                        <div class="btn btn-4">Buy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row fix-top-list-food text-center food">
                         <div id="list-foods" class="owl-carousel">
                                <a class="item" href="javascript:void(0)" v-on:click="show_product"><img src="../images/g1.jpg" class="fix-width-list-foods" alt="">
                                </a>    
                                <a class="item" href=""><img src="../images/g3.jpg" class="fix-width-list-foods" alt=""></a>
                                 <a class="item" href=""><img src="../images/g4.jpg" class="fix-width-list-foods" alt=""></a>
                                <a class="item" href=""><img src="../images/g5.jpg" class="fix-width-list-foods" alt=""></a>
                                <a class="item" href=""><img src="../images/g6.jpg" class="fix-width-list-foods" alt=""></a>
                                 <a class="item" href=""><img src="../images/g7.jpg" class="fix-width-list-foods" alt=""></a>
                                <a class="item" href=""><img src="../images/g8.jpg" class="fix-width-list-foods" alt=""></a>
                                <a class="item" href=""><img src="../images/g9.jpg" class="fix-width-list-foods" alt=""></a>
                        </div>
                    </div>
                    <div class="row fix-top-list-drink text-center drink">
                        <div id="list-drinks" class="owl-carousel">
                                <a class="item" href=""><img src="../images/g1.jpg" class="fix-width-list-drinks" alt=""></a>
                                <a class="item" href=""><img src="../images/g3.jpg" class="fix-width-list-drinks" alt=""></a>
                                 <a class="item" href=""><img src="../images/g4.jpg" class="fix-width-list-drinks" alt=""></a>
                                <a class="item" href=""><img src="../images/g5.jpg" class="fix-width-list-drinks" alt=""></a>
                                <a class="item" href=""><img src="../images/g6.jpg" class="fix-width-list-drinks" alt=""></a>
                                 <a class="item" href=""><img src="../images/g7.jpg" class="fix-width-list-drinks" alt=""></a>
                                <a class="item" href=""><img src="../images/g8.jpg" class="fix-width-list-drinks" alt=""></a>
                                <a class="item" href=""><img src="../images/g9.jpg" class="fix-width-list-drinks" alt=""></a>
                        </div>
                    </div>
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
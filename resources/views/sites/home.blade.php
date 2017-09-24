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
        <div class="container-fluid header-index">
            <div class="col-md-2">
                <a href="" title="" >
                    <img src="../images/sites/logo.png" class="logo-size-fixed"  alt="">
                </a>
            </div>
            <div class="col-md-3 search-product">
                <form action="">
                    <input type="text" class="form-control fix-width-search" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                    </span>
                </form>
            </div>
            <div class="col-md-6 nav-header">
                <span class="place_span"><i class="fa fa-map-marker" aria-hidden="true"></i> Số 1 Đại Cồ Việt</span>
                <span class="place_span"><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> 0</a></span>
                <span class="place_span"><i class="fa fa-bars" aria-hidden="true"></i><a href="" title=""> Đơn hàng của bạn</a> </span>
                <span class="place_span"><i class="fa fa-address-card-o" aria-hidden="true"></i> 
                    <a href="javascript:void(0)" v-on:click="show_infor"> Nguyen Van Trung</a>
                </span>
            </div>
            <div class="logout col-md-1">
                <a href="http://localhost:8000"><h4>Thoát</h4>
                </a>    
            </div>
        </div>
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
                        <a href="" title="">Masala Omlet <span style="float: right;">$23</span></a>
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
                <div class="col-md-12 food-new-content">
                    <div class="owl-theme text-center" id="food-new-slide-1">
                        <div class="item">
                            <a href="#" title="">
                                <img class="item food-new-slide-img" src="../images/g1.jpg" alt="">
                            </a>
                            <div>
                                25$
                            </div>
                        </div>
                        <div class="food-new-slide-div item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g2.jpg" alt=""></a>
                        </div>
                        <div class="food-new-slide-div item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 food-new-content">
                    <div class="owl-theme text-center" id="food-new-slide-1">
                        <div class="item"><a href="#" title="">
                            <img class="item food-new-slide-img" src="../images/g5.jpg" alt="">
                        </a></div>
                        <div class="food-new-slide-div item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g6.jpg" alt=""></a>
                        </div>
                        <div class="food-new-slide-div item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g7.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#" title=""><img class="item food-new-slide-img" src="../images/g8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 item-food">
                    <div class="owl-theme text-center" id="item-food-1">
                        <a href="" title="">    
                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g2.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g3.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g4.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g5.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g6.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g7.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g8.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g9.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g10.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g11.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g12.jpg" alt="" class="item fix-width-images">
                        </a> 
                    </div>
                </div>
            </div>
            <div class="col-md-9 fix-top-9 drink">
                <h1 class="text-center drink-new-title"><span>Drink Hot</span></h1>
                <div class="col-md-12 drink-new-content">
                    <div class="owl-theme text-center" id="drink-new-slide-1">
                        <div class="item">
                            <a href="#" title="">
                                <img class="item drink-new-slide-img" src="../images/g1.jpg" alt="">
                            </a>
                            <div>
                                25$
                            </div>
                        </div>
                        <div class="drink-new-slide-div item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g2.jpg" alt=""></a>
                        </div>
                        <div class="drink-new-slide-div item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 drink-new-content">
                    <div class="owl-theme text-center" id="drink-new-slide-1">
                        <div class="item"><a href="#" title="">
                            <img class="item drink-new-slide-img" src="../images/g5.jpg" alt="">
                        </a></div>
                        <div class="drink-new-slide-div item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g6.jpg" alt=""></a>
                        </div>
                        <div class="drink-new-slide-div item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g7.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#" title=""><img class="item drink-new-slide-img" src="../images/g8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 item-drink">
                    <div class="owl-theme text-center" id="item-drink-1">
                        <a href="" title="">    
                            <img src="../images/g1.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g2.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g3.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g4.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g5.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g6.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g7.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g8.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g9.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g10.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g11.jpg" alt="" class="item fix-width-images">
                        </a> 
                        <a href="" title="">    
                            <img src="../images/g12.jpg" alt="" class="item fix-width-images">
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="edit-infor-user">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 form-sign">
                <div class="login-with-framgia text-center">
                    <a href="" title="">
                        <span class="name"><b>Vui lòng nhập thông tin của bạn !</b></span>
                    </a>        
                </div>
                <form class="new_user" id="new_user" action="/users/sign_in" accept-charset="UTF-8" method="post">
                    <div class="field">
                        <label>Email</label><br />
                        <input class="form-control" type="email" value="" name="email_dangky" id="" />
                    </div>

                    <div class="field">
                        <label>Phone</label><br />
                        <input class="form-control" type="text" value="" name="phone_dangky" id=""/>
                    </div>

                    <div class="field">
                        <label>Birthday</label><br />
                        <input class="form-control" type="date" value="" name="phone_dangky" id=""/>
                    </div>

                    <div class="field">
                        <label>Sex</label><br/>
                        <label class="radio-inline"><input type="radio" name="optradio" value="male">Male</label>
                        <label class="radio-inline"><input type="radio" name="optradio" value="female">Female</label>
                    </div>

                    <div class="field">
                        <label>Avatar</label><br />
                        <input class="form-control" type="file"/>
                    </div>

                    <div class="field">
                        <label for="user_Mật khẩu">Password</label><br />
                        <input class="form-control" type="password" name="password_dangky" id="" />
                    </div>

                    <div class="field">
                        <label for="user_Mật khẩu">Confirm Password</label><br />
                        <input class="form-control" type="password" name="confirm_password_dangky" id="" />
                    </div>
                    <br>
                    <div class="actions text-center">
                        <input type="submit" name="commit" value="Edit" class="btn btn-default btn-sign"/>
                        <span style="float:right;"><a href="" title="">Skip</a></span>
                    </div>
                </form> 
            </div>
        </div>  
    </div>
</div>
<div class="modal fade" id="show_infor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog fix-width-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thông tin cá nhân</h4>
            </div>
            <div class="modal-body content-infor-user">
                <div class="row">
                    <div class="col-md-3">
                        <img class="images-user" src="../images/sites/infor.jpg" alt="">
                    </div>
                    <div class="col-md-9 infor-box">
                        <div class="row">
                            <div class="col-md-12 title-infor">
                                <div class="col-md-4">Name<span style="float:right;">:</span></div>
                                <div class="col-md-8">Nguyen Van A</div>
                            </div>
                            <div class="col-md-12 title-infor">
                                <div class="col-md-4">Birthday<span style="float:right;">:</span></div>
                                <div class="col-md-8">20/12/1996</div>
                            </div>
                            <div class="col-md-12 title-infor">
                                <div class="col-md-4">Phone<span style="float:right;">:</span></div>
                                <div class="col-md-8">0123456789</div>
                            </div>
                            <div class="col-md-12 title-infor">
                                <div class="col-md-4">Sex<span style="float:right;">:</span></div>
                                <div class="col-md-8">Nam</div>
                            </div>
                            <div class="col-md-12 title-infor">
                                <div class="col-md-4">Address<span style="float:right;">:</span></div>
                                <div class="col-md-8">Phuong Mai - Dong Da -Ha Noi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn btn-primary" v-on:click="edit_user" data-dismiss="modal">Edit</div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <footer class="footer-index">
        <div class="row footer-index-1">
            <div class="col-md-4">
                <h2 class="footer-color"><i>Order Food And Drink</i></h2>
            </div>
            <div class="col-md-4">
                <h4 class="footer-color-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <span style="padding-left: 20px">So 1 Ta Quang Buu, Hai Ba Trung , Ha Noi . </span></h4>
                <h4 class="footer-color-1"><i class="fa fa-phone" aria-hidden="true"></i><span style="padding-left: 19px">+84 984 123 456.</span></h4>
                <h4 class="footer-color-1"><i class="fa fa-envelope-open" aria-hidden="true"></i> <span style="padding-left: 13px">order_food_and_drink@gmail.com.</span></h4>
            </div>
            <div class="col-md-4">
                <h4>
                    <i style="color: #fff">"Mọi hạnh phúc trên đời đều xuất phát từ một bữa sáng nhàn nhã." - John Gunther
                    </i>
                </h4>
            </div>
        </div>
    </footer>
</div>
</div>
<script src="../bower/vue/dist/vue.js"></script>    
<script src="../bower/jquery/dist/jquery.min.js"></script>
<script src="../bower/axios/dist/axios.min.js"></script>
<script src="../bower/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="../bower/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/sites/home.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login-SignIn</title>
    <link rel="stylesheet" type="text/css" href={{ asset('bower/bootstrap/dist/css/bootstrap.min.css')}}>
    <script src="../bower/jquery/dist/jquery.js"></script>
    <script src="../bower/bootstrap/dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <link href="../bower/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href={{ asset('css/sites/login.css') }}>
</head>
<body>
    <div id="form_login_signin">
        <div class="container-fluid header-index">
            <div class="col-md-2">
                <a href="" title="" >
                    <img src="../images/sites/logo.png" class="logo-size-fixed"  alt="">
                </a>
            </div>
            <div class="col-md-1 col-md-offset-8">
                <a href="http://localhost:8000" title="">
                    <i class="fa fa-reply fa-3x" aria-hidden="true" style="color:#fff"></i>
                </a>
            </div>
            <div class="col-md-1 sign-in">
                <a href="#" id="header_dangky" v-on:click="dangky_function">
                    <h5><span><b>Sign In</b></span></h5>
                </a>
                <a href="#" id="header_dangnhap" v-on:click="dangnhap_function">
                    <h5><span><b>Login</b></span></h5>
                </a>       
            </div>
        </div>
        <div class="container-fluid">
            <div class="container" id="dangnhap">
                <div class="row">
                    <h1 class="text-center title">Đăng nhập</h1>
                </div>
                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 form-sign">
                        <div class="login-with-framgia text-center">
                            <a href="" title="">
                                <span class="name"><b>Đăng nhập với tài khoản Facebook</b></span>
                            </a>        
                        </div>
                        <form class="new_user" id="new_user" action="home" accept-charset="UTF-8" method="post">
                            <div class="field">
                                <label>Email</label><br />
                                <input class="form-control" type="email" name="email_dangnhap"/>
                            </div>

                            <div class="field">
                                <label>Mật khẩu</label><br />
                                <input class="form-control" type="password" name="password_dangnhap"/>
                            </div>

                            <div class="field">
                                <input name="user[remember_me]" type="hidden" value="0" /><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me" />
                                <label for="user_Ghi nhớ đăng nhâp">Ghi nhớ đăng nhâp</label>
                            </div>

                            <div class="actions text-center">
                                <input type="submit" name="commit" value="Đăng nhập" class="btn btn-default btn-sign"/>
                            </div>
                        </form> 
                        <a href="/users/password/new">Quên mật khẩu</a><br />
                    </div>
                </div>  
            </div>
            <div class="container" id="dangky" >
                <div class="row">
                    <h1 class="text-center title">Đăng Ký</h1>
                </div>
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
                                <input class="form-control" type="email" name="email_dangky" />
                            </div>

                            <div class="field">
                                <label>Phone</label><br />
                                <input class="form-control" type="text" name="phone_dangky" />
                            </div>

                            <div class="field">
                                <label>Address</label><br />
                                <input class="form-control" type="text" name="address_dangky" />
                            </div>

                            <div class="field">
                                <label>Password</label><br />
                                <input class="form-control" type="password" name="password_dangky" />
                            </div>

                            <div class="field">
                                <label>Confirm Password</label><br />
                                <input class="form-control" type="password" name="confirm_password_dangky" />
                            </div>
                            <br>
                            <div class="actions text-center">
                                <input type="submit" name="commit" value="Đăng Ký" class="btn btn-default btn-sign"/>
                            </div>
                        </form> 
                    </div>
                </div>  
            </div>
        </div>  
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
    <script src="../bower/vue/dist/vue.js"></script>    
    <script src="../bower/jquery/dist/jquery.min.js"></script>
    <script src="../bower/axios/dist/axios.min.js"></script>
    <script src="../js/sites/login_signin.js"></script>
</body>
</html>
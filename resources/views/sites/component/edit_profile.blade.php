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
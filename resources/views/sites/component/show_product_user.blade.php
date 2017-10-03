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
<div class="modal fade" id="show_product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="name_product_show">@{{ product.name }}</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img v-bind:src="'../images/'+ product.avatar" alt="" class="fix-size-product">
                    </div>
                    <div class="col-md-6">
                        <p class="discrible">@{{ product.describle }}</p>
                        <div class="price_show">
                            <span>Price </span>
                            <span>: $@{{ product.price }}</span>
                        </div><br>
                        <div class="status_show">
                            <span>Availability : </span>
                            <span>in stock </span>
                            <span>@{{ product.status }}(items)</span>
                        </div><br>
                        <div class="number_show">
                            <span>Quautity : </span>
                            <input type="number" name="buy_number" min="0" value="0">
                        </div>
                        <div class="btn btn-3 buy_show">Mua Ngay</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
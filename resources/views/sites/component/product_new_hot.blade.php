<div class="row">
    <div class="col-md-3 fix-top-3">
        <div class="btn btn-3" v-on:click="getfood">Food</div>
        <div class="btn btn-3" style="margin-top: 20px" v-on:click="getdrink">Drink</div>
        <div class="food-new food">
            <h2 class="text-center food-new-title"><span>Food New</span></h2>
            <h3 class="item-food-new" v-for="food in foods">
                <a href="javascript:void(0)" v-on:click="show_product(food)" title="">
                @{{ food.name }}<span style="float: right;">$@{{ food.price }}</span></a>
            </h3>
        </div>
        <div class="drink-new drink">
            <h2 class="text-center drink-new-title"><span>Drink New
            </span></h2>
            <h3 class="item-food-new" v-for="drink in drinks">
                <a href="javascript:void(0)" v-on:click="show_product(drink)" title="">
                @{{ drink.name }}<span style="float: right;">$@{{ drink.price }}</span></a>
            </h3>
        </div>
    </div>
    <div class="col-md-9 fix-top-9 food">
        <h1 class="text-center food-new-title"><span>Food Hot</span></h1>
        <div class="col-md-12 item-food">
            <div class="owl-theme text-center" id="item-food-1">
                <div class="fix-width-div" v-for="food_hot in food_hots">
                    <a href="javascript:void(0)" v-on:click="show_product(food_hot)">    
                        <img v-bind:src="'../images/'+ food_hot.avatar" alt="" class="item fix-width-images">
                    </a>
                    <div class="name_product"> <a href="javascript:void(0)" v-on:click="show_product(food_hot)" title="">@{{ food_hot.name }}</a> </div>
                    <span class="price_product">$@{{ food_hot.price }}</span>
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
new Vue ({
    el: '#home',
    data: {
        foods:[],
        drinks:[],
        food_hots:[],
        drink_hots:[],
        product:{'id':'','name':''},
        list_foods:[],
        list_drinks:[],
        new_food:[],
    },
    mounted: function(){
        this.show_list_drinks();
        this.show_list_foods();
        $(".food").show();
        $(".drink").hide();
        $('#edit-infor').hide();
        $("#owl-demo").owlCarousel({
            slideSpeed : 300,
            paginationSpeed : 400,

            items : 1, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
            loop:true,
            autoplay: true,
            autoPlaySpeed: 5000,
            autoPlayTimeout: 5000,
            autoplayHoverPause: true
        });
        $("#list-foods").owlCarousel({
            slideSpeed : 300,
            items : 6, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
            loop:true,
            autoplay: true,
            autoPlaySpeed: 5000,
            autoPlayTimeout: 5000,
            autoplayHoverPause: true
        });
        $("#list-drinks").owlCarousel({
            slideSpeed : 300,
            items : 6, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
            loop:true,
            autoplay: true,
            autoPlaySpeed: 5000,
            autoPlayTimeout: 5000,
            autoplayHoverPause: true
        });
        $('#edit-infor-user').hide();
        this.show_food_new();
        this.show_drink_new();
        this.show_food_hot();
        this.show_drink_hot();
    },
    methods: {
        show_infor: function(){
           $('#show_infor').modal('show');
        },
        getdrink: function(){
            $('.food').hide();
            $('.drink').show();
        },
        getfood: function(){
            $('.food').show();
            $('.drink').hide();
        },
        edit_user:function(){
            $('.content').hide();
            $('#edit-infor-user').show();
        },
        show_product:function(item){
            $('#show_product').modal('show');
            this.product = item;
            console.log(item);
        },
        show_food_new: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/food_news',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data);
                console.log(response.data)
            });
        },
        show_drink_new: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/drink_news',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'drinks', response.data);
                console.log(response.data)
            });
        },
        show_food_hot: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/food_hots',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'food_hots', response.data);
                console.log(response.data)
            });
        },
        show_drink_hot: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/drink_hots',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'drink_hots', response.data);
                console.log(response.data)
            });
        },
        show_list_drinks: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/drinks',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'list_drinks', response.data);
                console.log(response.data)
            });
        },
        show_list_foods: function(){
             var authOptions = {
                method: 'get',
                url: '/api/v1/foods',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'list_foods', response.data);
                console.log(response.data)
            });
        },
        createItem_food:function(){

        }

    }

})
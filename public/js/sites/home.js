new Vue ({
    el: '#home',
    data: {
    },
    mounted: function(){
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
        $("#food-new-slide").owlCarousel({
            slideSpeed : 300,
            paginationSpeed : 400,

            items : 4, 
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
        });
        $('#edit-infor-user').hide();
    },
    methods: {
        show_infor: function(){
           $('#info').modal('show');
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
        }
    }

})
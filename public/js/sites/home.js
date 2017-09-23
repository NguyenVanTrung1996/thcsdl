new Vue ({
  el: '#home',
  data: {
  },
  mounted: function(){
        $(".food").show();
        $(".drink").hide();
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
    },
  methods: {
      getdrink:function(){
       $('.food').hide();
       $('.drink').show();
      },
       getfood:function(){
       $('.food').show();
       $('.drink').hide();
      }
    }

})
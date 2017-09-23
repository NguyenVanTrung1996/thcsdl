new Vue ({
  el: '#form_login_signin',
  data: {
    message : "hihi",
  },
  mounted: function(){
        $('#dangky').hide();
        $('#header_dangnhap').hide();
    },
  methods: {
    dangky_function: function(){
        $('#dangky').show();
        $('#dangnhap').hide();
        $('#header_dangnhap').show();
        $('#header_dangky').hide();
    },
    dangnhap_function: function(){
        $('#dangky').hide();
        $('#dangnhap').show();
        $('#header_dangnhap').hide();
        $('#header_dangky').show();
    },
    }

})
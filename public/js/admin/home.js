new Vue ({
	el: '#admin1',
	data: {
		customers:[],
		foods:[],
		drinks:[],
		delete_user_item: {'id':'','name':'',},
		delete_food_item: {'id':'','name':'',},
		delete_drink_item: {'id':'','name':'',},
	},
	mounted: function(){
		$('#dashboard').show();
		$('#foods').hide();
		$('#users').hide();
		$('#drinks').hide();
		$('#oders').hide();
		this.show_customer();
		this.show_list_food();
		this.show_list_drink();
	},
	methods: {
		
		show_customer : function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/customers',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'customers', response.data);
                // console.log(response);
            });
		},
		show_list_food : function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/foods',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data);
            });
		},
		show_list_drink : function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/drinks',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'drinks', response.data);
            });
		},
		show_users:function(){
			$('#dashboard').hide();
			$('#foods').hide();
			$('#users').show();
			$('#drinks').hide();
			$('#oders').hide();
		},
		show_foods:function(){
			$('#dashboard').hide();
			$('#foods').show();
			$('#users').hide();
			$('#drinks').hide();
			$('#oders').hide();
		},
		show_drinks:function(){
			$('#dashboard').hide();
			$('#foods').hide();
			$('#users').hide();
			$('#drinks').show();
			$('#oders').hide();
		},
		dashboard:function(){
			$('#dashboard').show();
			$('#foods').hide();
			$('#users').hide();
			$('#drinks').hide();
			$('#oders').hide();
		},
		oders:function(){
			$('#dashboard').hide();
			$('#foods').hide();
			$('#users').hide();
			$('#drinks').hide();
			$('#oders').show();
		},
		confirm_edit_user:function() {
			$('#confirm_edit_user').modal('show');
		},
		confirm_delete_user:function(item){
			$('#confirm_delete_user').modal('show');
			this.delete_user_item= item;
		},
		confirm_edit_food:function() {
			$('#confirm_edit_food').modal('show');
		},
		confirm_delete_food:function(item){
			$('#confirm_delete_food').modal('show');
			this.delete_food_item = item;
		},
		confirm_edit_drink:function() {
			$('#confirm_edit_drink').modal('show');
		},
		confirm_delete_drink:function(item){
			$('#confirm_delete_drink').modal('show');
			this.delete_drink_item = item;
		},
		show_create_new_user:function(){
			$('#show_create_new_user').modal('show');
		},
		create_new_food:function(){
			$('#create_new_food').modal('show');
		},
		create_new_drink:function(){
			$('#create_new_drink').modal('show');
		},
		create_new_order:function(){
			$('#create_new_order').modal('show');
		},
		show_oder_detail:function() {
			$('#show_oder_detail').modal('show');
		},
		delete_user:function(id){
			var authOptions = {
                method: 'get',
                url: '/api/v1/delete_customer/'+ id,
                json: true,
            }
            axios(authOptions).then(response => {
            	toastr.success('Delete user success', 'Success', {timeOut: 20});
            }).catch((error) => {
                    toastr.error('Delete user error', 'Error', {timeOut: 20});
            });
            this.show_customer();
		},
		delete_food:function(id){
			var authOptions = {
                method: 'get',
                url: '/api/v1/delete_food/'+ id,
                json: true,
            }
            axios(authOptions).then(response => {
            	toastr.success('Delete food success', 'Success', {timeOut: 100});
            }).catch((error) => {
                    toastr.error('Delete food error', 'Error', {timeOut: 100});
            });
            this.show_list_food();
		},
		delete_drink:function(id){
			var authOptions = {
                method: 'get',
                url: '/api/v1/delete_drink/'+ id,
                json: true,
            }
            axios(authOptions).then(response => {
            	toastr.success('Delete drink success', 'Success', {timeOut: 100});
            }).catch((error) => {
                    toastr.error('Delete drink error', 'Error', {timeOut: 100});
            });
            this.show_list_drink();
		},

	}

})
new Vue ({
	el: '#admin1',
	data: {
	},
	mounted: function(){
		$('#dashboard').show();
		$('#foods').hide();
		$('#users').hide();
		$('#drinks').hide();
		$('#oders').hide();
	},
	methods: {
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
		edit_user:function() {
			$('#edit_user').modal('show');
		},
		delete_user:function(){
			$('#delete_user').modal('show');
		},
		edit_food:function() {
			$('#edit_food').modal('show');
		},
		delete_food:function(){
			$('#delete_food').modal('show');
		},
		edit_drink:function() {
			$('#edit_drink').modal('show');
		},
		delete_drink:function(){
			$('#delete_drink').modal('show');
		},
		create_new_user:function(){
			$('#create_new_user').modal('show');
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
		}

	}

})
$(document).ready(function(){

	
	win = $(window);

	//#Login-form, #login-user, #login-pass
	//login form

	win.on('submit, #login-form', function(e)){
		var user = $('#login-user').val();
		var pass = $('#login-pass').val();
	

	$.ajax({
		url: 'xhr.loggedIn.php';
		data:{
			username: user.
			password: pass
		},
		type: 'post',
		dataType: 'json',
		success: function(response){
			console.log("response data:", response);
			if(response.error){
				showLoginError();
			}else{
				loadApp();
			}
			
		}
	});
		return false;
}

		win.on('click', '#btn-logout', function(){
			$.get('xhr/logout.php', function(){
				loadLanding();
			})
			return false;
		});
});
	$('document').ready(function(){

		
		
       $('#reg_btn').on('click', function(){
			var username = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();

			if (username_state == false || email_state == false) {
				$('#error_msg').text('Fix the errors in the form first');
			}else{
				// proceed with form submission
				$.ajax({
					url: 'register.php',
					type: 'post',
					data: {
						'save' : 1,
						'email' : email,
						'username' : username,
						'password' : password,
					},
					success: function(response){
						alert('user saved');
						$('#username').val('');
						$('#email').val('');
						$('#password').val('');
					}
				});
			}

		});


	});
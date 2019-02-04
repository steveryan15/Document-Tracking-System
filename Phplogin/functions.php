
<?php 

	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	
	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
				$password = md5($password);
				
    

			$query = "SELECT * FROM users WHERE username='$username' AND password= '$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				$dbname=$logged_in_user['username'];
			      $dbpassword=$logged_in_user['password'];
		          $Fullname =$logged_in_user['Fullname'];
				if ($logged_in_user['office'] != 'Admin Office') {

					if ($username == $dbname && $password == $dbpassword) {
	                 $_SESSION['Fullname'] = $Fullname;
	         
           			$_SESSION['password'] = $password;
					  ?>
                      <script> alert('Success! Welcome to <?php echo  $logged_in_user['office'];  ?> <?php echo  $logged_in_user['Fullname'];  ?>...');
                         window.location.href='Home.php?success'; </script>

                    <?php
           			
					}		  
				}

				else if ($logged_in_user['office'] == 'Admin Office') {
                    
					
					if ($username == $dbname && $password == $dbpassword) {
	                 $_SESSION['Fullname'] = $Fullname;
	         
           			$_SESSION['password'] = $password;
                    ?>
                      <script> alert('Success! Welcome to Admin Office <?php echo $logged_in_user['Fullname'];  ?>...');
                         window.location.href='Admin_office/index.php?success'; </script>

                    <?php
           			
					
					}		
				}
				
			}else {
				array_push($errors, "Invalid password or username.");
							}
						}
	}

	

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>

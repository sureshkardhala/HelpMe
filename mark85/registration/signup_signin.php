<?php 
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 

	// REGISTER USER
	if (isset($_POST['signup'])) {
		// receive all input values from the form
		$username = esc($_POST['username']);
		$email = esc($_POST['email']);
		$password_1 = esc($_POST['password_1']);
		$password_2 = esc($_POST['password_2']);
		// setcookie("username", $username, time() + 31536000000);
		
		// $one_way = md5($username);
		// $two_way = crypt($one_way);
		$new_token = md5($email);
		setcookie('ntok', $new_token, time()+ 31536000000);
		
		
		// Ensure that no user is registered twice. 
		// the email and usernames should be unique
		$user_check_query = "SELECT * FROM users WHERE username='$username' 
								OR email='$email' LIMIT 1";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // if user exists
			if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
		}
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password, token, created_at, updated_at) 
					  VALUES('$username', '$email', '$password', '$new_token', now(), now())";
			mysqli_query($conn, $query);
			// setcookie('username', $username, time() + 600);
			// get id of created user
			$reg_user_id = mysqli_insert_id($conn); 

			// put logged in user into session array
			$_SESSION['user'] = getUserById($reg_user_id);
			$_SESSION['user_id'] = $reg_user_id;
			// setcookie("id", $_SESSION['user']['id'], time() + 31536000000);
			// setcookie("name", $_SESSION['user']['username'], time() + 31536000000);

			// if user is admin, redirect to admin area
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				// redirect to admin area
				header('location: ' . BASE_URL . 'registration/dashboard.php');
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				header('location: landing.php');				
				exit(0);
			}
		}
	}
	

	// LOG USER IN
	if (isset($_POST['signin'])) {
		$email = esc($_POST['email']);
		$password = esc($_POST['password']);
		
		// setcookie('tok', $new_token, time()+ 31536000000);
		$new_token = md5($email);
		setcookie('ntok', $new_token, time()+ 31536000000);
		// setcookie("username", $username, time() + 31536000000);
		// setcookie("password", $password, time() + 31536000000);

		if (empty($errors)) {
			$password = md5($password); // encrypt password
			$sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";

			
			  
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id']; 

				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id); 
				$_SESSION['user_id'] = $reg_user_id;
				// setcookie("id", $_SESSION['user_id'], time() + 31536000000);


				// setcookie('id', $user_id, time() + $lifetime);
				// setcookie('$username', $username, time() + $lifetime);
				// setcookie('password', $password, time() + $lifetime);

				// if user is admin, redirect to admin area
				if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
					$_SESSION['message'] = "You are now logged in";
					// redirect to admin area
					header('location: ' . BASE_URL . 'registration/dashboard.php');
					exit(0);
				} else {
					$_SESSION['message'] = "You are now logged in";
					// redirect to public area
					header('location: index.php');				
					exit(0);
				}
			} else {
				// array_push($errors, 'Wrong credentials');
				array_push($errors,'<script>alert("Wrong Username / Password");</script>');
			}
		}
	}
	// escape value from form
	function esc(String $value)
	{	
		// bring the global db connect object into function
		global $conn;

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($conn, $value);

		return $val;
	}
	// Get user info from user id
	function getUserById($id)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		// returns user in an array format: 
		// ['id'=>1 'username' => 'Awa', 'email'=>'a@a.com', 'password'=> 'mypass']
		return $user; 
	}

?>



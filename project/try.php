<?php require_once("includes/functions.php"); ?>
<?php



// 1. Create a database connection
$connection = mysql_connect('localhost','root','');
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$dbselect = mysql_select_db('user',$connection);
if (!$dbselect) {
	die("Database selection failed: " . mysql_error());
}
?>

<?php

		

		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = md5($password);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];


$query = "INSERT INTO user (
							username, hashed_password, firstname, lastname, email, age, gender, country
						) VALUES (
							'{$username}', '{$hashed_password}', '{$firstname}', '{$lastname}', '{$email}', '{$age}', '{$gender}', '{$country}'
						)";
			$result = mysql_query($query, $connection);
			/*if ($result) {
				$message = "The user was successfully created.";
			} else {
				$message = "The user could not be created.";
				
			}*/
			redirect_to("samepagefinal.php");
		
		
?>
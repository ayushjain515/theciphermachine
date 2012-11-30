<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
if (isset($_POST['submit'])) 
{

		$username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		$firstname = trim(mysql_prep($_POST['firstname']));
		$lastname = trim(mysql_prep($_POST['lastname']));
		$email = trim(mysql_prep($_POST['email']));
		$age = trim(mysql_prep($_POST['age']));
		$gender = trim(mysql_prep($_POST['gender']));
		$country = trim(mysql_prep($_POST['country']));


$query = "INSERT INTO user (
							username, hashed_password, firstname, lastname, email, age, gender, country
						) VALUES (
							'{$username}', '{$hashed_password}', '{$firstname}', '{$lastname}', '{$email}', '{$age}', '{$gender}', '{$country}'
						)";
			$result = mysql_query($query, $connection);
			if ($result) {
				$message = "The user was successfully created.";
			} else {
				$message = "The user could not be created.";
				$message .= "<br />" . mysql_error();
			}
		
		
}

else { // Form has not been submitted.
		$username = "";
		$password = "";
	}
?>
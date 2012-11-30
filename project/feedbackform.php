<?php require_once("includes/functions.php"); ?>
<?php



// 1. Create a database connection
$connection = mysql_connect('localhost','root','');
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$dbselect = mysql_select_db('feedback',$connection);
if (!$dbselect) {
	die("Database selection failed: " . mysql_error());
}
?>

<?php

		

		$username = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['c'];
		
	

$query = "INSERT INTO feedback (
							username, email,message
						) VALUES (
							'{$username}', '{$email}', '{$message}'
						)";
			$result1 = mysql_query($query, $connection);
			/*if ($result) {
				$message = "The user was successfully created.";
			} else {
				$message = "The user could not be created.";
				
			}*/
			redirect_to("samepagefinal.php");
		
		
?>
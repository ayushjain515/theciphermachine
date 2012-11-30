<?php require_once("includes/session.php"); ?>
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

if (logged_in()) {
		redirect_to("sliderfinal.php");
	}

	
	
//	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = md5($password);
		//$query = "SELECT hashed_password FROM user WHERE	username= '{$username}'";
		
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT * ";
			$query .= "FROM user ";
			$query .= "WHERE username = '{$username}' ";
			$query .= "AND hashed_password = '{$hashed_password}' ";
			$query .= "LIMIT 1";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			//echo  $username;
			//echo $username;
			//echo $password;
			//echo $hashed_password;
			if (mysql_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysql_fetch_array($result_set);
				$_SESSION['id'] = $found_user['id'];
				$_SESSION['username'] = $found_user['username'];
		//	$_SESSION['q']= "ww";
				redirect_to("sliderfinal.php");
				

			//	$ram==1;
			} else {
			redirect_to("index2.php");
			//alert("Please make sure your caps lock key is off and try again.");
				// username/password combo was not found in the database
				//$message = "Username/password combination incorrect.<br />
			//		$er = "Please make sure your caps lock ky is off ad try again.";
}			


		/*	while($row=mysql_fetch_array($result_set))
			{



    if($row["username"]==$username && $row["hashed_password"]==$hashed_password)
	{
	echo "ffff";
	redirect_to("sliderfinal.php");
	}
	else
	{
	echo"ee";
	redirect_to("index2.php");
	}}
*/
/*
while($row=mysql_fetch_array($result_set))
{
if($row["hashed_password"]== $hashed_password)
	{
	echo "ffff";
	redirect_to("sliderfinal.php");
	}
	else
	{
	echo"ee";
	redirect_to("index2.php");
}	}*/
/*else
{
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			echo "You are now logged out.";
		}
		
		$username = "";
		$password = "";
		}*/
		
		/* if($_SESSION['id']) {

   echo "You are not now logged out.";

}*/
?>


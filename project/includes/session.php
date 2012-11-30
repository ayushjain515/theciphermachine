<?php
	session_start();
	
	function logged_in() {
	
		return isset($_SESSION['id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
		$ee==1;
			redirect_to("samepagefinal.php");
		}
	}
	function whattoshow() {
		if (!logged_in()) {
		//$message="login";
		  echo   '<a href="samepagefinal.php">login</a>' ;
			//redirect_to("sitemap.php");
		}
		else
		{
		//$message="logout";
		 print( '<a href="logout.php">logout</a>' ); 
		}
	}
/*	function whattoshowhome()
	{
	if (!logged_in()) {
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script "type=text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
</script>
<title>Home Page</title>
<link rel="stylesheet" href="css/page1.css" type="text/css" media="all">

<script type="text/javascript">
function submitform()
{
  
    
	
document.loginform.action ="logintry.php";
document.loginform.submit();


  
  
  

  

  
  
  
  }
</script>
		<form  name="loginform" method="post"  >

					<p1>Username </p1>

					<input type="text" class="text" name="username" id="username" autocomplete="off">
				

				

				<p2>Password</p2>

					<input type="password" class="text pass" name="password" id="password" autocomplete="off">
		
				
				<button type="submit" onclick="return submitform();" >Go </button>
				</form>
		}
		else
		{
		//$message="logout";
		 print( '<a href="samepagefinal.php">logout</a>' ); 
		}
	}
	
*/
 
	
	function whattoshowh() {
		if (!logged_in()) {
		//$message="login";
		  //echo   '<a href="samepagefinal.php">login</a>' ;
			//redirect_to("samepagefinal.php");
			$link="samepagefinal.php";
			
		}
		else
		{//redirect_to("samepagefnal.php");
		$link="samepagefnal.php";
		
		//$message="logout";
		// print( '<a href="logout.php">logout</a>' ); 
		}
		
		return $link;
		
	}
?>

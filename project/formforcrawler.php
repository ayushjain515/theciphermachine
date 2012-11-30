<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>


<?php 
function abcd()
	{
	 if(session_start()) {

   echo "You are not now logged out.";

}}?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
<link rel="stylesheet" href="css/crawling_hash_function.css" type="text/css" media="all">

<script type="text/javascript"> 

function searchfield_focus(obj)

{

obj.style.color=""

obj.style.fontStyle=""

if (obj.value=="Search wikipedia.org")

	{

	obj.value=""

	}

}
	
</script>
<script type="text/javascript" src="js/login.js">
	</script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js' type='text/javascript'></script>
</head>

<body id="home" >


<div class="wrap">
	<div class="headerimage"> 
	<img src="images/un.jpg"  >
	</div>
	<div class="notes">
	
  <ul> 
    <li>
      
	  <a href="<?php $link12 = whattoshowh(); echo $link12?>">
<img src="images/home.png"/>
        <h2>HOME</h2>
      </a>    </li>
    <li>
      <a href="http://ciphermachine.wordpress.com/">
	  <img src="images/blog3.jpg"/>
        <h2>BLOG</h2>
      </a>    </li>
    <li>
      <a href="videos.php">
	    <img src="images/movie_folder.png" class="image"/>
        <h2>VIDEOS</h2>
      </a>    </li>
    <li>
      <a href="#">
	  <img src="images/hindi1.jpg" class="image" />
        <h2>HINDI</h2>
      </a>    </li>
    <li>
      <a href="aboutus.php">
	   <img src="images/aboutus1.jpg" class="image"/>
        <h2>ABOUT US</h2>
      </a>    </li>
    
	<li>
      <a href="index2.php">
	   <img src="images/signup1.jpg" class="image"/>
        <h2>JOIN</h2>
      </a>    </li>
  </ul>
	
	</div>
<div class="login">
<!--<p3> you have logged in suessfully with username <?php echo $_SESSION['username']; ?> welcome to the CIPHERMACHINE!!!  </p3>
<h1><font size="+1">One may use the site free but to access study material you have to login.</font> </h1>-->
<?php whattoshow();
  
 
 ?>
<!--
 
<form  name="loginform" method="post"  >
			

			

					<p1>Email address </p1>

					<input type="text" class="text" name="username" id="username" autocomplete="off">
				

				

				<p2>Password</p2>

					<input type="password" class="text pass" name="password" id="password" autocomplete="off">
		
				<button type="submit" onclick="return submitform();" >Go </button>
				</form>

		

				-->
  </div>	
			
<div class="search">

<form method="get" action="http://en.wikipedia.org/wiki/search">
<button type="submit">search</button>
		

					<input   onfocus="searchfield_focus(this)" type="text" name="search" class="searchinput"  value="Search wikipedia.org">
	</form>
</div>

<div class="quicklinks">
<h1> QUICK LINKS </h1
><ul>
<li>
<a href="cipher1.php"> <p1> CAESER SHIFT </p1>
</a>
</li>
<li>
<a href="cipher2.php"> <p1> TRANS CIPHER </p1>
</a>
</li>
<li>
<a href="quotes_crawling.php"> <p1> CRYPTO QOUTE </p1>
</a>
</li>
<li>
<a href="implementingcrawler.php"> <p1> ARCHIVE </p1>
</a>
</li>
<li>
<a href="page5.html"> <p1> QUIZZES </p1>
</a>
</li>
<li>
<a href="sitemap.php"> <p1> SITEMAP </p1>
</a>
</li>
<li>
<a href="faq.php"> <p1> FAQs </p1>
</a>
</li>
<li>
<a href="formforcrawler.php"> <p1> HASH FUNCTION </p1>
</a>
</li>
</ul> 
</div>

<div class="content">
<h1> <b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Hash Functions </b></h1>
<form action="crawling_hash_function.php" method="post">
<br />
<br />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get Hash function for your input text
</p>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="hashfunction" />
</p>
<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"/>
</form>
</div>

<div id="side-bar">
                <div id="box">
                    <div align="center">
                    <script src='http://connect.facebook.net/en_US/all.js#xfbml=1'></script>
                    <fb:like href='http://basiccodes.kunals.com' send='true' layout='box_count' show_faces='true' font=''></fb:like>
                    </div>

                    <div class="tweet">
                        <script src='http://platform.twitter.com/widgets.js' type='text/javascript'></script>
                            <a href='http://twitter.com/share' class='twitter-share-button'
data-url='http://
basiccodes.kunals.com
'
                            data-via='Basic Codes'
data-text='Basic Codes'
                            data-related='codes'
                            data-count='vertical'>Tweet</a>
                    </div>
 
                    <div class="n"><script src="http://www.stumbleupon.com/hostedbadge.php?s=5"></script></div>
 
                </div>
  </div>
 <div class="count">
<script type="text/javascript" language="JavaScript">
         visit();
      </script>
</div>



<div class= "footer" align="center">
<div class="footercontent" align="center">
<p class="copyright" align="center"> <br/>A product of <a href="<?php $link12 = whattoshowh(); echo $link12?>">The Cipher Machine.</a> No Cipher was broken in process of making this website. </p>
<br />
<ul> 
<li><h4>The Cipher Machine</h4></li>  
<li><a href="<?php $link12 = whattoshowh(); echo $link12?>">Home</a></li>  
<li><a href="videos.php">Videos</a></li> 
<li><a href="#">Hindi</a></li> 
<li><a href="faq.php">FAQs</a></li> 
<li><a href="aboutus.php">About Us</a></li> 
</ul> 
 
<ul> 
<li><h4>Learn And Connect</h4></li> 
<li><a href="http://ciphermachine.wordpress.com/">Blog</a></li> 
<li><a href="#">Forum</a></li> 
<li><a href="feedback.php">Feedback</a></li> 
<li><a href="sitemap.php">Site Map</a></li> 
<li><a href="contactus.php">Contact Us</a></li> 
</ul> 
 
<ul> 
<li><h4>Related Links</h4></li> 
<li><a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/6-875-cryptography-and-cryptanalysis-spring-2005/index.htm">MIT open course ware</a></li> 
<li><a href=" http://science.howstuffworks.com/code-breaker.htm">How Stuff Works</a></li> 
<li><a href=" http://www.wisdom.weizmann.ac.il/~albi/cryptanalysis/" >Wisdom Wiezman</a></li> 
<li><a href=" http://www.garykessler.net/library/crypto.html">Garry Kesler</a></li> 
<li><a href=" http://cryptanalysis.eu/blog/"> Cryptoblog</a></li> 
</ul> 
</div>
<p><br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
<h3> <a href="#"> <img src="images/facebook-icon.png" alt="facebook" /></a> <a href="#"><img src="images/twitter-icon.png" alt="Twitter" /></a> <a href="#"><img src="images/youtube-icon.png" alt="Youtube" /> </a> </h3>
</p>

</div>

</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once("includes/session.php"); ?>
	<?php require_once("includes/functions.php"); ?>
	<?php confirm_logged_in(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
	
<title>Home Page</title>
<link rel="stylesheet" href="css/slide.css" type="text/css" media="all">
<script type="text/javascript"> 

function searchfield_focus(obj)

{

obj.style.color=""

obj.style.fontStyle=""

if (obj.value=="Search wikipedia.org" || obj.value=="data" || obj.value=="shift")

	{

	obj.value=""

	}

}
	
</script>
<script type="text/javascript" src="js/cipher1.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/loading.gif',
				
				pause: 2500,
				hoverPause: true,
			});
		});
	</script>

<script type="text/javascript">
function getcookie(c_name){
var i,x,y,ARRcookies=document.cookie.split(":");
for(i=0;i<ARRcookies.length;i++){
x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
x=x.replace(/^\s+l\s+$/g,"");
if(x==c_name){
return unescape(y);
}
}
}

function setCookie(c_name,value,exdays){
var exdate=new Date();
exdate.setDate(exdate.getDate()+exdays);
var c_value=escape(value) + ((exdays==null) ? "": ";
expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

function checkCookie(){
var username=getCookie("username");
if (username!=null && username!=""){
alert("Welcome" + username);
}
else{
username=prompt("Enter your name","");
if(username!=null && username!=""){
setCookie("username", username,365);
}
}
}
</script>

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


</head>

<body id="home">


<div class="wrap">
	<div class="headerimage"> 
	<img src="images/un.jpg"  >
	</div>
	<div class="notes">
	
  <ul> 
    <li>
      <a href="samepagefnal.php">
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

			

			<!--

					<p1>Email address </p1>

					<input type="text" class="text" name="username" id="username" autocomplete="off">
				

				

				<p2>Password</p2>

					<input type="password" class="text pass" name="password" id="password" autocomplete="off">
		
				<button type="submit" onClick="passwordmatch()" >Go </button> 
				
				--> 
				<p1> you have logged in suessfully with username <?php echo $_SESSION['username']; ?> welcome to the CIPHERMACHINE!!!  </p1>

 


<a href="logout.php" class="ss">Logout</a>
				

						
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
<div id="container">

			
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
					<h1> WELCOME!!!! </h1>
					
						
				  </div>
					<div class="slide">
						<h1> CAESER CIPHER </h1>
				  </div>
					<div class="slide">
					<h3> ALGO </h3>
						<p2> The algorithm of Caesar shift was first used by Julius Caesar for encrypting the messages he used to send. It is the oldest among all other historical ciphers. The encryption is basically about shifting each character of the string by three towards right. 
It has been implemented through java script. The string of characters is entered by the user, and then it is converted and stored in an array which constitutes of their corresponding ASCII values shifted by three. Then again this array is converted back to an array of strings, which is the required encrypted cipher.
</p2>
						
					</div>
					<div class="slide">
					<h4> IMAGES </h4>
					<p4> All The Letters Are Shiffted By 3 Alphabtets </p4>
						
						<img src="images/caesar.png" id="ceaser2"/>	
						 </div>
					<div class="slide">
					<h5> VIDEO LEARNING </h5>
						<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/zSgiXGELjbc&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
						
					</div>
					<div class="slide">
					<h5> APPLICATION </h5>
						

					<p5>Enter text here</p5>
					
 <input type="text" name="FirstName" value="data"  id= "ayush" class="cipher1data" onfocus="searchfield_focus(this)" /><br />
 <p2>Enter shift here</p2>
					
 <input type="text" name="shift" value="shift"  id= "key" class="cipherkey" onfocus="searchfield_focus(this)"/><br />

<input type="submit"  onclick= ff() value="Submit" class="result" id="result" />

<p3> Output </p3>

<textarea id="c" name="c"  class="encryptresult"></textarea>
					</div>
					<div class="slide">
						<h6> NEXT COMING TOPICS </h6>
						<ul>
						<li> Transpostion Cipher </li>
						<li> Vigenere Cipher </li>
						<li> Hill Cipher </li>
						<li> One Time Pad </li>
						<li> Afire Cipher </li>
						<li> Shannon Theorm </li>
						<li> Hash Functions </li>
						<li> Signature Scheme </li>
						</ul>
						
					</div>
					
				</div>
				<a href="#" class="prev"><img src="images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>			</div>
		<img src="images/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">		
</div>
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
<p class="copyright" align="center"> <br/>A product of <a href="samepagefnal.html" target="_blank">The Cipher Machine.</a> No Cipher was broken in process of making this website. </p>
<br />
<ul> 
<li><h4>The Cipher Machine</h4></li>  
<li><a href="samepagefnal.php">Home</a></li> 
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

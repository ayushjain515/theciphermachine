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
      <a href="samepagefnalhindi.php">
<img src="images/home.png"/>
        <h2>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</h2>
      </a>    </li>
    <li>
      <a href="http://ciphermachine.wordpress.com/">
	  <img src="images/blog3.jpg"/>
        <h2>&#2348;&#2381;&#2354;&#2379;&#2327;&#2381;</h2>
      </a>    </li>
    <li>
      <a href="videos.php">
	    <img src="images/movie_folder.png" class="image"/>
        <h2>&#2357;&#2367;&#2337;&#2375;&#2323;
</h2>
      </a>    </li>
    <li>
      <a href="sliderfinal.php">
	  <img src="images/E.jpg" class="image" />
        <h2>ENGLISH</h2>
      </a>    </li>
    <li>
      <a href="aboutushindi.php">
	   <img src="images/aboutus1.jpg" class="image"/>
        <h2>&#2361;&#2350;&#2366;&#2352;&#2375;  &#2348;&#2366;&#2352;&#2375; &#2350;&#2375;</h2>
      </a>    </li>
    
	<li>
      <a href="index2.php">
	   <img src="images/signup1.jpg" class="image"/>
        <h2>&#2332;&#2369;&#2337;&#2375;</h2>
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
				<p1> &#2310;&#2346;&#2381; &#2354;&#2379;&#2327;&#2367;&#2344;&#2381; &#2325;&#2352;&#2381; &#2330;&#2369;&#2325;&#2375; &#2361;&#2376; &#2346;&#2381;&#2352;&#2351;&#2379;&#2325;&#2381;&#2340; &#2325;&#2366; &#2344;&#2366;&#2350;&#2381;  <?php echo $_SESSION['username']; ?> &#2310;&#2346;&#2381; &#2325;&#2366; &#2360;&#2381;&#2357;&#2366;&#2327;&#2340;&#2381; &#2361;&#2376;   </p1>

 


<a href="logout.php" class="ss">Logout</a>
				

						
  </div>	
		
			
<div class="search">

<form method="get" action="http://en.wikipedia.org/wiki/search">
<button type="submit">search</button>
		

					<input   onfocus="searchfield_focus(this)" type="text" name="search" class="searchinput"  value="Search wikipedia.org">
	</form>
</div>

<div class="quicklinks">
<h1> &#2354;&#2367;&#2344;&#2381;&#2325;&#2381;&#2360;&#2381; </h1
><ul>
<li>
<a href="cipher1hindi.php"> <p1> &#2360;&#2367;&#2332;&#2352; &#2358;&#2367;&#2398;&#2381;&#2335;&#2381; </p1>
</a>
</li>
<li>
<a href="cipher2hindi.php"> <p1>   &#2335;&#2381;&#2352;&#2366;&#2344;&#2381;&#2360;&#2381; &#2360;&#2366;&#2351;&#2347;&#2352; </p1>
</a>
</li>
<li>
<a href="quoted_crawlinghindi.php"> <p1> &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379; &#2348;&#2379;&#2354;&#2368; </p1>
</a>
</li>
<li>
<a href="implementingcrawlerhindi.php"> <p1> &#2346;&#2369;&#2352;&#2366;&#2354;&#2375;&#2326;</p1>
</a>
</li>
<li>
<a href="page5.html"> <p1>&#2346;&#2381;&#2352;&#2358;&#2344;&#2379;&#2340;&#2352;&#2367; </p1>
</a>
</li>
<li>
<a href="sitemaphindi.php"> <p1> &#2350;&#2366;&#2327;&#2373;&#0032;&#2342;&#2358;&#2373;&#2325;</p1>
</a>
</li>
<li>
<a href="faqhindi.php"> <p1> &#2360;&#2357;&#2366;&#2354;&#2381; </p1>
</a>
</li>
<li>
<a href="contacthindi.php"> <p1> &#2360;&#2350;&#2381;&#2346;&#2352;&#2381;&#2325;&#2381; </p1>
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
<p class="copyright" align="center"> <br/>A product of <a href="samepagefnal.html" target="_blank">&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;.</a> &#2311;&#2360;&#2381; &#2357;&#2375;&#2348;&#2381;&#2360;&#2366;&#2311;&#2335;&#2381; &#2325;&#2379; &#2348;&#2344;&#2344;&#2375; &#2350;&#2375;&#2325;&#2379;&#2311; &#2349;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352;&#2344;&#2361;&#2367; &#2335;&#2379;&#2337;&#2366; &#2361;&#2376; </p>
<br />
<ul> 
<li><h4>&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;</h4></li>  
<li><a href="samepagefnal.php">&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</a></li> 
<li><a href="videos.php">&#2357;&#2367;&#2337;&#2375;&#2323;</a></li> 
<li><a href="#">Hindi</a></li> 
<li><a href="faq.php">&#2360;&#2357;&#2366;&#2354;&#2381;</a></li> 
<li><a href="aboutus.php">&#2361;&#2350;&#2366;&#2352;&#2375;  &#2348;&#2366;&#2352;&#2375; &#2350;&#2375;</a></li> 
</ul> 
 
<ul> 
<li><h4>&#2360;&#2367;&#2326;&#2375; &#2324;&#2352;&#2381; &#2332;&#2369;&#2337;&#2375;</h4></li> 
<li><a href="http://ciphermachine.wordpress.com/">&#2348;&#2381;&#2354;&#2379;&#2327;&#2381;</a></li> 
<li><a href="#">&#2398;&#2379;&#2352;&#2350;&#2381;</a></li> 
<li><a href="feedback.php">&#2346;&#2381;&#2352;&#2340;&#2367;&#2325;&#2367;&#2352;&#2367;&#2351;&#2366;</a></li> 
<li><a href="sitemap.php">&#2350;&#2366;&#2327;&#2373;&#0032;&#2342;&#2358;&#2373;&#2325;</a></li> 
<li><a href="contact.php">&#2360;&#2350;&#2381;&#2346;&#2352;&#2381;&#2325;&#2381;</a></li> 
</ul> 
 
<ul> 
<li><h4>&#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2342;&#2367;&#2340;&#2381; &#2354;&#2367;&#2344;&#2381;&#2325;&#2381;&#2360;&#2381;</h4></li> 
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
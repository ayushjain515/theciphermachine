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
<title>SITE MAP</title>
<link rel="stylesheet" href="css/sitemap.css" type="text/css" media="all">
<script type="text/javascript" src="http://www.google.com/jsapi">
    </script>
    <script type="text/javascript">

    google.load("language", "1");

    function initialize() {
      var text = document.getElementById("home").innerHTML;
      google.language.detect(text, function(result) {
        if (!result.error && result.language) {
          google.language.translate(text, "en", "hi",
                                    function(result) {
            var translated = document.getElementById("home");
            if (result.translation) {
              translated.innerHTML = result.translation;
            }
          });
        }
      });
    }
	</script>

 
<script type="text/javascript">
function submitform()
{
  
    
	
document.loginform.action ="logintry.php";
document.loginform.submit();


  
  
  

  

  
  
  
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
        <h2>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381; </h2>
      </a>    </li>
    <li>
      <a href="http://ciphermachine.wordpress.com/">
	  <img src="images/blog3.jpg"/>
        <h2>&#2348;&#2381;&#2354;&#2379;&#2327;&#2381;</h2>
      </a>    </li>
    <li>
      <a href="videos.php">
	    <img src="images/movie_folder.png" class="image"/>
        <h2>&#2357;&#2367;&#2337;&#2375;&#2323;</h2>
      </a>    </li>
    <li>
      <a href="hindi.php">
	  <img src="images/E.jpg" class="image"  />
        <h2>ENGLISH</h2>
		</a>
          </li>
    <li>
      <a href="aboutus.php">
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
<button type="submit">&#2326;&#2379;&#2332;&#2375;</button>
		

					<input   onfocus="searchfield_focus(this)" type="text" name="search" class="searchinput"  value="Search wikipedia.org">
	</form>
</div>

<div class="quicklinks">
<h1> &#2354;&#2367;&#2344;&#2381;&#2325;&#2381;&#2360;&#2381; </h1
><ul>
<li>
<a href="cipher1.php"> <p1> &#2360;&#2367;&#2332;&#2352; &#2358;&#2367;&#2398;&#2381;&#2335;&#2381; </p1>
</a>
</li>
<li>
<a href="cipher2.php"> <p1>   &#2335;&#2381;&#2352;&#2366;&#2344;&#2381;&#2360;&#2381; &#2360;&#2366;&#2351;&#2347;&#2352; </p1>
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
<a href="sitemap.php"> <p1> &#2350;&#2366;&#2327;&#2373;&#0032;&#2342;&#2358;&#2373;&#2325;</p1>
</a>
</li>
<li>
<a href="faq.php"> <p1> &#2360;&#2357;&#2366;&#2354;&#2381; </p1>
</a>
</li>
<li>
<a href="contact.php"> <p1> &#2360;&#2350;&#2381;&#2346;&#2352;&#2381;&#2325;&#2381; </p1>
</a>
</li>
</ul> 
</div>
<div class="content">
<header> &#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</header>
<ul>
<li>
  <a href="<?php $link12 = whattoshowh(); echo $link12?>">&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</a>
</li>
<li>
 <a href="blog.html" target="_blank">blog</a>-Blog Of Site.
</li>
<li>
 <a href="videos.html" target="_blank">videos</a>-Videos Related To  Cryptography.
</li>
<li>
 <a href="hindi.html" target="_blank">hindi version</a>-Hindi Version Of Site.
</li>
<li>
 <a href="aboutus.php" target="_blank">about us</a>-About Website And Creaters.
</li>
<li>
 <a href="index2.php" target="_blank">sign up</a>-Access The Material.
</li>
</ul>
<!--<div class="header"> <a href="home.html" target="_blank">HOME</a> -home</div>-->
<div class= "sitemapql">
<header> QUICK LINKS </header>
<ul>

<li>
 <a href="cipher1.php" target="_blank">ceaser cipher</a>-Ceaser Cipher.
</li>
<li>
 <a href="cipher2.php" target="_blank">trans cipher</a>-TransCipher.
</li>
<li>
 <a href="cipher3.html" target="_blank">cipher </a>- Cipher.
</li>
<li>
 <a href="hashfunction.html" target="_blank">hash function</a>-Hash Function .
</li>
<li>
 <a href="sitemap.php" target="_blank">site map</a>-Map Of The Site.
</li>
<li>
 <a href="faq.php" target="_blank">faqs</a>-Frequently Asked Questions.
</li>
<li>
 <a href="contect.php" target="_blank">contact us</a>-Any Querry Tell Us.
</li>

</ul>
</div>
<div class= "sitemapfoot3">
<header> RELATED LINKS</header>
<ul>

<li>
 <a href="cipher1.php" target="_blank">cipher addeddd</a>-Abcgdhh Cipher.</li>
<li>
 <a href="cipher2.php" target="_blank">cipher adedfdd</a>-Abcgdhh Cipher.</li>
<li>
 <a href="cipher3.html" target="_blank">cipher abcdef</a>-Abcgdhh Cipher.</li>
<li>
 <a href="hashfunction.html" target="_blank">hash function</a>-Hash Function .</li>
<li>
 <a href="sitemap.php" target="_blank">site map</a>-Map Of The Site.</li>
</ul>
</div>
<div class= "sitemapfoot1">
<header> ASJRHGURGJRGU</header>
<ul>

<li>
 <a href="cipher1.html" target="_blank">cipher addeddd</a>-Abcgdhh Cipher.</li>
<li>
 <a href="cipher2.html" target="_blank">cipher adedfdd</a>-Abcgdhh Cipher.</li>
<li>
 <a href="cipher3.html" target="_blank">cipher abcdef</a>-Abcgdhh Cipher.</li>
<li>
 <a href="hashfunction.html" target="_blank">hash function</a>-Hash Function .</li>
<li>
 <a href="sitemap.html" target="_blank">site map</a>-Map Of The Site.</li>
</ul>
</div>
<div class="theciphermachine">
<header> THE CIPHER MACHINE HOME </header>
<ul>
<li>
 <a href="blog.html" target="_blank">blog</a>-Blog Of Site.
</li>
<li>
 <a href="videos.html" target="_blank">videos</a>-Videos Related To  Cryptography.
</li>
<li>
 <a href="hindi.html" target="_blank">hindi version</a>-Hindi Version Of Site.
</li>
<li>
 <a href="aboutus.html" target="_blank">about us</a>-About Website And Creaters.
</li>
<li>
 <a href="signup.html" target="_blank">sign up</a>-Access The Material.
</li>
</ul>
</div>
<div class="ciphermachinefoot">
<header> THE CIPHER MACHINE </header>
<ul>

<li>
 <a href="cipher1.html" target="_blank">The Cipher Machine</a>-Relode The Website.</li>
</ul>
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
<p class="copyright" align="center"> <br/>A product of <a href="<?php $link12 = whattoshowh(); echo $link12?>">&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;.</a> &#2311;&#2360;&#2381; &#2357;&#2375;&#2348;&#2381;&#2360;&#2366;&#2311;&#2335;&#2381; &#2325;&#2379; &#2348;&#2344;&#2344;&#2375; &#2350;&#2375;&#2325;&#2379;&#2311; &#2349;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352;&#2344;&#2361;&#2367; &#2335;&#2379;&#2337;&#2366; &#2361;&#2376; </p>
<br />
<ul> 
<li><h4>&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;</h4></li>  
<li><a href="<?php $link12 = whattoshowh(); echo $link12?>">&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</a></li>  
<li><a href="videos.php">&#2357;&#2367;&#2337;&#2375;&#2323;</a></li> 
<li><a href="#">&#2361;&#2367;&#2344;&#2381;&#2342;&#2367;</a></li> 
<li><a href="faq.php">&#2360;&#2357;&#2366;&#2354;&#2381;</a></li> 
<li><a href="aboutus.php">&#2361;&#2350;&#2366;&#2352;&#2375;  &#2348;&#2366;&#2352;&#2375; &#2350;&#2375;
</a></li> 
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

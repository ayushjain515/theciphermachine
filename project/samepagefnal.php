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
<script type="text/javascript" src="js/try.js">
	</script>
	<script type="text/javascript" src="js/pagecount.js">
	</script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js' type='text/javascript'></script>
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

			
			  
<a href="logout.php" class="ss">Logout</a>				

			<!--	<a href="/forgot-password/">Forgot Password?</a>		-->
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
<div class="para1" >
<img src="images\dialog_question.png" />
<div id="gg" >

<p1><b> The art and science of using mathematics to secure information and create a high degree of trust in the electronic realm.Cryptography is now-a-days a really emerging field and is finding practical application</b>
<span onclick="para1()"> more </span>  </p1>
</div>


<a href="samepagefnal.php"><img src="images\back.jpg" style=" display:none;" class="dd" id="dd"/></a>
<div id="fg" style="display:none";>
<p1>The art and science of using mathematics to secure information and create a high degree of trust in the electronic realm. Cryptography is now-a-days a really emerging field and is finding practical application in the areas of network security and evolving encryption techniques used by various websites for their login. The study of cryptography is divided into two main parts. One is historical cryptography which includes various ciphers and techniques of ancient times, used and invented by famous historians and other renowned people. The other one is modern day cryptography which includes public key cryptography, cryptographs, digital rights management, RSA techniques and other such areas.</p1>
</div>

</div>
<div class="para2">
<img src="images\development_tools.png"  />
<div id="p2">
<p2> <b>The science of learning is outdated; it has now changed to e-learning.This is the digital age. We are living in an era where the need of the hour is not to learn</b>
<span onclick="para2()"> more </span>  </p2>
</div>
<div id="d2" style="display:none";>
<a href="samepagefnal.php"><img src="images\back.jpg" /></a>



<p3>The science of learning is outdated; it has now changed to e-learning. This is the digital age. We are living in an era where the need of the hour is not to learn and understand things but to do it fast and in an effective manner. This is where e-learning comes into play. The trend of e-learning is centered around the development of a website where user can study a particular subject without much hassle, in an organized way , through the means of images, video tutorials and other methods which include hash tag based twitter learning and understanding the concepts by discussing it with other people in forums . The e-learning trend is not kept restricted to English language but we will be extending it to hindi language as well. </p3>
</div>
</div>

<div class="para3">
<img src="images\help.png" />
<div id="de">
<p3> <b>The sequence of the cryptography topics to be taught is as follows: Historical ciphers, shannon's secrecy theorm and then follows public key scheme, followed by private key and then</b>
<span onclick="para3()"> more </span>  </p3>
</div>
<div id="dr" style="display:none";>

<a href="samepagefnal.php"><img src="images\back.jpg" /></a>


<p3>The sequence of the cryptography topics to be taught is as follows:
<h>       Historical Ciphers </h>
<ol>
<li>Shifting ciphers</li>
<li> Substitution Cipher</li>
<li> Affine Cipher</li>
<li> Vigenere Cipher</li>
<li> Hill cipher </li>
</ol>
 
<h3>     Shannon’s theory </h3>
<ol>
<li> Statement and brief introduction</li>
<li> Its derivation</li>
<li> Practical applications</li>
</ol>
 
<h4>     Cryptographic hash functions </h4>
<ol>
<li> Various types of existing encryption schemes </li>
<li> Drawbacks </li>
<li> Making one’s own hash function</li>
</ol>
 



</p3>
</div>
</div>
<div class="para4">
<h2> START LEARNING </h2>
<a href="sliderfinal.php"><img src="images\start.jpg" id="abcd"  /></a>
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
<p class="copyright" align="center"> <br/>A product of <a href="samepagefnal.php" target="_blank">The Cipher Machine.</a> No Cipher was broken in process of making this website. </p>
<br />
<ul> 
<li><h4>The Cipher Machine</h4></li>  
<li><a href="samepagefnal.php">Home</a></li> 
<li><a href="videos.html">Videos</a></li> 
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
<li><a href="contact.php">Contact Us</a></li> 
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

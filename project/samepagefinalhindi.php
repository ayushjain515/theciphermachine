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
      <a href="samepagefinalhindi.php">
<img src="images/home.png"/>
        <h2>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;
</h2>
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
      <a href="samepagefinal.php">
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

			
<form  name="loginform" method="post"  >

					<p1>&#2346;&#2381;&#2352;&#2351;&#2379;&#2325;&#2381;&#2340;&#2366; &#2325;&#2366; &#2344;&#2366;&#2350;&#2381; </p1>

					<input type="text" class="text" name="username" id="username" autocomplete="off">
				

				

				<p2>&#2346;&#2366;&#2360;&#2381;&#2357;&#2352;&#2381;&#2337;&#2381;</p2>

					<input type="password" class="text pass" name="password" id="password" autocomplete="off">
		
				
				<button type="submit" onclick="return submitform();" >&#2332;&#2366;&#2351;&#2375; </button>
				</form>
			  
			  
				

			<!--	<a href="/forgot-password/">Forgot Password?</a>		-->
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
<a href="contacthindi.php"> <p1>&#2342;&#2381;&#2352;&#2369;&#2340;&#2366;&#2344;&#2381;&#2357;&#2375;&#2359;&#2339; &#2347;&#2354;&#2344;<br/>
         </p1>
</a>
</li>
</ul> 
</div>
<div class="content">
<div class="para1" >
<img src="images\dialog_question.png" />
<div id="gg" >

<p1><b> &#2350;&#2361;&#2381;&#2340;&#2381;&#2357;&#2346;&#2369;&#2352;&#2381;&#2344;&#2381; &#2332;&#2366;&#2344;&#2325;&#2366;&#2352;&#2367; &#2325;&#2367; &#2360;&#2369;&#2352;&#2325;&#2358;&#2366; &#2324;&#2352;&#2381; &#2319;&#2354;&#2375;&#2325;&#2381;&#2335;&#2381;&#2352;&#2379;&#2311;&#2344;&#2381;&#2325;&#2381; &#2360;&#2366;&#2342;&#2344;&#2379; &#2350;&#2376;&#2344;&#2381; &#2357;&#2381;&#2361;&#2367;&#2360;&#2381;&#2357;&#2366;&#2360;&#2381; &#2346;&#2376;&#2337;&#2366; &#2325;&#2352;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2351;&#2375; &#2327;&#2344;&#2367;&#2340;&#2381; &#2324;&#2352;&#2381; &#2357;&#2367;&#2327;&#2381;&#2351;&#2344;&#2381; &#2325;&#2366; &#2313;&#2346;&#2381;&#2351;&#2379;&#2327;&#2381; &#2325;&#2352;&#2381;&#2344;&#2366; &#2361;&#2367; &#2325;&#2381;&#2352;&#2381;&#2351;&#2381;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2347;&#2367; &#2361;&#2376;&#46; &#2325;&#2381;&#2352;&#2381;&#2351;&#2381;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2346;&#2367; &#2310;&#2332;&#2325;&#2354;&#2381; &#2348;&#2361;&#2370;&#2340;&#2381; &#2346;&#2381;&#2352;&#2360;&#2367;&#2342;&#2381; &#2361;&#2376; &#46;  <br/>
        </b>
<span onclick="para1()"> &#2309;&#2342;&#2367;&#2325;&#2381;  </span>  </p1>
</div>


<a href="samepagefinalhindi.php"><img src="images\back.jpg" style=" display:none;" class="dd" id="dd"/></a>
<div id="fg" style="display:none";>
<p1>&#2357;&#2367;&#2332;&#2381;&#2334;&#2366;&#2344; &#2324;&#2352; &#2327;&#2339;&#2367;&#2340; &#2325;&#2366; &#2313;&#2346;&#2351;&#2379;&#2327; &#2325;&#2352;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2319; &#2332;&#2366;&#2344;&#2325;&#2366;&#2352;&#2368; &#2360;&#2369;&#2352;&#2325;&#2381;&#2359;&#2367;&#2340; &#2324;&#2352; &#2311;&#2354;&#2375;&#2325;&#2381;&#2335;&#2381;&#2352;&#2377;&#2344;&#2367;&#2325; &#2342;&#2366;&#2351;&#2352;&#2375; &#2350;&#2375;&#2306; &#2357;&#2367;&#2358;&#2381;&#2357;&#2366;&#2360; &#2325;&#2366; &#2319;&#2325; &#2313;&#2330;&#2381;&#2330; &#2337;&#2367;&#2327;&#2381;&#2352;&#2368; &#2348;&#2344;&#2366;&#2344;&#2375; &#2325;&#2368; &#2325;&#2354;&#2366;&#46; &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2309;&#2348; &#2319;&#2325; &#2342;&#2367;&#2344; &#2357;&#2366;&#2360;&#2381;&#2340;&#2357; &#2350;&#2375;&#2306; &#2319;&#2325; &#2313;&#2349;&#2352;&#2340;&#2375; &#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352; &#2361;&#2376; &#2324;&#2352; &#2344;&#2375;&#2335;&#2357;&#2352;&#2381;&#2325; &#2360;&#2369;&#2352;&#2325;&#2381;&#2359;&#2366; &#2325;&#2375; &#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2379;&#2306; &#2350;&#2375;&#2306; &#2357;&#2381;&#2351;&#2366;&#2357;&#2361;&#2366;&#2352;&#2367;&#2325; &#2309;&#2344;&#2369;&#2346;&#2381;&#2352;&#2351;&#2379;&#2327; &#2326;&#2379;&#2332;&#2344;&#2375; &#2324;&#2352; &#2319;&#2344;&#2381;&#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2358;&#2344; &#2313;&#2344;&#2325;&#2375; &#2346;&#2381;&#2352;&#2357;&#2375;&#2358; &#2325;&#2375; &#2354;&#2367;&#2319; &#2357;&#2367;&#2349;&#2367;&#2344;&#2381;&#2344; &#2357;&#2375;&#2348;&#2360;&#2366;&#2311;&#2335;&#2379;&#2306; &#2342;&#2381;&#2357;&#2366;&#2352;&#2366; &#2311;&#2360;&#2381;&#2340;&#2375;&#2350;&#2366;&#2354; &#2325;&#2368; &#2340;&#2325;&#2344;&#2368;&#2325; &#2357;&#2367;&#2325;&#2360;&#2367;&#2340;&#46; &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2325;&#2375; &#2309;&#2343;&#2381;&#2351;&#2351;&#2344; &#2325;&#2375; &#2342;&#2379; &#2350;&#2369;&#2326;&#2381;&#2351; &#2349;&#2366;&#2327;&#2379;&#2306; &#2350;&#2375;&#2306; &#2357;&#2367;&#2349;&#2366;&#2332;&#2367;&#2340; &#2361;&#2376;&#46; &#2319;&#2325; &#2320;&#2340;&#2367;&#2361;&#2366;&#2360;&#2367;&#2325; &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2361;&#2376; &#2332;&#2379; &#2357;&#2367;&#2349;&#2367;&#2344;&#2381;&#2344; &#2360;&#2367;&#2347;&#2352; &#2324;&#2352; &#2346;&#2381;&#2352;&#2366;&#2330;&#2368;&#2344; &#2325;&#2366;&#2354;&#44; &#2311;&#2360;&#2381;&#2340;&#2375;&#2350;&#2366;&#2354; &#2325;&#2367;&#2351;&#2366; &#2324;&#2352; &#2346;&#2381;&#2352;&#2360;&#2367;&#2342;&#2381;&#2343; &#2311;&#2340;&#2367;&#2361;&#2366;&#2360;&#2325;&#2366;&#2352;&#2379;&#2306; &#2324;&#2352; &#2309;&#2344;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2367;&#2342;&#2381;&#2343; &#2354;&#2379;&#2327;&#2379;&#2306; &#2342;&#2381;&#2357;&#2366;&#2352;&#2366; &#2310;&#2357;&#2367;&#2359;&#2381;&#2325;&#2366;&#2352; &#2325;&#2368; &#2340;&#2325;&#2344;&#2368;&#2325; &#2349;&#2368; &#2358;&#2366;&#2350;&#2367;&#2354; &#2361;&#2376;&#46; &#2309;&#2344;&#2381;&#2351; &#2319;&#2325; &#2310;&#2343;&#2369;&#2344;&#2367;&#2325; &#2342;&#2367;&#2344; &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2361;&#2376; &#2332;&#2379; &#2360;&#2366;&#2352;&#2381;&#2357;&#2332;&#2344;&#2367;&#2325; &#2325;&#2369;&#2306;&#2332;&#2368; &#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368;&#44; &#99;&#2352;&#2381;&#2351;&#2381;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2347;&#2381;&#2360;&#2381;&#44; &#2337;&#2367;&#2332;&#2367;&#2335;&#2354; &#2309;&#2343;&#2367;&#2325;&#2366;&#2352; &#2346;&#2381;&#2352;&#2348;&#2306;&#2343;&#2344;&#44; &#2310;&#2352;&#2319;&#2360;&#2319; &#2340;&#2325;&#2344;&#2368;&#2325;&#2379;&#2306; &#2324;&#2352; &#2309;&#2344;&#2381;&#2351; &#2320;&#2360;&#2375; &#2325;&#2381;&#2359;&#2375;&#2340;&#2381;&#2352;&#2379;&#2306; &#2350;&#2375;&#2306; &#2358;&#2366;&#2350;&#2367;&#2354; &#2361;&#2376;&#46;</p1>
</div>

</div>
<div class="para2">
<img src="images\development_tools.png"  />
<div id="p2">
<p2> <b>&#2360;&#2368;&#2326;&#2344;&#2375; &#2325;&#2366; &#2357;&#2367;&#2332;&#2381;&#2334;&#2366;&#2344; &#2346;&#2369;&#2352;&#2366;&#2344;&#2368; &#2361;&#2376;&#44; &#2351;&#2361; &#2309;&#2348; &#2312; &#45; &#2354;&#2375;&#2309;&#2352;&#2381;&#2344;&#2367;&#2344;&#2381;&#2327;&#2381;&#46;&#2341;&#2367;&#2360;&#2381; &#2348;&#2342;&#2354; &#2327;&#2351;&#2366; &#2361;&#2376; &#2337;&#2367;&#2332;&#2367;&#2335;&#2354; &#2351;&#2369;&#2327; &#2361;&#2376;&#46; &#2361;&#2350; &#2319;&#2325; &#2351;&#2369;&#2327; &#2350;&#2375;&#2306; &#2352;&#2361; &#2352;&#2361;&#2375; &#2361;&#2376;&#2306; &#2332;&#2361;&#2366;&#2306; &#2360;&#2350;&#2351; &#2325;&#2368; &#2332;&#2352;&#2370;&#2352;&#2340; &#2325;&#2379; &#2332;&#2366;&#2344;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2319; &#2344;&#2361;&#2368;&#2306; &#2361;&#2376;</b>
<span onclick="para2()"> &#2309;&#2342;&#2367;&#2325;&#2381;  </span>  </p2>
</div>
<div id="d2" style="display:none";>
<a href="samepagefinalhindi.php"><img src="images\back.jpg" /></a>



<p3>&#2360;&#2368;&#2326;&#2344;&#2375; &#2325;&#2366; &#2357;&#2367;&#2332;&#2381;&#2334;&#2366;&#2344; &#2346;&#2369;&#2352;&#2366;&#2344;&#2368; &#2361;&#2376;&#44; &#2351;&#2361; &#2309;&#2348; &#2312; &#45; &#2354;&#2352;&#2381;&#2344;&#2367;&#2306;&#2327; &#2325;&#2375; &#2354;&#2367;&#2319; &#2348;&#2342;&#2354; &#2327;&#2351;&#2366; &#2361;&#2376;&#46; &#2311;&#2360; &#2337;&#2367;&#2332;&#2367;&#2335;&#2354; &#2351;&#2369;&#2327; &#2361;&#2376;&#46; &#2361;&#2350; &#2332;&#2361;&#2366;&#2306; &#2360;&#2350;&#2351; &#2325;&#2368; &#2332;&#2352;&#2370;&#2352;&#2340; &#2325;&#2379; &#2332;&#2366;&#2344;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2319; &#2324;&#2352; &#2348;&#2366;&#2340;&#2375;&#2306; &#2360;&#2350;&#2333; &#2344;&#2361;&#2368;&#2306; &#2361;&#2376;&#44; &#2354;&#2375;&#2325;&#2367;&#2344; &#2351;&#2361; &#2340;&#2375;&#2332;&#2368; &#2360;&#2375; &#2324;&#2352; &#2319;&#2325; &#2346;&#2381;&#2352;&#2349;&#2366;&#2357;&#2368; &#2340;&#2352;&#2368;&#2325;&#2375; &#2360;&#2375; &#2319;&#2325; &#2351;&#2369;&#2327; &#2350;&#2375;&#2306; &#2352;&#2361; &#2352;&#2361;&#2375; &#2361;&#2376;&#2306;&#46; &#2351;&#2361; &#2357;&#2361; &#2332;&#2327;&#2361; &#2361;&#2376; &#2332;&#2361;&#2366;&#2305; &#2312; &#45; &#2354;&#2352;&#2381;&#2344;&#2367;&#2306;&#2327; &#2326;&#2375;&#2354;&#2344;&#2375; &#2350;&#2375;&#2306; &#2310;&#2340;&#2366; &#2361;&#2376; &#2361;&#2376;&#46; &#2312; &#45; &#2360;&#2368;&#2326;&#2344;&#2375; &#2325;&#2368; &#2346;&#2381;&#2352;&#2357;&#2371;&#2340;&#2381;&#2340;&#2367; &#2332;&#2361;&#2366;&#2305; &#2313;&#2346;&#2351;&#2379;&#2327;&#2325;&#2352;&#2381;&#2340;&#2366; &#2325;&#2379; &#2348;&#2361;&#2369;&#2340; &#2346;&#2352;&#2375;&#2358;&#2366;&#2344;&#2368; &#2325;&#2375; &#2348;&#2367;&#2344;&#2366; &#2319;&#2325; &#2357;&#2367;&#2358;&#2375;&#2359; &#2357;&#2367;&#2359;&#2351; &#2325;&#2375; &#2309;&#2343;&#2381;&#2351;&#2351;&#2344;&#44; &#2319;&#2325; &#2360;&#2306;&#2327;&#2336;&#2367;&#2340; &#2340;&#2352;&#2368;&#2325;&#2375; &#2360;&#2375; &#2325;&#2352; &#2360;&#2325;&#2340;&#2375; &#2361;&#2376;&#2306;&#44; &#2331;&#2357;&#2367;&#2351;&#2379;&#2306;&#44; &#2357;&#2368;&#2337;&#2367;&#2351;&#2379; &#2335;&#2381;&#2351;&#2370;&#2335;&#2379;&#2352;&#2367;&#2351;&#2354; &#2324;&#2352; &#2309;&#2344;&#2381;&#2351; &#2340;&#2352;&#2368;&#2325;&#2379;&#2306; &#2332;&#2379; &#2361;&#2376;&#2358; &#2330;&#2361;&#2330;&#2361;&#2366;&#2344;&#2366; &#2360;&#2368;&#2326;&#2344;&#2375; &#2324;&#2352; &#2360;&#2350;&#2333; &#2325;&#2375; &#2310;&#2343;&#2366;&#2352; &#2335;&#2376;&#2327; &#2358;&#2366;&#2350;&#2367;&#2354; &#2325;&#2352;&#2344;&#2375; &#2325;&#2375; &#2360;&#2366;&#2343;&#2344; &#2325;&#2375; &#2325;&#2375; &#2350;&#2366;&#2343;&#2381;&#2351;&#2350; &#2360;&#2375; &#2319;&#2325; &#2357;&#2375;&#2348;&#2360;&#2366;&#2311;&#2335; &#2325;&#2375; &#2357;&#2367;&#2325;&#2366;&#2360; &#2325;&#2375; &#2310;&#2360;&#2346;&#2366;&#2360; &#2325;&#2375;&#2306;&#2342;&#2381;&#2352;&#2367;&#2340; &#2361;&#2376; &#2350;&#2306;&#2330;&#2379;&#2306; &#2350;&#2375;&#2306; &#2309;&#2344;&#2381;&#2351; &#2354;&#2379;&#2327;&#2379;&#2306; &#2325;&#2375; &#2360;&#2366;&#2341; &#2330;&#2352;&#2381;&#2330;&#2366; &#2325;&#2352;&#2325;&#2375; &#2309;&#2357;&#2343;&#2366;&#2352;&#2339;&#2366;&#2323;&#2306;&#46; &#2312; &#45; &#2354;&#2352;&#2381;&#2344;&#2367;&#2306;&#2327; &#2346;&#2381;&#2352;&#2357;&#2371;&#2340;&#2381;&#2340;&#2367; &#2309;&#2306;&#2327;&#2381;&#2352;&#2375;&#2332;&#2368; &#2349;&#2366;&#2359;&#2366; &#2325;&#2375; &#2354;&#2367;&#2319; &#2346;&#2381;&#2352;&#2340;&#2367;&#2348;&#2306;&#2343;&#2367;&#2340; &#2354;&#2375;&#2325;&#2367;&#2344; &#2361;&#2350; &#2361;&#2367;&#2344;&#2381;&#2342;&#2368; &#2349;&#2366;&#2359;&#2366; &#2325;&#2375; &#2354;&#2367;&#2319; &#2351;&#2361; &#2361;&#2379; &#2332;&#2366;&#2319;&#2327;&#2366; &#2325;&#2375; &#2352;&#2370;&#2346; &#2350;&#2375;&#2306; &#2309;&#2330;&#2381;&#2331;&#2368; &#2340;&#2352;&#2361; &#2360;&#2375; &#2357;&#2367;&#2360;&#2381;&#2340;&#2366;&#2352; &#2344;&#2361;&#2368;&#2306; &#2352;&#2326;&#2366; &#2361;&#2376;&#46;<br/>
 </p3>
</div>
</div>

<div class="para3">
<img src="images\help.png" />
<div id="de">
<p3> <b><br/>
&#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2325;&#2352;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2319; &#2360;&#2367;&#2326;&#2366;&#2351;&#2366; &#2332;&#2366; &#2357;&#2367;&#2359;&#2351;&#2379;&#2306; &#2325;&#2375; &#2309;&#2344;&#2369;&#2325;&#2381;&#2352;&#2350; &#2325;&#2375; &#2352;&#2370;&#2346; &#2350;&#2375;&#2306; &#2311;&#2360; &#2346;&#2381;&#2352;&#2325;&#2366;&#2352; &#2361;&#2376;&#2307; &#2320;&#2340;&#2367;&#2361;&#2366;&#2360;&#2367;&#2325; &#2360;&#2367;&#2347;&#2352;&#44; &#2358;&#2376;&#2344;&#2344; &#2327;&#2379;&#2346;&#2344;&#2368;&#2351;&#2340;&#2366; &#2340;&#2375;&#2323;&#2352;&#2381;&#2350;&#2381; &#2324;&#2352; &#2347;&#2367;&#2352; &#2360;&#2366;&#2352;&#2381;&#2357;&#2332;&#2344;&#2367;&#2325; &#2325;&#2369;&#2306;&#2332;&#2368; &#2351;&#2379;&#2332;&#2344;&#2366; &#2311;&#2360; &#2346;&#2381;&#2352;&#2325;&#2366;&#2352;&#44; &#2344;&#2367;&#2332;&#2368; &#2325;&#2369;&#2306;&#2332;&#2368; &#2325;&#2375; &#2342;&#2381;&#2357;&#2366;&#2352;&#2366; </b>
<span onclick="para3()"> &#2309;&#2342;&#2367;&#2325;&#2381;  </span>  </p3>
</div>
<div id="dr" style="display:none";>

<a href="samepagefinalhindi.php"><img src="images\back.jpg" /></a>


<p3>&#2325;&#2381;&#2352;&#2367;&#2346;&#2381;&#2335;&#2379;&#2327;&#2381;&#2352;&#2366;&#2347;&#2368; &#2325;&#2352;&#2344;&#2375; &#2325;&#2375; &#2354;&#2367;&#2319; &#2360;&#2367;&#2326;&#2366;&#2351;&#2366; &#2332;&#2366; &#2357;&#2367;&#2359;&#2351;&#2379;&#2306; &#2325;&#2375; &#2309;&#2344;&#2369;&#2325;&#2381;&#2352;&#2350; &#2344;&#2367;&#2350;&#2381;&#2344;&#2366;&#2344;&#2369;&#2360;&#2366;&#2352; &#2361;&#2376;&#2307;
<h>       Historical Ciphers </h>
<ol>
<li>Shifting ciphers</li>
<li> Substitution Cipher</li>
<li> Affine Cipher</li>
<li> Vigenere Cipher</li>
<li> Hill cipher </li>
</ol>
 
<h3>     Shannon�s theory </h3>
<ol>
<li> Statement and brief introduction</li>
<li> Its derivation</li>
<li> Practical applications</li>
</ol>
 
<h4>     Cryptographic hash functions </h4>
<ol>
<li> Various types of existing encryption schemes </li>
<li> Drawbacks </li>
<li> Making one�s own hash function</li>
</ol>
 



</p3>
</div>
</div>
<div class="para4">
<h2> &#2360;&#2367;&#2326;&#2344;&#2366;&#0032;&#2358;&#2369;&#2352;&#2369;&#0032;&#2392;&#2352;&#2375; </h2>
<a href="sliderfinalhindi.php"><img src="images\start.jpg" id="abcd"  /></a>
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
<p class="copyright" align="center"> <br/>A product of <a href="samepagefinalhindi.php">&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;.</a> &#2311;&#2360;&#2381; &#2357;&#2375;&#2348;&#2381;&#2360;&#2366;&#2311;&#2335;&#2381; &#2325;&#2379; &#2348;&#2344;&#2344;&#2375; &#2350;&#2375;&#2325;&#2379;&#2311; &#2349;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352;&#2344;&#2361;&#2367; &#2335;&#2379;&#2337;&#2366; &#2361;&#2376; </p>
<br />
<ul> 
<li><h4>&#2342;&#2367;  &#2360;&#2366;&#2351;&#2347;&#2352; &#2350;&#2358;&#2367;&#2344;&#2381;</h4></li>  
<li><a href="samepagefinalhindi.php">&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2381;&#2352;&#2360;&#2381;&#2335;&#2381;</a></li>  
<li><a href="videos.php">&#2357;&#2367;&#2337;&#2375;&#2323;</a></li> 
<li><a href="#">&#2361;&#2367;&#2344;&#2381;&#2342;&#2367;</a></li> 
<li><a href="faqhindi.php">&#2360;&#2357;&#2366;&#2354;&#2381;</a></li> 
<li><a href="aboutushindi.php">&#2361;&#2350;&#2366;&#2352;&#2375;  &#2348;&#2366;&#2352;&#2375; &#2350;&#2375;
</a></li> 
</ul> 
 
<ul> 
<li><h4>&#2360;&#2367;&#2326;&#2375; &#2324;&#2352;&#2381; &#2332;&#2369;&#2337;&#2375;</h4></li> 
<li><a href="http://ciphermachine.wordpress.com/">&#2348;&#2381;&#2354;&#2379;&#2327;&#2381;</a></li> 
<li><a href="#">&#2398;&#2379;&#2352;&#2350;&#2381;</a></li> 
<li><a href="feedbackhindi.php">&#2346;&#2381;&#2352;&#2340;&#2367;&#2325;&#2367;&#2352;&#2367;&#2351;&#2366;</a></li> 
<li><a href="sitemaphindi.php">&#2350;&#2366;&#2327;&#2373;&#0032;&#2342;&#2358;&#2373;&#2325;</a></li> 
<li><a href="contacthindi.php">&#2360;&#2350;&#2381;&#2346;&#2352;&#2381;&#2325;&#2381;</a></li> 
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
<!DOCTYPE html>


<!--
File Name: index.php
Date: 5/9/18
Programmer: Tam Nguyen
-->

<html lang="en">

<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="your name here">
    
<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

<title>ACE</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/reset.css" rel="stylesheet" type="text/css">
    
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<link href="css/slideshow.css" rel="stylesheet" type="text/css">    
    
<link href="css/tpgrid.css" rel="stylesheet" type="text/css">
<link href="css/tpstyle.less" rel="stylesheet/less" type="text/css">
<link href="css/tpnavigation.css" rel="stylesheet" type="text/css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

</head>

<body>

<header class="header">


<?php include 'includes/header.inc.html.php'; ?>

    
</header>

<main>

<section id="intro">
  
    <!--
facebook plugin-->
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <!--
slideshow-->


    <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="images/bike.jpg" style="width:100%" >
    <div class="text">Ready</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="images/destination_sea.jpg" style="width:100%" class="imagehide" >
    <div class="text">Set</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="images/couple_road.jpg" style="width:100%" class="imagehide">
    <div class="text">Run</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" class="mySlides fade" class="imagehide" onclick="plusSlides(-1)">&#10094;</a>
  
<a class="next" class="mySlides fade" class="imagehide" onclick="plusSlides(1)">&#10095;</a>
        
</div>
<br>

<!-- The dots/circles -->
<div class="imagehide" style="text-align:center" >
  <span class="dot" class="imagehide" onclick="currentSlide(1)"></span> 
  <span class="dot" class="imagehide" onclick="currentSlide(2)"></span> 
  <span class="dot" class="imagehide" onclick="currentSlide(3)"></span> 
</div>
    


</section>


<h2 id="life2">ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h2>

<section class="section group">

<div class="col span_1_of_3 span_1_of_2">
    
<img src="images/800x600.jpg" alt=""/>

<h3>ABOUT ACE</h3>

<p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.
    </p> 



</div>

<div class="col span_1_of_3 span_1_of_2">

<img src="images/bike_man_1000x2.jpg" alt=""/>

<h3>ABOUT THE EVENT</h3>

<p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. 

There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
</p>

</div >

<div class="col span_1_of_3 span_1_of_2">

<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2Fposts%2F406694239794303&width=500" width="500" height="171" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    
</div>

</section>

<div>
    <a href="https://www.accuweather.com/en/us/portland-or/97209/weather-forecast/350473" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1528306397341" class="aw-widget-current"  data-locationkey="350473" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1528306397341"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
    </div>    
</main>

<?php include 'includes/footer.inc.html.php'; ?>

<script src="css/slideshow.js"></script> 
    
    
</body>

</html>
<!DOCTYPE html>

<!--
File Name: index.html
Date: 5/9/18
Programmer: Tam Nguyen
-->

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Tam Nguyen">
<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

<title>ACE</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link href="css/reset.css" rel="stylesheet" type="text/css">
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

<section >
<div id="intro">
    <p>Hero image </p>

</div>
    <div id="sidebar">
    <p>Paragraph</p>
        <ol>
        <li>List1
            </li>
            <li>List2
            </li>
        </ol>
     </div>  
    
    </section>
     
  
<section class="section group">

<div class="col span_1_of_3 span_1_of_2" id="event1">

<h2>H2 Heading</h2>
    

</div>

<div class="col span_1_of_3 span_1_of_2" id="event2">

<h3>H3 Heading</h3>

</div>

<div class="col span_1_of_3 span_1_of_2" id="event3" >
 
<h4>H4 Heading </h4>
    
 
</div>

</section> 


</main>

<?php include 'includes/footer.inc.html.php'; ?>

</body>

</html>

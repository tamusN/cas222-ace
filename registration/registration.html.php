<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACE</title>
  <meta name="description" content="Reserve your spot for ACE.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link href="../css/custom.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href=../css/form.css>  

<link href="../css/tpgrid.css" rel="stylesheet" type="text/css">
<link href="../css/tpstyle.less" rel="stylesheet/less" type="text/css">
<link href="../css/tpnavigation.css" rel="stylesheet" type="text/css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>


    
</head>
<body>
    
    <header class="header">

<?php include '../includes/header.inc.html.php'; ?>

    
</header>    
    
  <div id="wrapper">
      
      <main>
          
      <p><br><br>Registration please here!</p>
          
          <div id="source">Required fields are marked with an asterisk (*).</div>
          
      <div id="reservations">
        
        
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
          
        <label for="role">*Role:</label>
        <select size="1" name="role" id="role">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
         </select>
          
         
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
          
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone:</label>
          
          <input type="tel" name="myphone" id="myphone">
          
        <label for="mysatevent">Saturday Events:</label>
          
<select size="1" name="mysatevent" id="mysatevent">
          <option>Choose your event</option>
              <option value="Long course">Long Course</option>
          <option value="Olympic">Olympic</option>
    
    <option value="10k">10K</option>
          
          <option value="Halfmarathon">Half Marathon</option>
              <option value="No event">No event</option>
                           
                  </select>
          
          
          <label for="mysunevent">Sunday Events:</label>
          
<select size="1" name="mysunevent" id="mysunevent">
    <option>Choose your event</option>
                        <option value="sprint">Sprint</option>
              <option value="TryaTri">Try-a-Tri</option>
    <option value="Splashndash">Splash n Dash</option>
                            <option value="No event">No event</option>

                  </select>
        
          <label for="mytshirt">*T-shirt size</label>
          <select size="1" name="mytshirt" id="mytshirt" required>
          <option>Choose Your size</option>
              <option value="XXL">XXL</option>
          <option value="XL">XL</option>
          <option value="L">L</option>
              <option value="M">M</option>
              <option value="S">S</option>
                  </select>          
                  
          <label for="mygender">*Gender </label>
          <select name="mygender" id="mygender" required>
            <option>Your gender</option>
              <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Non_binary">Non_binary</option>
         </select>
          
           <label for="mysosname">*Emergency contact name</label>
              <input type="text" name="mysosname" id="mysosname" required>
              
           <label for="mysosphone">*Emergency contact phone</label>
              <input type="text" name="mysosphone" id="mysosphone" required>
              
          
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      
          </div>
        
           
          
    </main>
    <footer>
       <?php include '../includes/footer.inc.html.php'; ?>
    </footer>
  </div>
</body>
</html>
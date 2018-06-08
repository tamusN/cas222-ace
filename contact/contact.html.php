<!DOCTYPE html>
<html lang="en">
<head>
  <title>ACE</title>
  <meta name="description" content="ACE is an expert in sports">
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
    
  <div class="sqeezer">
    
    <main>
       
       <p><br><br>Message or question from you!</p>
        
      <form method="post" action=" " id="inquiryForm">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
          
          <label for="myRole">Role:</label>
        <select size="1" name="myRole" id="myRole">
          <option>Choose Your Role</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
            <option value="third party" > Interested third party </option>
         </select>
        <label for="myQuestion">Message or question:</label>
        
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
    </main>
    <footer>
      <?php include '../includes/footer.inc.html.php'; ?>
    </footer>
  </div>
</body>
</html>
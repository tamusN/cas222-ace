<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=tamnguye_ace', 'tamnguye_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) && ($_POST['honeypot'] ==''))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $role = $_POST['role'];
    $firstName = $_POST['myfname'];
    $lastName = $_POST['mylname'];
    $email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $satevent = $_POST['mysatevent'];
    $sunevent = $_POST['mysunevent'];
    $tshirt = $_POST['mytshirt'];
    $gender = $_POST['mygender'];
    $sosname = $_POST['mysosname'];
    $sosphone = $_POST['mysosphone'];


    
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
          role = :role,
          fname = :fname,
          lname = :lname,
          email = :email,
          phone = :phone,
          satevent = :satevent,
          sunevent = :sunevent,
          tshirt = :tshirt,
          gender = :gender,
          sosname = :sosname,
          sosphone = :sosphone';
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':role', $_POST['role']);
      $s->bindValue(':fname', $_POST['myfname']);    
      $s->bindValue(':lname', $_POST['mylname']);
      $s->bindValue(':email', $_POST['myemail']);
      $s->bindValue(':phone', $_POST['myphone']);
      $s->bindValue(':satevent', $_POST['mysatevent']);
    $s->bindValue(':sunevent', $_POST['mysunevent']);
      $s->bindValue(':tshirt', $_POST['mytshirt']);
      $s->bindValue(':gender', $_POST['mygender']);
      $s->bindValue(':sosname', $_POST['mysosname']);
    $s->bindValue(':sosphone', $_POST['mysosphone']);
    
        
        
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted reservation: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    include "success.html.php";

    // load the thank you page after the INSERT runs

    // Add an else to load the initial page if the initial (line 19) if statement is false
    
}else
      {      
include 'registration.html.php'; //Modify this to include the initial file for this folder-done
}
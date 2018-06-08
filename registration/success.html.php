<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACE</title>
        <meta name="description" content="Reserve your spot for ACE">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link href="../css/custom.css" rel="stylesheet" type="text/css">
   

<link href="../css/tpgrid.css" rel="stylesheet" type="text/css">
<link href="../css/tpstyle.less" rel="stylesheet/less" type="text/css">
<link href="../css/tpnavigation.css" rel="stylesheet" type="text/css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
         <header class="header">

<?php include '../includes/header.inc.html.php'; ?>

    
</header> 
        <div id="wrapper">
            
                <main>
                <p><br><br>Thank you!</p>
                <p>Our records show you submitted the following:<br>
                  Role: <?php echo $role; ?><br>
                  First Name: <?php echo $firstName; ?><br>
                  Last Name: <?php echo $lastName; ?><br>
                  Email: <?php echo $email; ?><br>
                  Phone: <?php echo $phone; ?><br>
                  Saturday Event:<?php echo $satevent; ?><br>
                    Sunday Event:<?php echo $sunevent; ?><br>
                  Tshirt size: <?php echo $tshirt; ?><br>
                  Gender: <?php echo $gender; ?><br>
                 Emergency contact name: <?php echo $sosname; ?><br>
                     Emergency contact phone: <?php echo $sosphone; ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>
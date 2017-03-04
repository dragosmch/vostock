<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'mbax4dc9');

// If connection failed, display the connection error
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
session_start();

// Take the variables from the session
$ID = $_SESSION['ID'];

$name = $_SESSION['username'];

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>sign up or login for VoStock</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/bootstrap/css/user_page.css"></script>

   
    <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>

  </head>

  	<body>
    	<!-- nav bar -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-3">
        <a href="mail-compose.html" class="btn btn-danger btn-block btn-compose-email">Create event</a>
        <ul class="nav nav-pills nav-stacked nav-email shadow mb-20">
            <li >
                <a href="#mail-inbox.html">
                    <i class="fa fa-inbox"></i>New events in Stockport
                </a>
            </li>
            <li class = "active">
                <a href="#mail-compose.html"><i class="fa fa-envelope-o"></i>Events you attended</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-certificate"></i>Events you saved</a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-text-o"></i> Share your events 
                </a>
            </li>
           
        </ul><!-- /.nav -->

        <h5 class="nav-email-subtitle">Your projects</h5>
        <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            <li>
                <a href="#">
                    <i class="fa fa-folder-open"></i> Profile options
                </a>
            </li>
            
        </ul><!-- /.nav -->
    </div>
    <div class="col-sm-9">
        
        <!-- resumt -->
        <div class="panel panel-default">
               <div class="panel-heading resume-heading">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-4">
                           <figure>
                              <img class="img-circle img-responsive" style="width:50%, height:50%" alt="" src="assets/images/profile.jpg">
                           </figure>
                          
                        </div>
                        <div class="col-xs-12 col-sm-8">
                           <ul class="list-group">
                              <li class="list-group-item"><?php echo $name ?></li>
                              <li class="list-group-item">Contact details : 0770655422</li>
                              <li class="list-group-item">E-mail : raluca@gmail.com</li>
                              <li class="list-group-item">Short description: I am passioante about helping others and I fullfill this by being part of thsi community. I love meeting new people and getting to help and solve major problems in our community</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Summary</h4>
                  <p>
                     Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                     te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </p>
                  <p>
                     Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
                     Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Research Interests</h4>
                  <p>
                     Software Engineering, Machine Learning, Image Processing,
                     Computer Vision, Artificial Neural Networks, Data Science,
                     Evolutionary Algorithms.
                  </p>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <h4>Prior Experiences</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">
                           Software Engineer at Twitter
                        </h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                           te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                     </a>
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                           Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                           nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                        <ul>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                           <li>
                              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
                              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
                              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                           </li>
                        </ul>
                        <p></p>
                     </a>
                  </ul>
               </div>
               
              
              
            </div>
         </div>
        <!-- resume -->

    </div>
  </div>

		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		   <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>

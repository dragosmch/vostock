<?php
 // Connect to the database
 $conn = mysqli_connect('localhost', 'root', '', 'mbax4dc9');
 // If connection failed, display the connection error
 if(!$conn)
 {
   die("Connection failed: " . mysqli_connect_error());
 }
 session_start();
 // Take the variables from the results query for a certain tag
 // $ID = $_SESSION['ID'];
 // $name = $_SESSION['username'];
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
              <h1> The results for your requested category </h1>
              <style> h1{
   text-align: center;
   top: 100px;
   left: 50px;
}
</style>
    	<!-- nav bar -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-9">

        <!-- Event -->
        <div class="panel panel-default">
               <div class="bs-callout bs-callout-danger">
                  <h4>Event</h4>
                  <p>
                     Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu,
                     te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </p>
                  <p>
                     Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis.
                     Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.
                  </p>

                  <button type="button" class="btn btn-default">Save event</button>

               </div>
            </div>
         </div>
        <!-- Event -->

    </div>
  </div>
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		   <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>

<?php
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
  <title>VoStock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main1.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      max-height: 600px;
  }



  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }

  body {
    background-color: #87CEFA;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#87CEFA">VoStock</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#" style="color:#87CEFA">Home</a></li>
        <li class = "active"><a href="#" style="color:#87CEFA">About</a></li>
        <li><a href="#" style="color:#87CEFA">I want to volunteer</a></li>
        <li><a href="#" style="color:#87CEFA">I need volunteers</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<!--<div class="container text-center">    
  <h3>Get involved!</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <h2>Why volunteer?</h2>
      <p>People choose to volunteer for a variety of reasons. For some it offers the chance to give something back to the community or make a difference to the people around them. For others it provides an opportunity to develop new skills or build on existing experience and knowledge. Regardless of the motivation, what unites them all is that they find it both challenging and rewarding.</p>
    </div>
    <div class="col-sm-4"> 
      <br>
      <img src="image1.jpg" class="img-responsive img-rounded" style="width:100%" alt="Image">
    </div>
    <br>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>
<div class="container text-center">    
  <br>
  <div class="row">
    <div class="col-sm-4">
      <h2>Where/How?</h2>
      <p>No matter if we talk about location or time, there are a multitude of opportunities out there. Several organisations are looking for volunteers and there is a variety of fields. Therefore, VoStock is the appropriate place to get organisations in touch with people who want to get involved. Just register, choose your interests and start looking for events!</p>
    </div>
    <div class="col-sm-4"> 
      <br>
      <img src="image3.jpg" class="img-responsive img-rounded" style="width:100%" alt="Image">
  
    </div>
    <br>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>
!-->

<div class="container">
      <div class="row main">
        <div class="main-login main-center">
        <h1>Create an opportunity and wait for volunteers!</h1>
        <?php
    if(isset($_POST['save'])){
        $sql = "INSERT INTO events (creator_id, title, location, event_date, time_start, time_end, duration)
        VALUES ('".$_POST["creator_id"]."','".$_POST["title"]."','".$_POST["location"]."', '".$_POST["date"]."', '".$_POST["time_start"]."', '".$_POST["time_end"]."', '".$_POST["time_end"]."')";
	
	$result = msqli_query($conn, $sql);
    }

    ?>
	<form class="" method="post" action="#">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="title" id="title"  placeholder="Enter the name of the opportunity"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Location</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="location" id="location"  placeholder="Enter the location"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Date</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="event_date" id="event_date"  placeholder="Enter the date"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Start time</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="time" class="form-control" name="time_start" id="time_start"  placeholder="Enter the start time"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Ending time</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="time" class="form-control" name="time_end" id="time_end"  placeholder="Enter the ending time"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              
              <label for="confirm" class="cols-sm-2 control-label">Description</label>
              <textarea class="form-control" type="textarea" id="description" placeholder="Add a description" maxlength="140" rows="7"></textarea>            
            </div>
            <div class="form-group ">
              <a target="_blank" type="submit" id="button" class="btn btn-primary btn-lg btn-block ">Create opportunity</a>
            </div>
            
          </form>
        </div>
      </div>
    </div>

<footer class="container-fluid text-center">
  <p>VoStock.2017</p>
</footer>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="styles.css">
<style>
* {box-sizing: border-box;}
#qtable, td, th {  
          border: 1px solid white;
          text-align: center;
          color:white;
        }

        #qtable {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          padding: 15px;
        }

        #insForm{
          padding:20px;
        }

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 90px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}

#navbar a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>
</head>
<body>

<div id="navbar">
  <a href="#default" id="logo">Airport Database</a>
  <div id="navbar-right">
    <a class="active" href="HomePage.php">Home</a>
    <a href="Insertion.php">Insert</a>
    <a href="Display.php">Display</a>
    <a href="Schema.php">Schema</a>
    <a href="Team.php">Team</a>
    <a href="Logout.php">Logout</a>
  </div>
</div>

<div style="margin-top:210px;padding:15px 15px 2500px;font-size:30px">
</div>

<form method="GET" action="Flights.php">
                    <div class="container">

                    <div class="row">
                    <div class="col-md-9">
                    <label>PID:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="PID"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>PassportNo:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="PassportNo"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Fname:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Fname"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Middle Name:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="M"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>LName:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Lname"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Address:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Address"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Phone:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Phone"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Age:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="Age"/><br>
                    </div>
                    </div><br>
                     <div class="row">
                    <div class="col-md-9">
                    <label>Gender:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Gender"/><br>
                    </div>
                    </div><br>
                     <div class="row">
                    <div class="col-md-9">
                    <label>Flight_Code:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="Flight_Code"/><br>
                    </div>
                    </div><br>
                    </div><br>

                    <div class="row justify-content-center">
                    <input type="submit" name="submit"/><br>
                    </div>
                    </div>
                </form>
</div>
<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php

    include("connectFDB.php");
    include("functions.php");

    if(isset($_GET['submit']))
    {
        $flight_code = $_GET['flight_code'];
        $source = $_GET['source'];
        $destination = $_GET['destination'];
        $arrival = $_GET['arrival'];
        $departure = $_GET['departure'];
        $status = $_GET['status'];
        $duration = $_GET['duration'];
        $flighttype = $_GET['flighttype'];
        $layovers = $_GET['layovers'];
        $noofstops = $_GET['noofstops'];
        $airlineid = $_GET['airlineid'];

        if($flight_code && $source && $destination && $arrival && $departure && $status && $duration && $flighttype && $layovers && $noofstops && $airlineid)
        {
            $ins_query = "INSERT INTO flight(flight_code,source,destination,arrival,departure,status,duration,flighttype,layover_time,no_of_stops,airlineid) VALUES($flight_code,$source,$destination,$arrival,$departure,$status,$duration,$flighttype,$layovers,$noofstops,$airlineid);";
            
            if(mysqli_query($con,$ins_query))
            {
                echo "<br><h6 class='text-center'>New Flight is inserted.</h6><br><br>";
            }
            else
            {
                echo "<br><h6 class='text-center'>Try again</h6>";
            }
        }
        else
            echo "<br><h6 class='text-center'>Enter all details of the Flight</h6>";
    }

?>
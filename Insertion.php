<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<style>
* {box-sizing: border-box;}

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
<div>
  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <!--<br>
  <br>
  <br> -->
<p><h4>To Insert Passenger Values -------><a href="example.php"> Click Here.</a></h4></p>

<p><h4>To Insert New Flight Values -------><a href="Flights.php"> Click Here.</a></h4></p>

<p><h4>To Insert New Ticket Data Values -------><a href="Tickets.php"> Click Here.</a></h4></p>

<p><h4>To Insert Updated Price Data Values -------><a href="Trigger.php"> Click Here.</a></h4></p>






</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
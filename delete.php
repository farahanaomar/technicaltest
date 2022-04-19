<!--registerProcess-->

<html>
<head>
<title>Delete Participants</title>
<!--This is delete participants page-->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Load stylesheet for title -->
<link rel="stylesheet" href="/w3css/3/w3.css">

<style type="text/css">

<!--Navigation Style-->
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #ee4e2c;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
<!--Header Style-->
div	{bgcolour=white text=black;
	text-align:center;
	margin-bottom: .1em;}

      .frame {
        width: 65%;
        height: 25%;
        border: 3px solid #ee4e2c;
        background: white;
        margin: auto;
        padding: 15px 10px;
      }
	 
	  
      img {
        width: 100%;
        height: 100%;
      }
	  
		<!--Table color -->
	    table    { border:double 5px black; }
		table td { border:inset 1px #000; }
		table tr#ROW1 {background-color:fee7da; color:black;}
		table th#ROW2 {background-color:white; color:#ee4e2c;}
		
	

    </style>


</head>

<body>
<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
  <a class="active" href="PageInfo.html"><i class="fa fa-fw fa-home"></i> Home</a> 
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="loginparticipant.php"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="register.php"><i class="fa fa-fw fa-registered"></i> Register</a>
  
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="log_out.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
  </div>

</div>



<?php
$db = mysqli_connect("localhost", "root", "", "webinar_shopee");
if(!$db)
{
die("Connection failed:". mysqli_connect_error()) ;
}
$id - $_GET['id'] ;
$del=mysqli_query($db, "delete from register where id - ('$id')") ;
if($del)
{
mysqli_close($db);
header("location:viewparticipant.php");
exit;
}
else
{
echo"Error deleting record";
}


?>

</body>
</html>
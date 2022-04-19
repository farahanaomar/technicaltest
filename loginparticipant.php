<!--registerProcess-->

<html>
<head>
<title>LOGIN Participant</title>
<!--This is login participant page-->

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

<!--Validate require username / password -->
<script>
function validateForm() {
  var x = document.forms["form1"]["username"].value;
  var y = document.forms["form1"]["password"].value;
  if (x == "" || x == null || y == "" || y == null) {
    alert("Please enter all field");
    return false;
  }
}
</script>



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
    <a href="loginadmin.php"><i class="fa fa-fw fa-user"></i> Admin</a>
  </div>

</div>

<!--Banner-->
<br>
<div class="frame">
      <img src="banner.png" alt="image">
</div>

<form name="form1" action="viewlink.php" onsubmit="return validateForm()" method="post" required>

<div class="about-section">
	<br><table border=2 align=center bordercolor="#ee4e2c" background-color="#fc5e00">
	<th colspan=2 id="ROW2"><h1>Login Participant</h1>
	<p>*Please makesure you have register to join Shopee Webinar before login <br>
	*You may login on 25th December 2021 8:00am to get our Webinar Link <br>
	</p>
	</th>
	
	<tr id="ROW1">
		<td> Username: </td>
		<td><input name="username" type="text" maxlength=10 size=30></td>
	</tr>
		
	<tr id="ROW1">
		<td> Password: </td>
		<td><input name="password" type="password" maxlength=10 size=30></td>
	</tr>
	
	<th colspan=2><input type = submit>     <input type="reset"></th>

  </table>	
</div>
</form>

<?php

$conn=mysqli_connect("localhost", "root", "","webinar_shopee"); //Host, User, Password, Database



?>
</body>
</html>



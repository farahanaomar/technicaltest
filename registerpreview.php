<html>
<head>
<title>REGISTRATION PREVIEW Shopee Webinar</title>
<!--This is webinar preview registration page-->

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
      <a href="contactus.php"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
    <a href="loginadmin.php"><i class="fa fa-fw fa-user"></i> Admin</a>
  </div>

</div>


<!--Banner-->
<br>
<div class="frame">
      <img src="banner.png" alt="image">
</div>
<?php
	$conn=mysqli_connect("localhost", "root", "","webinar_shopee");

$username=$_POST["username"];
$password=$_POST["password"];
$names=$_POST["names"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$ic=$_POST["ic"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$type=$_POST["type"];
$socmed=$_POST["socmed"];
$haveshopee=$_POST["haveshopee"];


$db = mysqli_connect("localhost", "root", "","webinar_shopee") or die("Cannot connect to server");
$sql = "INSERT INTO register (username, password, names, phone, address, ic, gender, email, type, socmed, haveshopee) VALUES ('$username', '$password', '$names', '$phone', '$address', '$ic', '$gender', '$email', '$type', '$socmed', '$haveshopee')";


mysqli_query($db, $sql);
mysqli_close($db);

 echo "
<form method = 'post' action = 'registersubmit.php'>
<div class=about-section>
	<br><table border=2 align=center bordercolor=#ee4e2c background-color=#fc5e00>
	<th colspan=2 id=ROW2><h1>Confirmation</h1>
	<p>Shopee Webinar For Beginner<br>
	*Please ensure all details are correct for e-certificate purpose</p>
	</th>

	<tr id=ROW1>
		<td> Username: </td>
		<td><input name='hidden' name='username' value='$username'</td>
	</tr>

	<tr id=ROW1>
		<td> Password: </td>
		<td><input name='hidden' name='password' value='$password'</td>
	</tr>

	<tr id=ROW1>
		<td> Full Name: </td>
		<td><input name='hidden' name='names' value='$names'</td>
	</tr>

	<tr id=ROW1>
		<td> Phone Number: </td>
		<td><input name='hidden' name='phone' value='$phone'</td>
	</tr>

	<tr id=ROW1>
		<td> Address: </td>
		<td><input name='hidden' name='address' value='$address'</td>
	</tr>

	<tr id=ROW1>
		<td> IC: </td>
		<td><input name='hidden' name='ic' value='$ic'</td>
	</tr>

	<tr id=ROW1>
		<td> Gender: </td>
		<td><input name='hidden' name='gender' value='$gender'</td>
	</tr>

	<tr id=ROW1>
		<td> E-mail: </td>
		<td><input name='hidden' name='email' value='$email'</td>
	</tr>

	<tr id=ROW1>
		<td> Item that you plan to sell: </td>
		<td><input name='hidden' name='type' value='$type'</td>
	</tr>

	<tr id=ROW1>
		<td> Social Media: </td>
		<td><input name='hidden' name='socmed' value='$socmed'</td>
	</tr>

	<tr id=ROW1>
		<td> Do you already have Shopee Account ? (Personal/Shop): </td>
		<td><input name='hidden' name='haveshopee' value='$haveshopee'</td>
	</tr>

	<th colspan=2><input type = submit value=Confirm></th>
	
  </table>	
</div>
</form>";

?>
</body>
</html>
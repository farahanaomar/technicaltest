<!--registerProcess-->

<html>
<head>
<title>List Participants</title>
<!--This is list participants page-->

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

<br><br>

<!--List-->
<table border=2 align=center bordercolor="#ee4e2c" background-color="#fc5e00">
	<th colspan=13 id="ROW2"><h1>List of Participants</h1>
	<p>You may view and delete any participants </p>
	</th>
	
<tr id="ROW1">
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Full Name</th>
<th>Phone</th>
<th>Address</th>
<th>IC</th>
<th>Gender</th>
<th>E-mail</th>
<th>Item to Sell</th>
<th>Social Media</th>
<th>Have Shopee</th>

</tr>
	

<?php

// View participant
$conn = mysqli_connect("localhost", "root", "", "webinar_shopee");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM register";
$result = $conn->query($sql);		

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>"  . $row["id"]. 
	 "</td><td>" . $row["username"]. 
	 "</td><td>" . $row["password"]. 
	 "</td><td>" . $row["names"]. 
	 "</td><td>" . $row["phone"]. 
	 "</td><td>" . $row["address"]. 
	 "</td><td>" . $row["ic"].
	 "</td><td>" . $row["gender"]. 
	 "</td><td>" . $row["email"]. 
	 "</td><td>" . $row["type"]. 
	 "</td><td>" . $row["socmed"].	 
	 "</td><td>" . $row["haveshopee"].	 
	 "</td><td>"
	 . "<a href=delete.php>Delete</a>" .
	 
	 
	 "</td></tr>";
}
echo "</table>";
} else
$conn->close();

//delete participant


?>
</table>

</body>
</html>



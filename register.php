<!--registerProcess-->

<html>
<head>
<title>LOGIN Admin</title>
<!--This is login admin page-->

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
      <a href="contactus.php"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
    <a href="loginadmin.php"><i class="fa fa-fw fa-user"></i> Admin</a>
  </div>

</div>

<!--Banner-->
<br>
<div class="frame">
      <img src="banner.png" alt="image">
</div>


<!-- Registration form -->
<form name="form1" action="registerpreview.php" onsubmit="return validateForm()" method="post" required>

<div class="about-section">
	<br><table border=2 align=center bordercolor="#ee4e2c" background-color="#fc5e00">
	<th colspan=2 id="ROW2"><h1>Registration Form</h1>
	<p>Shopee Webinar For Beginner<br>
	*Please ensure all details are correct for e-certificate purpose</p>
	</th>
	
	<tr id="ROW1">
		<td> Username: <br> *Compulsary:will be use to enter webinar</td>
		<td><input name="username" type="text" maxlength=10 size=30></td>
	</tr>
		
	<tr id="ROW1">
		<td> Password: <br> *Compulsary:will be use to enter webinar</td>
		<td><input name="password" type="password" maxlength=10 size=30></td>
	</tr>
	
	<tr id="ROW1">
		<td> Full Name: </td>
		<td><input name="names" type="text" maxlength=20 size=30></td>
	</tr>

	<tr id="ROW1">
		<td> Phone Number: </td>
		<td><input name="phone" type="text" maxlength=20 size=30></td>
	</tr>
	
	<tr id="ROW1">
		<td> Address: </td>
		<td><textarea name="address" row="5" cols="50"></textarea></td>
	</tr>

	<tr id="ROW1">
		<td> IC Number: (without -) </td>
		<td><input name="ic" type="text" maxlength=12 size=30></td>
	</tr>

	<tr id="ROW1">
		<td> Gender </td>
		<td><select name="gender">
		<option selected>Male</option>
		<option>Female</option></td>
	</tr>
	
	<tr id="ROW1">
		<td> E-mail: </td>
		<td><input name="email" type="text" maxlength=30 size=30></td>
	</tr>
	
	<tr id="ROW1">
		<td> Item that you want to sell: </td>
		<td><input name="type" type="checkbox" value="Food & Beverages">Food & Beverages
			<input name="type" type="checkbox" value="Clothing">Clothing
			<input name="type" type="checkbox" value="Accessories">Accessories<br>
			<input name="type" type="checkbox" value="Digital Service">Digital Service
			<input name="type" type="checkbox" value="Printing">Printing</td>
	</tr>
	
	<tr id="ROW1">
		<td> Social Media (Shop/Personal): </td>
		<td><input type=radio name=socmed value=Facebook checked>Facebook
		<input type=radio name=socmed value=Instagram>Instagram
		<input type=radio name=socmed value=Twitter>Twitter
		<input type=radio name=socmed value=Tiktok>Tiktok</td>
	</tr>
	
	<tr id="ROW1">
		<td> Do you have Shopee Account ? (Personal/Shop): </td>
		<td><input type=radio name=haveshopee value=Yes checked>Yes
		<input type=radio name=haveshopee value=No>No</td>
	</tr>	
	
	
	<th colspan=2><input type = submit>     <input type="reset"></th>

  </table>	
</div>
</form>


<?php
$conn=mysqli_connect("localhost", "root", "","webinar_shopee"); //Host, User, Password, Database

	class register{
		//db
		private $conn;
		private $table = 'register';
		
		//properties
		public $id;
		public $username;
		public $password;
		public $names;
		public $phone;
		public $address;
		public $ic;
		public $gender;
		public $email;
		public $type;
		public $socmed;
		public $haveshopee;
		
		//constructor
		public function __construct($db){
			$this->conn = $db;
		}
		
		//get 
		public function read(){
			//query
			$query = 'SELECT 
			p.id,
			p.username,
			p.password,
			p.names,
			p.phone,
			p.address,
			p.ic,
			p.gender,
			p.email,
			p.type,
			p.socmed,
			p.haveshopee,
			FROM
			'. $this->table.;
			  
		//statement 
		$stmt = $this->conn->prepare($query);
		
		//execute
		$stmt->execute();
		
		return $stmt;
			
	}
	}

?>

</body>
</html>



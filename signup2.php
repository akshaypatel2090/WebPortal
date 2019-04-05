<?php
    if(isset($_POST['user'])){	
    $hostname = 'localhost';
    $dbname   = 'patel631_Capstone';
    $username = 'patel631'; 
    $password = 'cpanalcpanalcpanal';
    mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');
    $sid=mysql_real_escape_string($_POST['sid']); 
    $passWord=md5(mysql_real_escape_string($_POST['pass'])); 
    $query = "Insert into student Values(,$sid,$fname,$lname,$pemail,$semail,);";
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);
    if ($rows==1) 
    {header("Location:http://patel631.dev.fast.sheridanc.on.ca/Capstone_Project/internal_AddJob.php");}
    else 
    {
        $message = "Invalid Username or Password";
echo "<script type='text/javascript'>alert('$message');</script>";
    }
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sheridan FAST Alumini Portal</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
 .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 460px;
		margin: 30px auto;
	}
	.signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
	.signup-form .row1 {
		
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #2389cd !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #3598dc;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
	</style>
<body style="background:grey">

<div class="jumbotron text-center" style="margin-bottom:0" id="head">
  <h1 class="heading">Sheridan FAST Alumini Portal</h1>
  
</div>

<nav class="navbar navbar-expand-sm bg-#FF0000 navbar-#FF0000" >
  <a class="navbar-brand" href="#" style="margin-left:200px;color:white">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="pageAboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pageMyAccount.php">My Account</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="pageContactUs.php">Contact</a>
      </li>
    </ul>
  </div>  
</nav>
 
	<br><br>
<div class="signup-form">
<form class="form-inline" action="#">
    <h2>Sign Up</h2><br>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
		   <div class="row">
        	<div class="col-xs-6"><input type="email" class="form-control" name="pemail" placeholder="Primary Email" required="required"></div>
			<div class="col-xs-6"><input type="email" class="form-control" name="semail" placeholder="Secondary Email" required="required"></div>
		   </div>
		</div>
		<div class="form-group">
            <div class="row">
        	<div class="col-xs-6"><input type="text" class="form-control" name="Campus" placeholder="Campus" required="required"></div>
		    <div class="col-xs-6"><input type="date" class="form-control" name="Graddate" placeholder="Graduation Date" required="required"></div>
		    </div>
		</div>
		<div class="form-group">
		<div class="row1">
        	<input type="text" class="form-control" name="Program-Fast-Name" placeholder="Select" required="required" style="width:200%">
        </div></div>
	<div class="form-group">
		<div class="row1">
        	<input type="text" class="form-control" name="currentpos" placeholder="Current Position(Can enter unemployed)" required="required" style="width:200%">
        </div></div>
		<div class="form-group">
		<div class="row1">
        	<input type="text" class="form-control" name="skill1" placeholder="Enter your Skill - 1" required="required" style="width:200%">
        </div></div>
	<div class="form-group">
		<div class="row1">
        	<input type="text" class="form-control" name="skill2" placeholder="Enter your Skill - 2" required="required" style="width:200%">
        </div></div>
		<div class="form-group">
		<div class="row1">
        	<input type="text" class="form-control" name="skill3" placeholder="Enter your Skill - 3 " required="required" style="width:200%">
        </div></div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
  </form>
  </div>

  
  <script>
var f = localStorage.getItem('fname');
var l = localStorage.getItem('lname');
var e = localStorage.getItem('email');
var p = localStorage.getItem('p');
var st = localStorage.getItem('stu');
var link = localStorage.getItem('link');
document.getElementById("email").value =e;
document.getElementById("fname").value = f;
document.getElementById("lname").value = l;
document.getElementById("pos").value = p;
document.getElementById("luser").value= link;
document.getElementById("sid").value = st;
</script>
 <br>
</div>
</div>
 
<div class="jumbotron text-center" style="margin-bottom:0" id="end">
  <div class="container" >
  <div class="row">
    <div class="col-sm-4"  style="text-align:left">
	     <a href="https://www.youtube.com/user/SheridanInstitute" target="_blank">Sheridan College on YouTube</a>
	<p>https://www.youtube.com/user/SheridanInstitute</p>
	</div>
	<div class="col-sm-8" style="text-align:right">
  <a href="https://www.facebook.com/login" target="_blank"><img src="images/Facebook.png" width="95" height="25" alt="Facebook Hompage"/></a> &nbsp;
			  <a href="https://twitter.com/login " target="_blank"><img src="images/Twitter.png" width="95" height="25" alt="Twitter Homepage"/></a> &nbsp;
			  <a href="https://www.linkedin.com/uas/login?trk=hb_signin" target="_blank"><img src="images/LinkedIn.png" width="95" height="25" alt="LinkedIn Homepage"/></a>&nbsp;
	<br>
	<b><small><a href="login.php">Administrator login</a></small></b>
	</div>
	</div>
	

</body>
</html>
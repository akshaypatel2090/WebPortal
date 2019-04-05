<?php
    if(isset($_POST['user'])){	
    $hostname = 'localhost';
    $dbname   = 'patel631_Capstone';
    $username = 'patel631'; 
    $password = 'cpanalcpanalcpanal';
    mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');
    $userName=mysql_real_escape_string($_POST['user']); 
    $passWord=md5(mysql_real_escape_string($_POST['pass'])); 
    $query = "SELECT username FROM admin WHERE username='$userName' and  password='$passWord'";
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
  <html><a id="top"></a>
  <head>

<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/styles.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0" id="head">
  <h1 class="heading">Sheridan FAST Alumini Portal</h1>
  
</div>

  <nav class="navbar navbar-expand-sm bg-#FF0000 navbar-#FF0000" >
  <a class="navbar-brand" href="#" style="margin-left:200px;color:white">Home</a>
  </nav> 
   <div class="row">
    <div class="col-sm-2">
	<br>
	</div>
	<div class="col-sm-10">
  <h2>Sign In to My Account</h2>
      <br>
	  <form action="#" id = "login" method="POST">
			<div class="form-group">
			<div class="col-3">
			<label for="user">User ID:</label>
			<input type="text" class="form-control" id="user" name="user" placeholder="Enter your Sheridan ID" required>
			</div></div>
			<div class="form-group">
			<div class="col-3">
			<label for="pass">Password:</label>
			<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password" required>
			</div></div>
			<div class="form-group form-check">
			<label class="form-check-label">
			<input class="form-check-input" type="checkbox"> Remember me
			</label>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color:black">Submit</button>
			&nbsp;
			<button type="reset" class="btn btn-primary" style="background-color:black">Reset</button>
		
      </form>
	  </div>
	  <p>&nbsp;</p>
	  </div>
	  <p>&nbsp;</p>
  </body>
  </html>



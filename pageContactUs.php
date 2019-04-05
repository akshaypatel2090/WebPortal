<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
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
  <a class="navbar-brand" href="index.php" style="margin-left:200px;color:white">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="pageAboutUs.php" >About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pageMyAccount.html" >My Account</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="pageContactUs.php" style="color:black">Contact</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" >
  <div class="row">
    <div class="col-sm-3">
      <div class="aside">
	  <br><br>
      <p style="text-align:center"><b>Helping to connect alumni and faculty with the business community and job opportunities!</b></p>
      
	  <img src="images/website.png" class="img-fluid">
	  
      <h4  style="text-align:center">Sheridan | FAST</h4>
      
      <hr class="d-sm-none">
	  <br><br><br><br>
	  </div>
	  
    </div>
	
    <div class="col-sm-9">
	<br>
      <h2>Contact Us</h2>
	  <p>If you have any general enquiries or would like to learn more about the services provided
	  by the <b>FAST Alumni social media portal</b>, please see our services page by clicking on the link
	  in the navigation bar. If further explanation is required then forward us an email or send 
	  a brief message in the form window below and someone should reply within 48 business hours.
	  Turnaround times may take longer during peak usage times such as at the begining of the 
	  Fall and Winter semesters and graduation times.</p>
		
		<br>Please fill the required info in the fields below for assistance:</p>
      
	  <form action="#" id = "contactus">
			<div class="form-group">
			<label for="contactname">Name:</label>
			<input type="text" class="form-control" id="contactname" placeholder="Enter your Name" required>
			</div>
			<div class="form-group">
			<label for="email">Email ID:</label>
			<input type="email" class="form-control" id="email" placeholder="Enter your Email" required>
			</div>
			<div class="form-group">
			 <label for="comment">Comments for enquiry:</label>
			 <textarea class="form-control" rows="3" id="comment" name="text" placeholder="Comments"></textarea>
			</div>
			<div class="form-group form-check">
			<label class="form-check-label">
			<input class="form-check-input" type="checkbox"> Remember me
			</label>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color:black">Submit</button> &nbsp;
			<button type="Reset" class="btn btn-primary" style="background-color:black">Cancel</button>
      </form>
      <br>
      <p>Don't have an account? <a href="pageStudentRegister.php"> Click here to Sign Up</a></p> 
    </div>
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
	<img src="images/Facebook.png">
	<img src="images/Twitter.png" style="margin-left:10px">
	<img src="images/LinkedIn.png"style="margin-left:10px">
	<br>
	<b><small><a href="login.php">Administrator login</a></small></b>
	</div>
	</div>
	</div>
</div>

</body>
</html>
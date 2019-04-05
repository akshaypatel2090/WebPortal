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
<body>

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
 <div class="row">
    <div class="col-sm-2">
	<br>
	</div>
	<div class="col-sm-10">
	<br><br>
<h2>Create Account</h2>
<form class="form-inline" action="#">
    <div class="form-group">
      <label for="fname">First Name: </label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="fname" name="fname">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="lname">Last Name:</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="lname" name="lname">
	  <br><br>
    </div>
	
    <div class="form-group">
	   <label for="sid">Sheridan Student Id:</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="sid" placeholder="Enter password" name="sid">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="email">Primary Email Address</label>&nbsp;&nbsp;
      <input type="email" class="form-control " id="email" placeholder="Enter email" name="email">
	  <br><br><br>
    </div>
	 <div class="form-group">
	  <label for="prog">Select your Program</label>&nbsp;&nbsp;
	<select name="prog" class="custom-select custom-select mb-3">
      <option selected>Program Name</option>      
		<option value="1">Advanced Manufacturing Management</option>
		<option value="2">Apprenticeship Training Programs</option>
		<option value="3">Architectural Technician/Technology</option>
		<option value="4">Bachelor of Computing and Network Communications (Honours) – Internet Communications Technology</option>
		<option value="5">Chemical Engineering Technology</option>
		<option value="6">Chemical Engineering Technology – Environmental</option>
		<option value="7">Chemical Laboratory Technician</option>
		<option value="8">Computer Engineering Technician/Technology</option>
		<option value="9">Computer Programmer</option>
		<option value="10">Computer Systems Technician – Software Engineering</option>
		<option value="11">Computer Systems Technology – Software Development and Network Engineering</option>
		<option value="12">Computer Systems Technology – Systems Analyst</option>
		<option value="13">Electrical Engineering Technician</option>
		<option value="14">Electrical Techniques</option>
		<option value="15">Electromechanical Engineering Technician/Technology</option>
		<option value="16">Electronics Engineering Technician/Technology</option>
		<option value="17">Environmental Control</option>
		<option value="18">Environmental Technician</option>
		<option value="19">Game Development – Advanced Programming</option>
		<option value="20">Information Systems Security, Honours Bachelor of Applied Information Sciences</option>
		<option value="21">Information Technologies Support Services</option>
		<option value="22">Interactive Media Management</option>
		<option value="23">Internet Communications Technology</option>
		<option value="24">Mechanical Engineering Technician/Technology</option>
		<option value="25">Mechanical Engineering Technician/Technology – Design & Drafting</option>
		<option value="26">Mechanical Engineering, Bachelor of Engineering</option>
		<option value="27">Mobile Computing, Honours Bachelor of Computer Science</option>
		<option value="28">Plumbing, Mechanical Techniques</option>
		<option value="29">Quality Assurance – Manufacturing and Management</option>
		<option value="30">Technology Fundamentals</option>
		<option value="31">VTool and Die Maker, Mechanical Techniques</option>
		<option value="32">Tool Making, Mechanical Technician</option>
		<option value="33">Welding and Fabrication Technician/Welding Techniques</option>
    </select>&nbsp;&nbsp;&nbsp;&nbsp;
	<br>
	</div>
	 <div class="form-group mb-3">
	 <div><br></div>
	   <label for="dat">Graduation Date</label>&nbsp;&nbsp;
      <input type="Date" class="form-control" id="dat" placeholder="Enter password" name="dat">
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label for="luser">LinkedIn-Account User ID</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="luser" placeholder="Enter password" name="luser">
    </div>
	<div class="form-group mb-3">
	 <div><br></div>
	   <label for="s1">Skill-1</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="s1"  name="s1">
    
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label for="s2">Skill-2</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="s2" name="s2">
    </div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="form-group mb-3">
	   <label for="s3">Skill-3</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="s3" name="s3">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="pos">Current Postion</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="pos" name="pos">
    </div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="form-group mb-3">
	   <label for="pwd">Password</label>&nbsp;&nbsp;
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="rpwd">Re-enter Password</label>&nbsp;&nbsp;
      <input type="password" class="form-control" id="rpwd" placeholder="Enter email" name="rpwd">
    </div>
	 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div class="form-group">
    <button type="submit" class="btn btn-default">Edit</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
  </form>

  
  <script>
var f = localStorage.getItem('fname');
var l = localStorage.getItem('lname');
var e = localStorage.getItem('email');
var p = localStorage.getItem('p');
var link = localStorage.getItem('link');
document.getElementById("email").value =e;
document.getElementById("fname").value = f;
document.getElementById("lname").value = l;
document.getElementById("pos").value = p;
document.getElementById("luser").value= link;
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
	</div>
</div>

</body>
</html>
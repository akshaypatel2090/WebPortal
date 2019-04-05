<!doctype html>
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="internal_AddUser.php">Manage Profiles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="internal_AddJob.php">Candidate Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="internal_Reports.php">Reports</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">Manage Posts</a>
      </li>
	  <!-- <li class="nav-item">
        <a class="nav-link" href="internal_SearchFacebook.php">Facebook Portal</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="internal_SearchTwitter.php">Twitter Portal</a>
      </li>-->
	  <li class="nav-item">
        <a class="nav-link" href="internal_SearchLinkedIn.php">Match Job Description</a>
      </li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	  <li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li><li class="nav-item"><a class="nav-link"></a></li>
	 <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
  </div>  
  </nav> 
   <div class="row">
    <div class="col-sm-2">
	<br>
	</div>
	<div class="col-sm-10">
<h2>Authorized Pages - Search potential alumni job candidates</h2>
      <br>
	  <form action="#" id = "login">
			<div class="form-group">
			<div class="col-6">
			<label for="course">Select FAST Program:</label>
			 <select name="course" class="custom-select mb-3">
				<option selected>SELECT</option>
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
			</select>
			</div>
			<div class="form-group">
			&nbsp;&nbsp;
			<label for="year">Enter 4-digit Year of Graduation:</label>
			<div class="col-1">
			<input type="text" class="form-control" id="year" placeholder="YYYY" required>
			</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color:black">Submit</button>
			&nbsp;
			<button type="reset" class="btn btn-primary" style="background-color:black">Reset</button>
      </form>
	  <br><br>
	  	<a href="internal_SearchProgramsByCode.php" target="_blank">- Search for FAST Program name by program code</a><br>
	<a href="internal_FAST_Programs.php">- List of all FAST Program name with program code</a><br>
	  </div>
 </div>
 
  </body>
  </html>



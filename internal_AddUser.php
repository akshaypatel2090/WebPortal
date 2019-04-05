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
        <a class="nav-link" href="index	.php">Logout</a>
      </li>
    </ul>
  </div>  
  </nav> 
   <div class="row">
    <div class="col-sm-2">
	<br>
	</div>
	<div class="col-sm-10">
  <h2>Authorized Pages - Database Administration / Manage user profiles</h2>
      <br>
	  
	  <form  class="form-inline" action="#">
			<label for="Sid">Student Id#</label>
			<input type="text" class="form-control" id="Sid" placeholder="Enter your Sheridan ID" required>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-primary" style="background-color:black">Submit</button>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="reset" class="btn btn-primary" style="background-color:black">Reset</button>
      </form>
	  <br>
	  	<a href="internal_SearchStudentNum.php" target="_blank">- Search for Student# by name</a><br>
	<a href="#">- Add new Student/Alumni profile</a><br>
	<a href="#">- Delete Student/Alumni profile</a>
	  </div>
 </div>
 
  </body>
  </html>



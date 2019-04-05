<!doctype html>
  <html><a id="top"></a>
  <head>
  <meta charset="utf-8">
   <title>LinkedIn portal</title>
  <link rel="stylesheet" type="text/css" href="styles/styles.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
   <!--<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key:   77lb0yac57usqe
    authorize: true
    onLoad: onLinkedInLoad
    lang: en_US
</script>-->	
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
 <?php
$host="localhost"; // change this to you servername
$user="pateles_root"; // change this to you username
$pass="Mayur1881!@#"; // change this to your password
$db="pateles_portal";  //chage this to the name of your database

$arr=array();


$conn = new mysqli($host, $user, $pass, $db);  // make sure to change this to the name of your connections string

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, skills FROM portal;";  //change the variables back to your database: id, skill (you can select as many columns as you want)
$result = $conn->query($sql);

if ($result->num_rows) {
    while($row = $result->fetch_assoc()) {
       // echo "id: ". $row["id"] .  "skill: " . $row["skills"];
		array_push($arr,"id: ". $row["id"] .  "skill: " . $row["skills"]);
		//print_r($arr);
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<br>
	<div class="container-fluid">
	<h1 style="text-align:center;">Semantic search </h1><br>
	
	<div class="container">
		<div class="col-md-5">
				<label for="comment">Job Description</label>
				<textarea class="form-control" rows="5" id="text1"></textarea>
		</div>
		
		<div class="col-md-2"></div>
		
		<div class="col-md-5">                                                                                                                                                                                                  
				<label for="comment">Result</label>
				<textarea class="form-control" rows="5" id="result"></textarea>
				<br><br>
		</div>
		

		
		<script>
		function apiCall() {
			
			var t1 = document.getElementById("text1").value;
			var t2 = <?php echo json_encode($arr); ?>
			//var semantic = 0;
			
			var result = [];
			var alumni = [];
			
			var request = new XMLHttpRequest();
			
		for(var i=0; i<t2.length; i++)
		{
			console.log(i);
			console.log(t2[i]);
			
			request.open('GET', 'https://api.dandelion.eu/datatxt/sim/v1/?token=dd111f4cf9bf432f817196d934c1867a&text1='+t1+'&text2='+t2[i]+'&lang=en', true);
			request.onload = function () 
			{

				var data = JSON.parse(this.response);
				console.log(i);
				console.log(data.similarity);

				if (request.status >= 200 && request.status < 400) {
					
					console.log(this.response);
				} 
				else {
				console.log(this.response);
				}
				document.getElementById("result").innerphp = data.similarity*100+"%";
				var semantic=data.similarity*100;

				//result.push(data.similarity*100);
				
				
				
			}
			
			request.send();	
		}
		//result.sort(function(a, b){return b - a});
		//var top = result.slice(0,10);
		
			 
		}
		</script>
	
		
		<div class="col-md-12">
			<button type="button" class="btn btn-primary btn-block" id="searchBtn" style=" width: 40%;" onclick="apiCall()">Search</button><br><br>
		</div>
		
		<div class="col-md-6">
			<button type="button" style=" width: 40%;" class="btn btn-primary">Semantic <span class="badge" id="sem" ></span></button>
			<br><br>
		</div>			
	
	</div>
  
  

  
  
	  </div>
 </div>
 
  </body>
  </html>



<!doctype html>
  <html><a id="top"></a>
  <meta charset="utf-8">
  <head>
  <script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key:   77cjwfihibcad3
    authorize: false
    onLoad: onLinkedInLoad
    lang: en_US

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="styles/styles2.css"> 
	  <style>
		  table { 
	text-align: left;
	font-weight: normal;
	width: 100%;
	height: 100%;
	margin: 0 auto;
	}
td {
	width: 50%;
	height: 59%;
	padding: 0px;
	}
tr {
	width: 50%;
	height: 50%;
	padding: 20px;
	}
	
	
		
	  </style>
  </head>
  
  <body>
  
  
  
  <div id="container">
  <header>
   <h1 style="text-align:center;">FAST Alumni social media portal</h1>
 <h3></h3>
  <h2>&nbsp;</h2>
  </header> 
  <nav align="center">
  <form>
	<button formaction="internal_Search.html">Search</button>
  	<button formaction="internal_Reports.html">Reports</button>
    <button formaction="internal_AddUser.html">Adjust User Profile</button>
    <button formaction="internal_AddJob.html">Add Job Description</button>
    <button formaction="logout.html">Logout</button>
    </form>
  </nav> 
 <main>
  <h2 style="text-align:center;">Authorized Pages - API Connection Test Page</h2>
  
  <h1 style="text-align:center;">  LinkedIn API Example</h1>
    <script type="in/Login"> 
      Hello, <?js= firstName ?> <?js= lastName ?>.
    </script>

<script  type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 77cjwfihibcad3
    authorize: false    
	onLoad: onLinkedInLoad
	</script>
    
<script type="text/javascript">
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }
    
    // Use the API call wrapper to request the member's profile data
    function getProfileData() {
        IN.API.Profile("me").fields("id", "firstName", "lastName", "headline", "location", "picture-url", "public-profile-url"
		, "email-address","positions:(id,company,summary)","summary").result(displayProfileData).error(onError);
    }

    // Handle the successful return from the API call
    function displayProfileData(data){
        var user = data.values[0];
        document.getElementById("picture").innerHTML = '<img src="'+user.pictureUrl+'" />';
        document.getElementById("name").innerHTML = user.firstName+' '+user.lastName;
        document.getElementById("intro").innerHTML = user.headline;
        document.getElementById("email").innerHTML = user.emailAddress;
        document.getElementById("location").innerHTML = user.location.name;
		document.getElementById("summary").innerHTML = user.summary;
        document.getElementById("link").innerHTML = '<a href="'+user.publicProfileUrl+'" target="_blank">Visit profile</a>';
        document.getElementById('profileData').style.display = 'block';
		
		var p = data.values[0].positions;
        var positionCount = p._total;
				
        for(var i = 0; i < 2; i++) {
          var company = p.values[i].company.name;
          var description = p.values[i].summary;
		  console.log( p.values[i].summary);
          document.getElementById("positions").innerHTML += "<div >" + company + "</div>";
		  document.getElementById("desc").innerHTML += "<div >" + description + "</div>";
        }
		
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }
    
    // Destroy the session of linkedin
    function logout(){
        IN.User.logout(removeProfileData);
    }
      // Remove profile data from page
    function removeProfileData(){
        document.getElementById('profileData').remove();
    }
</script>
  
  <div id="profileData" style="display: none;">
    <p><a href="javascript:void(0);" onclick="logout()">Logout</a></p>
    <div id="picture"></div>
    <div class="info">
        <p id="name"></p>
        <p id="intro"></p>
        <p id="email"></p>
        <p id="location"></p>
        <p id="summary"></p>
		<p id="positions"></p>
		<p id="desc"></p>
		<p id="link"></p>

    </div>
</div>

  </main>
  </div>
  </body>
  </html>


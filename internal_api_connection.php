<!doctype html>
  <html><a id="top"></a>
  <head>
  <script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key:   77lb0yac57usqe
    authorize: false
    onLoad: onLinkedInLoad
    lang: en_US
</script>
  <meta charset="utf-8">
  <title>API Connection</title>
  <link rel="stylesheet" type="text/css" href="styles/styles2.css"> 
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='js/dynamicpage.js'></script>
	  
<style>
.special {
	width: 100px;
	height: 100px;
	}	 
</style>
  </head>
  
  <body>
	   <div id="container">
  <header>
   <h1>FAST Alumni social media portal</h1>
 <h3></h3>
  <h2>&nbsp;</h2>
  </header> 
  <nav>
  <form>
	<button formaction="internal_AddUser.php">Manage Profiles</button>
    <button formaction="internal_AddJob.php">Candidate Search</button>
	<button formaction="internal_Reports.php">Reports</button>
	<button formaction="#">Manage Posts</button>
	<button formaction="internal_SearchFacebook.php">Facebook Portal</button>
	<button formaction="internal_SearchTwitter.php">Twitter Portal</button>
	<button formaction="internal_SearchLinkedIn.php">LinkedIn Portal</button>
	<button formaction="internal_api_connection.php">API Test</button>  
    <button formaction="logout.php">Logout</button>
  </form>
  </nav> 
  <main><!--Info exclusive to this page-->
  <h2>Authorized Pages - API Connection Test Page</h2>
<!--  <form id="form1" name="form1" method="post">-->
  <h1>LinkedIn API Example</h1>
	<script type="in/Login">
      <p>Hello, <?js= firstName ?> <?js= lastName ?>.</p>
	</script>
    
 <script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: D:77lb0yac57usqe
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
        IN.API.Profile("me").fields("id", "first-name", "last-name", "headline", "location", "picture-url", "public-profile-url", "email-address","skills").result(displayProfileData).error(onError);
    }

    // Handle the successful return from the API call
    	function displayProfileData(data){
        var user = data.values[0];
        document.getElementById("picture").innerphp = '<img src="'+user.pictureUrl+'" 	class="special"/>';
        document.getElementById("name").innerphp = 'Name: '+user.firstName+' '+user.lastName;
        document.getElementById("intro").innerphp = 'Headline: '+user.headline;
        document.getElementById("email").innerphp = 'Email: '+user.emailAddress;
        document.getElementById("location").innerphp = 'Location: '+user.location.name;
        document.getElementById("link").innerphp = '<a href="'+user.publicProfileUrl+'" target="_blank">Visit profile</a>';
        document.getElementById('profileData').style.display = 'block';
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
    <div id="picture"></div>
    <div class="info">
        <p id="name"></p>
        <p id="intro"></p>
        <p id="email"></p>
        <p id="location"></p>
        <p id="skills"></p>
		<p id="link"></p>
		<p><a href="javascript:void(0);" onclick="logout()">Logout</a></p>
    </div>
</div>

  </main>
  <footer>
<!--
  <em>Copyright &copy; B.A.S.E. G Lopez 2018</em>&nbsp;&nbsp;
  <a href="mailto:lopegeor@sheridanc.on.ca?Subject=Hello%20again" target="_top">Send Mail</a>
-->
  </footer></div>
  </body>
  </html>

  
  
  
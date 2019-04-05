<!doctype html>
  <html><a id="top"></a>
  <head>
  <meta charset="utf-8">
  <title>Facebook portal</title>
  <link rel="stylesheet" type="text/css" href="styles/styles2.css"> 
  <script type="text/javascript" src="https://unpkg.com/jso/dist/jso.js"></script>
   <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='js/dynamicpage.js'></script>
	  <style>
table { 
	text-align: left;
	font-weight: normal;
	width: 100%;
	height: 100%;
	margin: 0 auto;
	border: 0px;
	}
td {
	width: 50%;
	height: 59%;
	padding: 0px;
	border: 0px;
	}
tr {
	width: 50%;
	height: 50%;
	padding: 20px;
	border: 0px;
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
  <h2>Authorized Pages - Facebook Web Portal</h2>
  <form id="form1" name="form1" method="post">
 
	  <table width="100%" border="1" cellpadding="5">
  <tbody>
    <tr>
      <td> <label>Enter Alumni Facebook ID: </label><input type="text"><br><br>
		  <label id="exceptionMessage"></label>
  <input type="submit" value="Search">&nbsp;<input type="reset"></td>
	  <td><br><br><br><br></td>
    </tr>
    <tr>
      <td><br><br><br><br></td>
	  <td><label>Facebook User Name: </label><label id="userName"></label>
  <br>
	<label>Facebook User Phone#: </label><label id="userPhone"></label>
  <br>
	<label>Facebook User Email: </label><label id="userEmail"></label>
  <br><br>
	<input type="submit" value="Facebook Page">
		</td>
    </tr>
    <tr>
      <td><br><br><br><br></td>
      <td><br><br><br><br></td>
      </tr>
  </tbody>
</table>
  </form>
  
  
  </main>
  <footer>
<!--
  <em>Copyright &copy; B.A.S.E. G Lopez 2018</em>&nbsp;&nbsp;
  <a href="mailto:lopegeor@sheridanc.on.ca?Subject=Hello%20again" target="_top">Send Mail</a>
-->
  </footer></div>
  </body>
  </html>



<!doctype html>
  <html><a id="top"></a>
  <head>
  <meta charset="utf-8">
  <title>My Account</title>
  <link rel="stylesheet" type="text/css" href="styles/styles4.css"> 
  <style>
  table { 
	text-align: center;
	font-weight: normal;
	width: 100%;
	height: 100%;
	margin: 0 auto;
	}
td {
	width: 33%;
	height: 33%;
	}
tr {
	width: 33%;
	height: 33%;
	}
.alignLeft {
	text-align: left;
	}
.alignRight {
	text-align: right;
	}
.alignCenter {
	text-align: center;
	}
.inputFormat {
	font-weight: bold;
	font-size: 12px;
	font-family: verdana;
	}
.inputFormatTwo {
	width: 642px;
	}
.inputFormatThree {
	width: 275px;
	}
.inputFormatFour {
	width: 275px;
	height: 20px;
	border-radius: 5px;
	background-color: #F5F5DC;
	}
.labelFormatOne {
	width: 275px;
	height: 20px;
	background-color: #B0C4DE;
	border: 1px solid #C0C0C0;
	border-radius: 5px;
	}
.labelFormatTwo {
	width: 916px;
	height: 20px;
	background-color: #B0C4DE;
	border: 1px solid #C0C0C0;
	border-radius: 5px;
	}
.labelFormatThree {
	width: 436px;
	height: 20px;
	background-color: #B0C4DE;
	border: 1px solid #C0C0C0;
	border-radius: 5px;
	}
input:focus { 
	border: 2px solid ##FFD700;
/*	border-radius: 3px;*/
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
	<button formaction="pageStudentEditProfile.php" tabindex="24">Edit Profile</button>
	<button formaction="pageStudentMessages.php" tabindex="26">Message</button> 
	<button formaction="pageStudentLogout.php" tabindex="27">Logout</button>
    </form>
  </nav> 
 <!--Info exclusive to this page-->
 <form id="form1" name="form1" method="post">  
  <main>
    <script>
var f = localStorage.getItem('fname');
var l = localStorage.getItem('lname');
var e = localStorage.getItem('email');
//var emailid = localStorage.getItem('email');
document.getElementById("email").value =e;
document.getElementById("fname").value = f;
document.getElementById("lname").value = l;
document.getElementById("company").value = "c";
</script>
  <h2 class="alignLeft">My Account - Update yours skills and profile information</h2>
 <div class="groupOne">
  <div id="containerTwo">
<!--	  <h4>Student General Information</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">First name </label><br>
  <input type="text"  name="fname" id="fname" class="labelFormatOne" value="" tabindex="1"></input><br><br>
  <label class="inputFormat">Non-Sheridan (Primary) Email address </label><br>
  <textarea readonly name="email" id="email" class="labelFormatOne" tabindex="4"></textarea><br><br>
  <label class="inputFormat">Facebook account user ID </label><br>
  <textarea readonly name="facebook_sm" class="labelFormatOne" tabindex="7"></textarea><br>
	  </div>
	  </div>
<div id="containerThree">
<!--	 <h4>&nbsp;</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Last name </label><br>
  <textarea readonly name="lname" id="lname" class="labelFormatOne" tabindex="2"></textarea><br><br>
  <label class="inputFormat">Secondary Email address </label><br>
  <textarea readonly name="email_2" accesskey=""class="labelFormatOne" tabindex="5"></textarea><br><br>
  <label class="inputFormat">Twitter account user ID</label><br>
  <textarea readonly name="twitter_sm" class="labelFormatOne" tabindex="8"></textarea><br>
	</div>
	  </div>
<div id="containerFour">
<!--	<h4>&nbsp;<button formaction="pageStudentEditProfile.php">Edit Profile</button></h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Sheridan/Student ID </label><br>
  <textarea readonly name="stu_id" class="labelFormatOne" tabindex="3"></textarea><br><br>
  <label class="inputFormat">LinkedIn account user ID</label><br>
  <textarea readonly name="linkedin_sm" class="labelFormatOne" tabindex="6"></textarea><br><br>
  <label class="inputFormat">Sheridan College Campus </label><br>	  
  <textarea readonly name="campus_sh" class="labelFormatOne" tabindex="9"></textarea><br>
	</div>
	  </div>
      </div> <!--	  end of group one-->


<div class="groupTwo">
	<div id="containerFive">
<!--	  <h4>Student General Information</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Skills and area of interest #1 </label><br>
  <textarea readonly name="skill_1" class="labelFormatThree" tabindex="10"></textarea><br><br>
  <label class="inputFormat">Skills and area of interest #3 </label><br>
 <textarea readonly name="skill_3" class="labelFormatThree" tabindex="12"></textarea><br>
	  </div>
	  </div>
<div id="containerSix">
<!--	 <h4>&nbsp;</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Skills and area of interest #2 </label><br>
  <textarea readonly name="skill_2" class="labelFormatThree" tabindex="11"></textarea><br><br>
  <label class="inputFormat">Current position </label><br>
 <textarea readonly name="curr_pos" class="labelFormatThree" placeholder="This field can get pulled from LinkedIn at sign in" tabindex="13"></textarea><br>
	</div>
	  </div>
	  </div><!--	  end of group one two-->	  
	  
	  
<div class="groupThree">
	<div class="fixMargins">
	<label class="inputFormat">Name of FAST program</label><br>
  <textarea readonly name="program_fast" class="labelFormatTwo" tabindex="14"></textarea><br><br>
	</div>
	  </div><!--	  end of group three-->
	
 
	  
  <div class="groupFour">
  <div id="containerTwo">
<!--	  <h4>Student General Information</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">FAST program code </label><br>
  <textarea readonly name="program_code" class="labelFormatOne" placeholder="This field is pulled from database" tabindex="15"></textarea><br><br>
  <label class="inputFormat">Graduation date </label><br>
 <input readonly type="date" name="grad_date" class="labelFormatOne" tabindex="18"><br>
	  </div>
	  </div>
<div id="containerThree">
<!--	 <h4>&nbsp;</h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Current employment status </label><br>
  <textarea readonly name="status_emp" class="labelFormatOne" tabindex="16"></textarea><br><br>
  <label class="inputFormat">Graduation date timeframe </label><br>
	  <textarea readonly name="grad_tf" type="text" class="labelFormatOne" tabindex="19"></textarea><br>
<!--
	  <select readonly class="labelFormatOne" placeholder="Select">
		  <option value="0">SELECT</option>
		  <option value="1">Expected</option>
		  <option value="2">Actual</option> 
	  </select><br>
-->
	  
	</div>
	  </div>
<div id="containerFour">
<!--	<h4>&nbsp;<button formaction="pageStudentEditProfile.php">Edit Profile</button></h4>-->
  <div class="fixMargins">
  <label class="inputFormat">Current academic status </label><br>
  <textarea readonly name="company" id="company" class="labelFormatOne" tabindex="17"></textarea><br><br>
	</div>
	  </div>
      </div> <!--	  end of group one four-->
	   
 <br />
  </main>
	  </form>
<!--	  <div class="push"></div>-->
  <footer>
     <table>
      <tbody>
        <tr>
           <td class="alignLeft">&nbsp;<a href="https://www.youtube.com/user/SheridanInstitute" target="_blank" tabindex="20">Sheridan College on YouTube</a></td>
          <td>
<!--
			  <b><em>Copyright &copy; B.A.S.E. G Lopez 2018</em>&nbsp;&nbsp;
  <a href="mailto:lopegeor@sheridanc.on.ca?Subject=Hello%20again" target="_top">Send Mail</a></b>
-->
			</td>
          <td class="alignRight">
			   <a href="https://www.facebook.com/login" target="_blank" tabindex="21"><img src="images/Facebook.png" width="95" height="25" alt="Facebook Hompage"/></a> &nbsp;
			  <a href="https://twitter.com/login " target="_blank" tabindex="22"><img src="images/Twitter.png" width="95" height="25" alt="Twitter Homepage"/></a> &nbsp;
			  <a href="https://www.linkedin.com/uas/login?trk=hb_signin" target="_blank" tabindex="23"><img src="images/LinkedIn.png" width="95" height="25" alt="LinkedIn Homepage"/></a>&nbsp;
			</td>
        </tr>
        <tr>
          <td class="alignLeft">&nbsp;<small>https://www.youtube.com/user/SheridanInstitute</small></td>
          <td>&nbsp;</td>
          <td class="alignRight">&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </footer></div>
  </body>
  </html>



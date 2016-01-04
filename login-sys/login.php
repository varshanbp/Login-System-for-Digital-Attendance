<!--
LICENSED AS OPEN SOURCE UNDER ATTRIBUTION ASSURANCE LICENSE
Made by "Johnson S, Suraj P, Suvith Kumar CV, Varshan BP"
See "LICENSE.MD" file present in Root Folder
CSS Author: W3layouts
CSS Author URL: http://w3layouts.com
License for CSS files: Creative Commons Attribution 3.0 Unported
License URL License for CSS files: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Login Page :: JSSV Digital Attendance</title>
<!-- For-Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }  </script>
<!-- For-Mobile -->
<!-- Style Tag-->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>Signup/Login</h1>
	<div class="signin">
     	<form action="../includes/login-check.php" method="POST" onsubmit="return(fCheck());">
	      	<input type="text" name="uname" id="uname" class="user" value="Enter Username" oninput="nmCheck()" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Username';}" />
              <div class="ec1" id="nmerror"></div><br>
					<input type="password" name="pwd" id="pwd" maxlength="6" size="6" class="pass" value="******" oninput="pwCheck()"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '******';}" />
              <div class="ec2" id="pwerror"></div>
					<label>
		  	</label>
          	<input type="submit" value="LOGIN" />
	 	</form>
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; 2016 under Attribution Assurance License. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a>, <a href="https://www.hweb.in.net">Hyperion Web</a> and modified by JSSV.</p>
</div>
<script src="js/checkform.js"></script>
<script src="js/snowstorm.js"></script>
</body>
</html>

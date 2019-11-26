<!DOCTYPE HTML>
	<head>
		<meta charset "UTF-8"/>
      <link rel="stylesheet" type="text/css" href="sigin.css"> 
      <!-- مكتبة فونت اوسوم-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<title>تسجيل الدخول</title>
<body>
	<center>
		<!--صورة الشعار-->
		<img src="pics/logo.png" style="margin-top: 20px;"/>
		
		<!--الديف الخاص بالفورم-->
	<div class="sign" style="margin:0 auto">
		
	  <!--فورم تسجيل الدخول-->
		<form id="signform" align="center" action="" method="post">
			<h1>تسجيل الدخول</h1>
			<input type="text" placeholder="ادخل اسم المستخدم" required name="user_name"/><br><br>
			<input type="password" placeholder="ادخل كلمة المرور" required name="pass"/><br><br>
			<input type="submit" value="ادخلني" name="login" id="siginsubmit">
			<h3 style="margin-bottom: 0px; ">ليس  لديك حساب ؟</h3><a href="http://localhost/myproject/sigup.php">
				<h4 style="margin-top:1px; "><b>قم بانشاء حساب</b></h4></a>
		</form>	
	</div>
	
	<!--ديف السوشيال ميديا-->
<div class="icon-bar">
  <a href="https://www.facebook.com/iread.ly/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
	</center>
	
<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="iread";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	if(isset($_POST['login'])){
	var_dump($_POST);
	$user_name=$_POST['user_name'];
	$password=$_POST['pass'];
	
	
	$sql = "SELECT * FROM users where user_name='$user_name' and pass='$password' ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {?>
	<h1><?php echo $row['first_name'];echo  "  ";echo "مرحبا بك";  ?></h1>
	 
	 
	  <?php  }
	} else {
	   echo "<script type=\"text/javascript\">
	  alert('worng passowrd')
	  window.location='http://localhost/myproject/sigin.php';</script>
	  " ;
	}
	}

?>
</body>
	
</html>
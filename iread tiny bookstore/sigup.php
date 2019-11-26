<html>
	<head>
		<meta charset="UTF-8" />
 		 <link rel="stylesheet" type="text/css" href="sigin.css"> 
			   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 </style>
		 <title>إنشاء حساب</title>
	</head>
	<!---->
<body bgcolor="#F0E6E7">
	<center>
			<img src="pics/logo.png"/>
			
		<!--ديف التسجيل جديد-->	
	<div class="sigup" style="margin:0 auto">
		<!--فورم الحساب الجديد-->
		<form id="sigupform" align="center" method="post" action="">
			<h2 style="margin-bottom:5px; margin-top:1px; color:black; "><b>تسجيل حساب جديد</b></h2><hr style="width:300px;"><br>
			<label><b><i>الاسم</i></b></label><br>
			<input type="text" placeholder="اللقب" required style="width: 150px;" name="last_name"/>
			<input type="text" placeholder="الاسم الأول" required style="width: 150px;" name="first_name"/><br>
			<label><b><i>إسم المستخدم</i></b></label><br>
			<input type="text"  placeholder="اسم المستخدم" required name="user_name"/><br>
			<label><b><i>بريدك الالكتروني</i></b></label><br>
			<input type="email" placeholder="ادخل بريدك الالكتروني" required name="email"/><br>
		
			<label><b><i>كلمة السر</i></b></label><br>
			<input type="password" placeholder="يجب ان تحتوي علي الاقل 3 حروف انجليزية" required name="pass"/><br><br>
			
			<label><b><i>أعد كتابة كلمة السر</i></b></label><br>
			<input type="password" placeholder="أكد كلمة المرور" required name="repass"/><br><br>
			
			<input type="submit" value="تسجيل" id="sigupsubmit" name="done"/>
			
			<h3 style="margin-bottom: 0px; "><b>لديك حساب بالفعل؟</b></h3><a href="http://localhost/myproject/sigin.php">
				<h4 style="margin-top:1px; "><b>تسجيل الدخول</b></h4></a>
			</div>
	</center>
		</form>
		<!--ديف السوشيال ميديا-->
		<div class="icon-bar">
  <a href="https://www.facebook.com/iread.ly/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>


<?php
/*اتصال بقاعدة البيانات*/
		$servername="localhost";
		$username="root";
		$password="";
		$database="iread";
		//create connection
		$conn=new mysqli($servername , $username , $password , $database);
		
	if($conn->connect_error){
			die("connection failed:".$conn->connect_error);
		}
		else {
			echo "connected successfully";
		}
		
/*تخزين البيانات*/
	if(isset($_POST['done'])){
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$user_name=$_POST['user_name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$repass=$_POST['repass'];

/*ادخال البيانات */
 $sql = "INSERT INTO users (first_name, last_name, user_name, email, pass)
VALUES ('$first_name',  '$last_name', '$user_name', '$email', '$pass')";

/*التاكد من كلمة المرور*/

if($pass!=$repass){
		echo ("<script LANGUAGE='JavaScript'>
					    window.alert('كلمات المرور غير متطابقة ');
					    window.location.href='http://localhost/myproject/sigup.php';
					    </script>");
	die();
	}
elseif ($conn->query($sql) === TRUE) {
				
					echo ("<script LANGUAGE='JavaScript'>
					    window.alert('لقد تم تسجيلك بنجاح يمكنك الان تسجيل الدخول ');
					    window.location.href='http://localhost/myproject/sigin.php';
					    </script>");
					}
} 

 
 
?>


	</body>
	
</html>
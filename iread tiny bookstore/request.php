<html>
	<head>
		<meta charset "utf-8" />
      <link rel="stylesheet" type="text/css" href="sigin.css"> 
      <!-- مكتبة فونت اوسوم-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<title>التوصية</title>
		<body background="pics/req_bg.jpg">
		<center>
		<!--صورة الشعار-->
		<img src="pics/logo1.png" style="margin-top: 20px;"/>
		
		<!--الديف الخاص بالفورم-->
	
	<div class="sign" style="margin:0 auto">
		
	  <!--فورم التوصية-->
			<form method="post" id="signform" align="center" action="">
				<h2>التوصية علي كتاب</h2>
				
				<label>اسم الكتاب</label><br>
				<input type="text" placeholder="ادخل اسم الكتاب" name="book_name" required/><br>
				
				<label>اسم المؤلف</label><br>
				<input type="text" placeholder="اسم المؤلف" name="author" required/><br>
				
				<label>رقم هاتفك</label><br>
				<input type="text" name="phone" placeholder="سيتم التواصل معك عن طريقه عند توفر الكتاب"/><br>
				
				<input type="submit" name="done" value="أرسل" id="siginsubmit"/>
				
			</form>		
			</center>	
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
			$book_name=$_POST['book_name'];
			$author=$_POST['author'];
			$phone=$_POST['phone'];

/*ادخال البيانات */
 $sql = "INSERT INTO requests (book_name, author, phone)
VALUES ('$book_name',  '$author', '$phone')";



			if ($conn->query($sql) === TRUE) {
					echo ("<script LANGUAGE='JavaScript'>
					    window.alert('لقد تم استلام طلبك  سيتم التواصل معك عند توفره');
					    window.location.href='http://localhost/myproject/index.php';
					    </script>");
					}
} 

 
 
?>

</body>
</html>
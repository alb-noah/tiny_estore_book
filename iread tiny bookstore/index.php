
<!DOCTYPE HTML>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<title>الصفحةالرئيسية</title>
	
	<body bgcolor="#F0E6E7">
		<!-- الجزء العلوي من الصفحة-->
		<div class="paren">
			
			<!--ديف الشعار-->	
					<div class="iread"><img src="pics/logo1.png" width="150"/></div>
				
		
			<!--ديف صندوق البحث-->
			<div class="srch">
				<form class="sbar">
				    <input type="text" placeholder="إبحث عن طريق اسم الكتاب او اسم المؤلف .." name="search">
	  				<button type="submit"><i class="fa fa-search"></i></button>
	   			 </form>
	   		 </div>
			<!--ديف روابط الدخول-->
			<div class="linkat">
				<form class="new">
				<button id="msin"><a href="http://localhost/myproject/sigup.php" target="_blank"  style="text-decoration:none; color: white; font-size: larger; font-weight: bold;">تسجيل جديد</a></button>
				<button id="msup"><a href="http://localhost/myproject/sigin.php" target="_blank"  style="text-decoration:none; color: white; font-size: larger; font-weight: bold;">تسجيل الدخول</a></button>
				
				</form>
			</div>
		</div>
		<!--ديف السلايد شو-->
		<div class="slideshow-container">

			<div class="mySlides fade" >
			  <div class="numbertext"></div>
			  <img src="pics/slide1.png" style="width:100%">
			  <div class="text"></div>
			</div>
			
			<div class="mySlides fade" >
			  <div class="numbertext"></div>
			  <img src="pics/slide2.png" style="width:100%">
			  <div class="text"></div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div>
</div>


  <!--تابات ومحتوي المكتبة-->
<div class="information-blocks products-grid"></div>
 <div class="tab">
 	
  <button class="tablinks" onclick="openCity(event, 'rwaea')">روايات</button>
  <button class="tablinks" onclick="openCity(event, '3am')">ثقافة عامة</button>
  <button class="tablinks" onclick="openCity(event, 'qareban')">يتوفر قريبا</button>
</div>





<!-- محتوي الروايات-->
<br><br><br><br>
<div>
<div id="rwaea" class="tabcontent">
  <div class="raf1" >
 			<!--كتاب1-->
 			<div class="cont1">
 			<div><img src="books/antikhrestos.jpg"/></div><hr>
 			<p>
 			<h3>أنتيخريستوس</h3>
 			<h4>المؤلف : أحمد خالد مصطفي</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_antikhrestos.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب2-->
 			<div class="cont1">
 			<div><img src="books/ardzikola.jpg"/></div><hr>
 			<p>
 			<h3>أرض زيكولا</h3>
 			<h4>المؤلف : عمرو عبدالحميد</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_ardzikola.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			
 			<!--كتاب3-->
 			
 			<div class="cont1">
 			<div><img src="books/mazrat_alhewan.jpeg"/></div><hr>
 			<p>
 			<h3>مزرعة الحيوان</h3>
 			<h4>المؤلف : جورج أورويل</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_3adat7.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			
 	</div><br><br><br>
</div>





<!-- محتوي الكتب المنوعة-->
<div id="3am" class="tabcontent">
  <br>
 <div class="content">
 	<div class="raf1" >
 			<!--كتاب1-->
 			<div class="cont1">
 			<div><img src="books/ibqa.jpg"/></div><hr>
 			<p>
 			<h3>إبق قويا 365 يوم</h3>
 			<h4>المؤلف : ديمي لوفانو</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_ibqa365.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب2-->
 			<div class="cont1">
 			<div><img src="books/fan_lambala.jpg"/></div><hr>
 			<p>
 			<h3>فن اللامبالاة</h3>
 			<h4>المؤلف : مارك مانسون</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_fanlambala.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			
 			<!--كتاب3-->
 			
 			<div class="cont1">
 			<div><img src="books/3adat7.png"/></div><hr>
 			<p>
 			<h3>العادات الـ7 للناس الاكثر فعالية</h3>
 			<h4>المؤلف : ستيفن ار كوفي </h4>
 			</p>
 			<div class="price">25 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_3adat7.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب4-->
 			
 			<div class="cont1">
 			<div><img src="books/kefahi.png"/></div><hr>
 			<p>
 			<h3>كفاحي</h3>
 			<h4>المؤلف : مذكرات أدولف هتلر</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_kefahi.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب5-->
 			
 			<div class="cont1">
 			<div><img src="books/faker_wa.jpg"/></div><hr>
 			<p>
 			<h3>فكر و إزدد ثراء</h3>
 			<h4>المؤلف : نابليون هيل</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_faker_wa.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 	</div>
 	</div><br><br><br>
 	<!--الرف الثاني من الكتب العامة-->
 		<div class="raf2" >
 			<!--كتاب6-->
 			<div class="cont1">
 			<div><img src="books/kwat_alan.jpg"/></div><hr>
 			<p>
 			<h3>قوة الان</h3>
 			<h4>المؤلف : إكهارت تول</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_kwat_alan.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب7-->
 			<div class="cont1">
 			<div><img src="books/game_nations.jpg"/></div><hr>
 			<p>
 			<h3>لعبة الأمم</h3>
 			<h4>المؤلف : مايلز كوبلاند</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_gamenations.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			
 			<!--كتاب8-->
 			
 			<div class="cont1">
 			<div><img src="books/masonwa.jpg"/></div><hr>
 			<p>
 			<h3>الماسونية والثورات الشعبية</h3>
 			<h4>المؤلف : منصور عبدالحكيم</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_masonwa_twrat.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب9-->
 			
 			<div class="cont1">
 			<div><img src="books/fan_antakwn.jpg"/></div><hr>
 			<p>
 			<h3>فن أن تكون علي صواب</h3>
 			<h4>المؤلف : آرثر شوبنهاور</h4>
 			</p>
 			<div class="price">20 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_fan_antakwn.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب10-->
 			
 			<div class="cont1">
 			<div><img src="books/al_amer.jpg"/></div><hr>
 			<p>
 			<h3>الأمـيـر</h3>
 			<h4>المؤلف : نيكولو ميكافيلي</h4>
 			</p>
 			<div class="price">25 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_alameer.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 	
 	</div><br><br><br>
 	<!--الرف الثالت-->
 	<div class="raf3" >
 			<!--كتاب11-->
 			<div class="cont1">
 			<div><img src="books/alabalghane.jpg"/></div><hr>
 			<p>
 			<h3>الأب الغني و الأب الفقير</h3>
 			<h4>المؤلف : روبرت كيوساكي</h4>
 			</p>
 			<div class="price">25 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_alabalghane_wa_alfaker.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب12-->
 			<div class="cont1">
 			<div><img src="books/hakada_meem.jpg"/></div><hr>
 			<p>
 			<h3>هكذا تأملت الكاهنة ميم</h3>
 			<h4>المؤلف :  إبراهيم الكوني</h4>
 			</p>
 			<div class="price">15 د.ل</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="" download style="text-decoration:none;">غير متوفرة</a>
					</button>
				</form>
 			</div>
 			
</div>

 		
</div>



 			
 	</div>
<!--تاب قريبا-->
<div id="qareban" class="tabcontent">
<div class="raf1" >
 			<!--كتاب1-->
 			<div class="cont1">
 			<div><img src="books/momezbeasfer.jpg"/></div><hr>
 			<p>
 			<h3>مميز بالأصفر</h3>
 			<h4>المؤلف : إتش جاكسون براون</h4>
 			</p>
 			<div class="price">لم يحدد</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_momezbeasfer.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب2-->
 			<div class="cont1">
 			<div><img src="books/ecstasy.png"/></div><hr>
 			<p>
 			<h3>إكستاسي</h3>
 			<h4>المؤلف : عبدالهادي العمشان</h4>
 			</p>
 			<div class="price">لم يحدد</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_ecstasy.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			
 			<!--كتاب3-->
 			
 			<div class="cont1">
 			<div><img src="books/40ahmad.jpg"/></div><hr>
 			<p>
 			<h3>أربـعـون</h3>
 			<h4>أحمد الشقيري</h4>
 			</p>
 			<div class="price">لم يحدد</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_40ahmad.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب4-->
 			<div class="cont1">
 			<div><img src="books/fostk.jpg"/></div><hr>
 			<p>
 			<h3>نظرية الفستق</h3>
 			<h4>المؤلف : فهد الأحمدي</h4>
 			</p>
 			<div class="price">لم يحدد</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_fostk.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 			<!--كتاب5-->
 			<div class="cont1">
 			<div><img src="books/alaswad.jpg"/></div><hr>
 			<p>
 			<h3>الأسود يليق بك</h3>
 			<h4>المؤلف : أحلام مستغانمي</h4>
 			</p>
 			<div class="price">لم يحدد</div><br>
	 			<form>
	 				<button id="down" >
	 				<a href="pdf/iread_alaswad.pdf" download style="text-decoration:none;">تحميل الكتاب</a>
					</button>
				</form>
 			</div>
 	</div>
</div>
<br><br><br>
</div>


<!-------------------------->
<!--سكربت التابات-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

		
<!--سكربت السلايد-->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>
		<!--items section-->
		<center>
		<marquee style="width: 50%; height: 50px; text-align:center; font-family:amiri; background-color:#d6dae0; border-radius: 10px; font-size:18px; margin-bottom: 0px; " direction="up" scrollamount="1" behavior="alternate"><b>لطلب نسختك تواصل معنا عن طريق رقم الهاتف او عن طريق صفحتنا علي الفيسبوك</b></marquee>
		</center>
	</body><hr>
<footer style="width: 100%; height: 20%; background-color: #37475a;padding: 15px;">
		
	<table>
		<tr>
					<td width="5%"><a href="https://www.facebook.com/iread.ly" target="_blank"><img src="pics/fb.png" style="margin-left: 20px;"/></a></td>
			<td width="5%"><a href="https://www.twitter.com" target="_blank"><img src="pics/twi.png"style="margin-left: 25px;"/></td>
				<td width="10%"></td>
			<td style="margin-left: 10px;" width="5%"><img src="pics/fon.png"></td><td><h4 style="color: white;">+218-91-704-09-97</h4></td>
			<td style="width: 5%;"><img src="pics/gmail.png"/></td><td><h4 style="color: white;">baghdadi2525@gmail.com</h4></td>
			
			<td>
			<form>
				<button value="قم بالتوصية" id="bfot"/><a href="http://localhost/myproject/request.php" style="text-decoration: none; font-size: 15px; color: black;">قم بالتوصية</a></button>
			</form>
			</td>
			<td><h3 style="color: white;">لم تجد ماتبحث عنه ؟</h3></td>
		</tr>
	</table>
	</footer>
</html>
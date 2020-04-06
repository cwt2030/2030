 
<?php
    
    $servername ="localhost:3306";
    $username ="ippdf";
    $password ="oraX@2030";
    $dbname = "admin_ippdf";
    //الاتصال بقاعدة البيانات 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
     
 
?>


<?php

// فتح الجلسه لاستدعاء قيمتها
session_start();

// داله للتحقق من وجود قيمه فى جلسة username
if(!isset($_SESSION['username'])){
	// اذا كانت القيمه فارغه يتم الانتقال الى صفحة تسجيل الدخول
	header("Location: login.php");
	exit();
}


?>



<?php
// استدعاء ملف الاتصال بقاعدة البيانات
 
// فتح جلسه
session_start();

// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from userdata where Name = '$user' && Pass = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['username'] = $user;
		// ثم يتم الانتقال الى منطقة الاعضاء
		header("Location: cp.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور خاطأ';
	}
	
	
}
?>
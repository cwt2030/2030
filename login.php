 
<?php
    
    $servername ="localhost:3306";
    $username ="ippdf";
    $password ="oraX@2030";
    $dbname = "admin_ippdf";
    //الاتصال بقاعدة البيانات 
    $conn = new mysqli($servername, $username, $password, $dbname);
 
     
 



 

 
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$qu = "select * from userdata where Name = '$user' && Pass = '$pass'";
  

 

if(mysqli_num_rows(mysqli_query($conn, $qu)) > 0){
   header("Location:typecode.html");
	
} 
elseif ($user=='root' && $pass=='123' ) {
   header("Location:admin.php");
}
else {
	
	header("Location:index.html");
 
 
 }
}
?>

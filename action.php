<!-- cheking User submitted data using the $_POST superglobal-->
<!-- create using the file action.php and add the following cod it -->


<?php
	  $servername ="localhost:3306";
      $username ="ippdf";
	  $password ="oraX@2030";
	  $dbname = "admin_ippdf";
	  //الاتصال بقاعدة البيانات 
      $conn = new mysqli($servername, $username, $password, $dbname);
      $col =$_POST["name1"];
      $Rest =$_POST["Phone"];
      $Pass =$_POST["Password"]

  ?>





<?php
/*
$user ="username";
$pass ="password";
if (isset($_POST["username"]))
{
    $user=$_POST["username"]
}
if (isset($_POST["password"]))
{
    $pass=$_POST["password"]
}
each "Dear $user, your password is " $pass";
 
*/





$sql ="INSERT INTO userdata (Name, Phone, Pass ) VALUES ('$col' ,'$Rest' ,'$Pass')";
mysqli_query($conn,$sql);

 ?>
 
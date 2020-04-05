
<!DOCTYPE html>
<html >
    <head>
        <link href="css.css" rel="stylesheet" >
    </head>
    <body>
        
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

        <div class="div1">
            <b>
                welcome to Admin
            </b>
 
        </div>
        <div class="form">
		<form action="admin.php" method="post">
			Name:<input type="text" name="name1"required>
			<br><br><br>
			 
            Phone:<input type="text" name="Phone" required>
             <br><br><br><br>
             Password:<input type="password" name="Password"required>
             <br><br><br><br>
 

			<input type="submit" >
                </form>
            </div>

            <?php
    $sql ="INSERT INTO userdata (Name, Phone, Pass ) VALUES ('$col' ,'$Rest' ,'$Pass')";
    mysqli_query($conn,$sql);

            ?>
    <?php

        $stmt = $conn->prepare("select * from userdata");
        $stmt->execute();
        $result =$stmt->get_result();

        echo "<table ";
        while($row = $result ->fetch_assoc()){
            
 echo "<tr><td>".$row['Name']."</td><td>".$row['Phone']."</td><td>".$row['date']."</td><td>".$row['Pass']."</td></tr>";

        }
        echo  "</table>"

     ?>

		<footer>
        End !
    </footer>

    </body>
</html>
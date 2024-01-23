
<!DOCTYPE html>
        <html lang="en">
        <head>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<title>Fetch Page</title>
        	<style>

h3{
	color: green;
	text-transform: capitalize;

}
h4{
	color: red;
	text-transform: capitalize;
}

button{
  background-color: #04AA6D;
  padding: 10px;
  border: none;
}
a{
	color: black;
	text-decoration:none;
}

        	</style>
        </head>
        <body>
        	
<button><a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=my-crud&table=record">SHOW DATABAE</a></button>
<button><a href="http://localhost/CRUD/ShowDb.php">SHOW ADMIN</a></button>

        </body>
        </html>
<?php

include("conn.php");
error_reporting(0);


?>

<?php
$id=$_REQUEST['Id'];
$nam=$_REQUEST['Name'];
$mail=$_REQUEST['Email'];
$pass=$_REQUEST['Password'];
$con=$_REQUEST['country'];
$sub=$_REQUEST['subject'];


$sql = "INSERT INTO Record  VALUES ($id,'$nam',
            '$mail','$pass','$con','$sub')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";
        } 
        else{
            echo "<h4>ERROR: Hush! Sorry $sql. </h4>"
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>

        

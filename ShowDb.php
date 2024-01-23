<style>
*{
  margin: 0;
  padding: 0;
  font-family: Humnst777 Blk BT;
}

h1{
  text-align: center;
  padding: 20px;
}
th{
  background: lightgreen;
  border: ;
  height: 40px;
}
td{
  height: 30px;
  padding: 10px;
}
.edit-btn{
  background: lightgreen;
  border: none;
  padding: 12px;
}

.delete-btn{
  background: red;
  border: none;
  padding: 12px;
}

</style>


<?php
include("conn.php");
echo"<h1>MY DATABASE</h1>";
$sql = "SELECT * FROM Record";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                   <th>Country</th>
                <th>Subject</th>
              
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["Id"]}</td><td>{$row["Name"]} </td><td>{$row["Email"]}</td><td>{$row["Password"]}</td><td>{$row["Country"]}</td><td>{$row["Subject"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["Id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["Id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>

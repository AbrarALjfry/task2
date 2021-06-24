<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="task1";

 $conn=@mysqli_connect($server_name,$username,$password,$database_name);
  if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 }
  if(isset($_POST['forward'])){ 
 $sql = "INSERT INTO table_for_task2(directione	)VALUES ('forward')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['forward'];
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
  }
/*--------------------------------------------------------------------------------------*/
else if(isset($_POST['right'])){
 $sql = "INSERT INTO table_for_task2(directione	)VALUES('right')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['right'];
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
/*--------------------------------------------------------------------------------------*/
else if(isset($_POST['stop'])){
 $sql = "INSERT INTO table_for_task2(directione	)VALUES ('stop')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['stop'];
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
/*--------------------------------------------------------------------------------------*/
else if(isset($_POST['left'])){
 $sql = "INSERT INTO table_for_task2(directione	)VALUES ('left')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['left']; 
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
/*--------------------------------------------------------------------------------------*/
else if(isset($_POST['backward'])){
 $sql = "INSERT INTO table_for_task2(directione	)VALUES('backward')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['backward']; 
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
 mysqli_close($conn);	

?>
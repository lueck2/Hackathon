<?php
$connect = mysqli_connect("localhost:3306","root","","test");

if (mysqli_connect_errno($connect))
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="INSERT INTO IncomingTxt (from, subject, text)
VALUES('$_POST[from]','$_POST[subject]','$_POST[text]')";
  
  var_dump($sql);
echo "1 record added";

?>

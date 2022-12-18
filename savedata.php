<?php 

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_phone = $_POST['sphone'];
 
$conn= mysqli_connect("localhost","root","","db_form") or die("connection fild");
$sql=" INSERT INTO filling (sname,saddress,sphone) VALUES ('{$stu_name }','{$stu_address}','{$stu_phone }')" ;
$result = mysqli_query($conn, $sql) or die ("unsussefull query.");

 header("location: http://localhost/lucky/winner.html");
 mysqli_close($conn)
?>
<?php
session_start();
header('location:child-labors.html');

$username='root';
$password='';
$server='localhost';
$db='xyz1';
$con=mysqli_connect('localhost','root');
if($con){
    ?>
    <script>
      alert('connection successful');

    </script>
    <?php
}
else{
     die("no connection" . mysqli_connect_error());
}

mysqli_select_db($con, 'xyz1');

$name=$_POST["User_id"];
$email=$_POST["email"];
$password=$_POST["password"];
$submit=$_POST["submit"];
#$q="select * from ngot where Name='$name' && Password='$password' ";
$q="SELECT * FROM `ngot` WHERE Name='$name' AND Password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
  $_SESSION['name']=$name;
  header('location:child-labors.php');
   exit();
}else{
  header('location:child-labors.php');
  exit();
}

?>


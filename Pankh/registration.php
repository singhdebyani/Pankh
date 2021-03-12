<?php
session_start();
header('location:login_last.php');

$username='root';
$password='';
$server='localhost';
$db='xyz1';
$con=mysqli_connect($server,$username,$password,$db);
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
      

      $name=$_POST["name"];
      $username=$_POST["username"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      $password=md5($_POST["password"]);
      
      
      
      $pic1=$_FILES["pic1"]["name"];
	  
      $file_type1=$_FILES["pic1"]["type"];
      $file_size1=$_FILES["pic1"]["size"];
      $file_tem_loc1=$_FILES["pic1"]["tmp_name"];
      $file_store1="upload/".$pic1;
      move_uploaded_file($pic1,$file_store1);

      $pic2=$_FILES["pic2"]["name"];

	    $file_type2=$_FILES["pic2"]["type"];
      $file_size2=$_FILES["pic2"]["size"];
      $file_tem_loc2=$_FILES["pic2"]["tmp_name"];
      $file_store2="upload/".$pic2;
      move_uploaded_file($pic2,$file_store2);

       $submit=$_POST["submit"];
$q="select * from ngot where Name='$name' && Password='$password' ";

$result=mysqli_connect($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Duplicate data";
}else{
    $insertquery="INSERT INTO `ngot`(`Name`,`Username`,`Email_id`,`Phone`,`Password`,`Pic1`,`Pic2`)
       VALUES ('$name','$username','$email','$phone','$password','$pic1','$pic2')";

    $res=mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
         alert("data inserted correctly");
         </script>
         <?php
    }
    else{
      ?>
      <script>
       alert("data not inserted correctly");
       </script>
       <?php
  }
}
?>
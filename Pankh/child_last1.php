<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register for Child </title>
    <link rel="stylesheet" href="style.css">
    <?php include 'link.php' ?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 150vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: url(./images/child-labor1.jpg);
    background-size: cover;
}
.container{
  max-width: 700px;
  width: 100%;
height:850px;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
form .container{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,#dot-3:checked ~ .category label .three,
 #dot-4:checked ~ .category label .four{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
#rr-element {
    white-space: nowrap;
}

#rr-element label {
   padding-left: 0.6em;
}

 form .button input{
   height: 40px;;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
.textarea{width:100%;height:60px;}
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
</style>   
</head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registeredchild.html" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name = "pswd2" required>
          </div>
        </div>
        <div class="gender-details" required>
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="Others" id="dot-3">
          <input type="radio" name="gender" value="Prefer not to say" id="dot-4">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
           <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
            <label for="dot-4">
            <span class="dot four"></span>
            <span class="gender">Prefer not to say</span>
          </label>
          </div>
        
<div class="input-box">
            <span class="details">Full Address</span><div class="input-box">
<textarea class="textarea" name="address" required></textarea>
          </div></br>
<span class="details"> Which type you want to register for</span>
<div id="rr-element">
<label>Adoption</label><input type="checkbox" name="type" value="Adoption">
  <span class="checkmark"></span>
<label>Child Trafficking</label><input type="checkbox" name="type" value="Child Trafficking">
  <span class="checkmark"></span>
<label>Food</label>
  <input type="checkbox" name="type" value="Food">
  <span class="checkmark"></span>
<label>Education</label>
  <input type="checkbox" name="type" value="Education">
  <span class="checkmark"></span>
<label>Handicap</label>
  <input type="checkbox" name="type" value="Handicap"> 
  <span class="checkmark"></span></div></br>

<span class="details">Child labor's image:</span><input type="file" id="file" accept="image/*" name="pic" required>
</br>
</br>
<a href="Termsandcondition.html">Agreed to terms and conditions</a>
                      <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                        </label></br>

        <div class="button">
          <input type="submit" value="Register" name="submit" onclick="matchPassword()" required>
        </div></div>
      </form>
    
  

</body>
<script>

function matchPassword() {  
  var pw1 = document.getElementById("password");  
  var pw2 = document.getElementById("pswd2");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  }  
}
</script>
</html>


<?php 
include 'connection.php';
if(isset($_POST['submit'])){
      $name=$_POST["name"];
      $username=$_POST["username"];
      $email=$_POST["email"];
      $phone=$_POST["phone"];
      $password=md5($_POST["password"]);
      $gender=$_POST["gender"];
      $address=$_POST["address"];
      $type=$_POST["type"];
      $pic=$_FILES["pic"]["name"];
      $file_type=$_FILES["pic"]["type"];
      $file_size=$_FILES["pic"]["size"];
      $file_tem_loc=$_FILES["pic"]["tmp_name"];
      $file_store="upload/".$pic;
      move_uploaded_file($pic,$file_store);
      #$pic=addcslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
      #$adoption=$_POST["adoption"];
      #$child_trafficking=$_POST["child_trafficking"];
      #$food=$_POST["food"];
      #$education=$_POST["education"];
      #$handicap=$_POST["handicap"];
      $submit=$_POST["submit"];
      
      #INSERT INTO `child`(`Sl_No`, `Name`, `UserName`, `Email_Id`, `Phone`, `Password`, `Address`, `Pic`)
      # VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
      $insertquery="INSERT INTO `child`(`Name`, `UserName`, `Email_Id`, `Phone`, `Password` , `Address`, `Pic`, `Gender`,`Type`)
       VALUES ('$name','$username','$email','$phone','$password','$address','$pic','$gender','$type')";


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


<!--function matchPassword() {  
  var pw1 = document.getElementById("pswd1");  
  var pw2 = document.getElementById("pswd2");  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password created successfully");  
  }  
}
[8:39 pm, 09/03/2021] divyani it: name = "pswd1"
[8:40 pm, 09/03/2021] divyani it: name = "pswd2"
[8:41 pm, 09/03/2021] divyani it: onclick="matchPassword()"
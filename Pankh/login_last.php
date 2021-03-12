<!DOCTYPE html>
<html>
    <head>
        <title>
            Login And Registration Form
        </title>
        <link rel="stylesheet" herf="styles.css">
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
 .hero{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("./images/NGO4.jpg");
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding:5px;
    overflow:hidden;
}
.button-box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position:relative;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width:110px;
    height: 100%;
    background: linear-gradient(to right, #ff105f,#ffad06);
    border-radius: 30px;
    transition: .5s;
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0#7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}
.input-group{
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background:linear-gradient(to right, #ff105f,#ffad06);
    border: 0;
    outline: none;
    border-radius: 30px;
}
.check-box{
    margin: 30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom:68px;
    position: absolute;
}
#login{
    left: 50px;
}
#register{
    left: 450px;
}
h2{padding-left:25px;}
a:link {
  text-decoration: none;
}
        </style>
    </head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="f.jpeg">
                <img src="t.jpeg">
                <img src="g.jpeg">
            </div>
            <form id="login" class="input-group"  action="validation.php" method="POST"><!--action="login_last.php"-->
                <input type="text" class="input-field" placeholder="User Id" name="User_id" required>
                <input type="email" class="input-field" placeholder="Email-Id" name="email" required>
                <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="submission">Log In</button>
    
            </form>
            <form id="register" class="input-group">
<h2>How do you want to register yourself?</h2></br></br>
                <button type="submit" class="submit-btn"><a href="ngo.php">Register as NGO</button></a>
                </br>
                <button type="submit" class="submit-btn"><a href="child_last1.php">Register as Child</button></a>

    </form>
            
        </div>
        
        
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";

        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";

        }
    </script>
</body>    
</html>


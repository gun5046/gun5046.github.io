<?php
	include_once('login/sess.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="script.js"></script>
</head>
<body>
    
    <!--제목 -->
<div class="text-container">
  <span>K</span>
  <span>O</span>
  <span>R</span>
  <span>E</span>
  <span>A</span>
  <br/>
</div>


       
    <!--리스트 버튼-->
    <div id="link">
        <input type="button" class="btn" id="btn_1" value="Login"
        onclick="location.href='login/login.php'">
        <br/>
        <input type="button" class="btn" id="btn_2" value="Sites"
        onclick="location.href='data_files/sites.php'">
        <br/>
        <input type="button" class="btn" id="btn_3" value="Food"
        onclick="location.href='data_files/page.html'">
        <br/>
        <input type="button" class="btn" id="btn_4" value="Introducing"
        onclick="location.href='data_files/intro.php'">
    </div>
    <!--로그인 창-->
    <!--ID:'user' PASSWORD:'1234'-->
    <div id="login_box">
	    <p>LOGIN</p>
	    <form method="POST" action="login/login_check.php">
		USERNAME &nbsp:
        <input type="text" name="username" placehorder="USERID"
        style="font-size:20px; width:120px; font-color:blue;
        border-color:black; font-weight:bold;" />
        <br/>
		PASSWORD &nbsp:
        <input type="password" name="password" placehorder="PASSWORD"
        style="font-size:20px; width:120px; background-color:black;
        font-weight:bold; border-color:black;"/>
        <br/>
        <br/>
        <input type="Submit" value="Login" style="font-size:13px; 
        font-family: 'Baloo Thambi', cursive; font-weight:bold;
        border-radius:100px;"/>
	    </form>

    </div>
     
    
    
    
</body>
</html>
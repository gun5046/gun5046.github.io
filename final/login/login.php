


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<body>
<style>
    .text-container > span {
    font-size: 50px;
}
</style>
    <div class="text-container">
        <span>K</span>
        <span>O</span>
        <span>R</span>
        <span>E</span>
        <span>A</span>
    </div>
	
	<div id="login_box1">
	    <p>LOGIN</p>
	    <form method="POST" action="login_check.php">
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

    <a href="../index.php" style="margin-left:100px; font-size:20px; height:20px;">Home</a>
</body>
</html>
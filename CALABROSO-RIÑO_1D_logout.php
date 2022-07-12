<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <style>
        body{
			background-color:#5CA4A9;
		}
		div{
			color: black;
			margin: 200px 0px;
			font-size: 50px;
			font-family: Tahoma;
			text-shadow: 1px 1px 5px green;
			
			
		}
		strong{
			font-size: 20px;
			position: relative;
			height:20px;
			top: 100px;
			color: red;
			text-shadow: 0px 1px 5px white;
		}
		


    </style>
</head>
<body>
    <link rel="stylesheet"  type="text/css" href="" />

    <div align="center">
<?php 
    session_start();
    session_destroy();
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        $email=$_COOKIE['email'];
        $pass=$_COOKIE['pass'];

        setcookie('email',$email,time()-1);
        setcookie('pass',$pass, time()-1);
    }
    echo "You have succesfully logout.<br>";
	echo "Thank you for using our  system!<br><br><br><br><br><br><br>";
    echo "<strong>Click here to <a href='CALABROSO-RIÑO_1D_sessionLog.html'>login</a> again</strong>";

?>
</div>
</body>
</html>
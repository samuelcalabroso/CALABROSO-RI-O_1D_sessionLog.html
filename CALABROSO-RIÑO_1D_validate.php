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
			text-shadow: 1px 1px 5px #E9190F;
		}
		strong{
			font-size: 20px;
			position: relative;
			height:20px;
			top: 100px;
			color: red;
			text-shadow: 0px 1px 5px white;
		}
        a{
            color:#40BCD8;
        }

    </style>
</head>
<body>
    <link rel="stylesheet"  type="text/css" href="" />
    <div align="center">
<?php 

$myemail="marygraceventura1025@gmail.com";
$mypass ="12345";



if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    
    if($email==$myemail AND $pass==$mypass){
        
        if(isset($_POST['remember'])){
            setcookie('email',$email, time()+60*60*7);
            setcookie('pass',$pass, time()+60*60*7);
        }
        session_start();
        $_SESSION['email']=$email;
        header("location:CALABROSO-RIÑO_1D_welcome.php");
    }

    elseif(empty($email) AND empty ($pass)){
            echo "<p>Please enter a username and passowrd to login '!'</p> <br/>";
            echo "<a href='CALABROSO-RIÑO_1D_sessionLog.html'>Click Here</a> to login again";
    }
        else{
            echo "<p>Email or password is Invalid !<br> Click <a href='CALABROSO-RIÑO_1D_sessionLog.html'>here</a> to try again</p>";
        }
} else{
    header("location:CALABROSO-RIÑO_1D_sessionLog.html");
    }


?>
</div>
</body>
</html>

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
			margin: 50px 100px;
			font-size: 30px;
			font-family: Tahoma;
			text-shadow: 1px 1px 3px white;
			
		}
		a:link{
			font-size: 30px;
			position: relative;
			height:20px;
			top: 400px;
			color: red;
			text-shadow: 1px 1px 2px black;
		}
		a:visited{
			font-size: 30px;
			position: relative;
			height:20px;
			top: 400px;
			color: brown;
			text-shadow: 1px 1px 2px black;
		}
		strong{
			color: white;
			text-shadow: 0px 1px 2px black;
		}
		h3{
			color: #B2C8DF;
			font-size: 50px;
			font-family: Verdana;
			text-shadow: 1px 1px 10px black;
			word-spacing: 20px;
		}

    </style>
</head>
<body>
    <link rel="stylesheet"  type="text/css" href="" />
<?php 
session_start();
?>
<div align="center";>
    <?php 
	echo "<h3> WELCOME! </h3><br>";
	echo "Hi,<br><br>"." <strong>" .$_SESSION['email']. "</strong>". " <br><br> and welcome to PHP Sessions and 
    Cookies<br>";
	echo "<a href = 'CALABROSO-RIÑO_1D_logout.php'> Log-out</a>";
    ?>
    </body>
</html>

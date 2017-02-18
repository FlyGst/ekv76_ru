<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['username']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background="background.png">
<div id="header">
 <div id="left">
    <label>Welcome, have a great day!</label>
    </div>
    <div id="right">
     <div id="content">
         Hi there, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
        <div id='cssmenu'align="center">
<ul>
   <li><a href="home.php"><span>Home</span></a></li>
   <li><a href="personalinfo.php"><span>Personal Information</span></a></li>
   <li class='last'><a href='#'><span>Contacts</span></a></li>
</ul>	
</div>
        <table align="center">
            <tr>
                <td><h2> Start Working</h2></td>
                <td><button type="submit" name="btn-check_in">Check in</button></td>
            </tr>
            
        </table>
       
</body>
</html>
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
                <td><input type="text" name="firstname" placeholder="First Name..." required /></td>       
                <td><input type="text" name="lastname" placeholder="Last Name..." required /></td>
            </tr>
            <tr>
                  <td><input type="text" name="dateofbirth" placeholder="Date of Birth..." required /></td>
                  <td>
                      <select placeholder="Team..." required>
                        <option value="1">Choose Team...</option>
                        <option value="2">Development</option>
                        <option value="3">Quality Control</option>
                        <option value="4">Administrative</option>
                      </select>   
                  </td>
            </tr>
            <tr>
                  <td><input type="text" name="food" placeholder="Favourite food..." required /></td>
                  <td><input type="text" name="drink" placeholder="Favourite drink..." required /></td>
            </tr>
            <tr>
                  <td><input type="text" name="sport" placeholder="Favourite sport..." required /></td>
                  <td><button type="submit" name="btn-change_info"> Change information </button></td>
            </tr>
    </table>
    
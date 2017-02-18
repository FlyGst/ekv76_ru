
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'dbconnect.php';
        if(isset($_POST['check_in']))
{
    $res=  mysql_query("INSERT INTO attendance (user_id, username) WHERE user_id=".$_SESSION['user']);
    $userRow=mysql_fetch_array($res); 
}
        else 
        {
            ?>
        <script>alert('Wrong password or email! Try again!');</script>
        <?php
        }
        ?>
    </body>
</html>


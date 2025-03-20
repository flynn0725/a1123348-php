<?php
    session_start();
?>
<html>
    <head></head>
    <body>
        <?php
            if(isset($_SESSION["admin"])){
                echo"Welcome! ".$_COOKIE["userName"]."<br>";
                echo"<a href='logout.php'>Logout</a>";
            }else{
                echo"Illegal user! ".$_COOKIE["userName"]."<br>";
                header("Refresh:3;url='login.php'");
            }
        ?>
    </body>
</html>
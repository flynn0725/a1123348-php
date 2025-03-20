<?php
        if(isset($_COOKIE["userName"])){
            echo"welcome!back ".$_COOKIE["userName"]."<br>";
        }
        date_default_timezone_set("Asia/Taipei");
        echo time();
        echo "<br>";
        echo "Time now: ";
        echo date("Y-m-d H:i:s");

?>

<h1>Please Login to use the system</h1>

<form action="logincheck.php" method="post">

    Please input your username: <input type="text" name="userName"><br>
    <input type="hidden" name="uSecret" value="hello"><br>
    Please input your password: <input type="password" name="userPwd"><br>
    <input type="hidden" name="uSecret" value="hello"><br>
    <input type="submit"><br>
    <input type="hidden" name="uSecret" value="hello"><br>
</form>
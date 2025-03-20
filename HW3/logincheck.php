<?php
    session_start();
?>

<h1>Login Result</h1>

<?php

    $defaultName="nuk";
    $defaultPwd="fatlin1234";

    $defaultAdminName="admin";
    $defaultAdminPwd="fatlin5678";

    $userName=$_POST["userName"];
    $userPwd=$_POST["userPwd"];

    echo $userName;
    echo "<br>";
    echo $userPwd;
    echo "<br>";

    if ($defaultName==$userName && $defaultPwd==$userPwd) {
        echo "Login success";
        $_SESSION["user"]=1;
        $cookiedate=strtotime("+30sec",time());
        setcookie("userName", $defaultName,$cookiedate);
        header("Location:user.php");
    } else if ($defaultAdminName==$userName && $defaultAdminPwd==$userPwd) {
        echo "Admin Login Success";
        $_SESSION["admin"]=1;
        $cookiedate=strtotime("+30 seconds", time());
        setcookie("userName", $defaultAdminName,$cookiedate);
        header("Location:admin.php");
    } else {
        echo "Login failed, will send you back to login again in three seconds.";
        header("Refresh:3;url='login.php'");
    }
?>
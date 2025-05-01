<?php
$userName=$_POST["name"];
$userEmail=$_POST["email"];
$userPhoto=$_POST["photo"];

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'hw'
);

mysqli_set_charset($link,"utf8");

$sql="INSERT INTO hw(name, email, photo)VALUES('$userName', '$userEmail', '$userPhoto')";

if (mysqli_query($link, $sql)){
    header("Location:sendMail.php?userName=".urlencode($userName));
    echo "資料成功新增<br>";
} else {
    echo "錯誤:".mysqli_error($link);
    echo "資料新增失敗<br>";
    echo "<a href='upLoad.php'><button type='button'>回到註冊畫面</button></a><br>";
}
mysqli_close($link);
?>
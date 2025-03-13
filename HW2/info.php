<?php

$uName=$_POST["uName"];
$uGender=$_POST["uGender"];
$uID=$_POST["uID"];
$uNumber=$_POST["uNumber"];
$uDate=$_POST["uDate"];
$uAddress=$_POST["uAddress"];
$uPostalcode=$_POST["uPostalcode"];
$uSatisfaction=$_POST["uSatisfaction"];

echo "Your name is : ".$uName."<br>";
echo "Your gender is: ".$uGender."<br>";
echo "Your IDnumber is : ".$uID."<br>";
echo "Your credit card number is : ".$uNumber."<br>";
echo "Your effective date is : ".$uDate."<br>";
echo "Your address is : ".$uAddress."<br>";
echo "Your postal code is : ".$uPostalcode."<br>";
echo "Thanks for your criticize : ".$uSatisfaction."%<br>";

?>
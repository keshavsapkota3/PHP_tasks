<?php
  $title="Variable, String and Operators";
  include("header.php");
  ?>

<?php

    $firstName=$_POST["firstName"];
    $lastName=$_POST ["lastName"];
     echo" <h3>Hello  ".$firstName."  ".$lastName." you are welcome to my site. </h3>";

 
$String1="Hello";
$String2="World";
$joinedString= $String1.$String2;
echo"<br> Join hello and world        ".$joinedString;
$length=strlen($joinedString);
echo "<br> length of the joined string =  " .$length;
$firstnumber=298;
$secondnumber=234;
$thirdnumber=46;

$sum=$firstnumber+$secondnumber+$thirdnumber;
echo"<br>   the sum of the three number 298, 234, 46 is ".$sum;
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo'<br>'.$user_agent;
$file_path = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF'];
$file_name = basename($file_path);
$file_modification_time = filemtime($file_path);

echo '<br>Last modified: ' . date('F d, Y H:i:s', $file_modification_time) . ' (UTC)';
?>


<?php  include("footer.php"); ?>
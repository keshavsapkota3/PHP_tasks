<?php
$title="Controls flow & Loop";
include("header.php");
?>



 
<?php
 $fname=$_POST["name"];
  $fnumber=$_POST["age"];
if($fnumber>=18){
    echo" ".$fname." "." is eligible for the vote";
}
else{
    echo "<br> ".$fname. " "." is not eligible for the vote";
}

// checking the month 

$month = date("F");
switch ($month) {
    case "August":
        echo " <br> It's August, so it's still holiday.";
        break;
    default:
        echo "<br> Not August, this is $month, so I don't have any holidays.";
}
//   multiplication table 



if(isset($_POST['number1'])){
    $number = $_POST['number1'];
    echo "<h2>Multiplication Table of $number:</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number * $i = </td><td>$result</td></tr>";
    }
    echo "</table>";
}


// this for generating number upto n 
$n = $_POST["number"];
    echo "<p>Numbers from 1 to $n:</p>";
    $i = 1;
    while ($i <= $n) {
        echo "$i ";
        $i++;
    }

    $myarray = ["HTML", "CSS", "PHP", "JavaScript"];
echo "<p>Elements of the array:</p>";
foreach ($myarray as $element) {
    echo "$element<br>";
}
?>
<?php
include("footer.php") ?>
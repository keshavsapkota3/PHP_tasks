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

$n = $_POST["number"];
    echo "<p>Numbers from 1 to $n:</p>";
    $i = 1;
    while ($i <= $n) {
        echo "$i ";
        $i++;
    }

    $myarray = ["Keshav", "sapkota", "Hoo", "Mero nam"];
echo "<p>Elements of the array:</p>";
foreach ($myarray as $element) {
    echo "$element<br>";
}
?>
<?php
include("footer.php") ?>
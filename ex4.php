<?php
$title="Controls flow & Loop";
include("header.php");
?>

<h4 >Checking user if he/she is eligible for vote or not </h4>


<form   method="POST" action="" >
      <div>
        <div class="mb-3">
            <label for="age" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Enter age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = isset($_POST["name"]) ? $_POST["name"] : "";
            $fnumber = isset($_POST["age"]) ? $_POST["age"] : "";
            if ($fnumber >= 18) {
                echo "<div>$fname is eligible for voting.</div>";
            } else {
                echo "<div>$fname is not eligible for voting.</div>";
            }
        }
        ?>
    </div>

    </form>

    <form   method="POST" action="" >
      <div>
        <div class="mb-3">
          <label for="number" class="form-label">Enter number</label>
          <input type="text" class="form-control" name="number" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php
// this for generating number upto n 
$n = $_POST["number"];
    echo "<p>Numbers from 1 to $n:</p>";
    $i = 1;
    while ($i <= $n) {
        echo "$i ";
        $i++;
    }
?>
    </div>
    </form>


    <form   method="POST" action="" >
      <div>
        <div class="mb-3">
          <label for="number" class="form-label">Enter number for table</label>
          <input type="text" class="form-control" name="number1" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
     </div>
     <?php
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
              ?>
    </form>
    <form action="" method="POST">
    <button type="submit" class="btn btn-primary">checkdate</button>
    <?php
// checking the month 

$month = date("F");
switch ($month) {
    case "August":
        echo " <br> It's August, so it's still holiday.";
        break;
    default:
        echo "<br> Not August, this is $month, so I don't have any holidays.";
}
?>
    </form>
    <form action="" method="POST">
      <p>Check the element of the array  </p>
    <button type="submit" class="btn btn-primary">check array</button>
    <?php

$myarray = ["HTML", "CSS", "PHP", "JavaScript"];
echo "<p>Elements of the array:</p>";
foreach ($myarray as $element) {
echo "$element<br>";
}
?>
    </form>
<?php
include("footer.php") ?>









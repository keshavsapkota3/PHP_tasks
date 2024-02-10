<?php
  $title="Variable, String and Operators";
  include("header.php");
  ?>
  <h4>To See all the exercise enter name and submit</h4>
<form action="" method="POST">
        <div class="mb-3">
          <label for="name " class="form-label">First Name :</label>
          <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="Last name" class="form-label">Last Name :</label>
          <input type="text" class="form-control" name="lastName">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    if (isset($_POST["firstName"]) && isset($_POST["lastName"])) {       
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];        
        echo "<h3>Hello $firstName $lastName, you are welcome to my site.</h3>";
    } else {
        echo "<p>Please provide both First Name and Last Name.</p>";
    }
}
?>
      </form>

   <h3> creating the table and applied bootstrap style in it </h3>
   <table class="table">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">First Name</th>
            <th scope="col">last Name </th>
            <th scope="col">job</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Keshav</td>
            <td>Sapkota</td>
            <td>Driver</td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Saara</td>
            <td>hamalainen</td>
            <td>waiter</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Pekka</td>
            <td>turvonen</td>
            <td>Grass trimmer</td>
        </tr>
    </tbody>

   </table>
     <h3> Working with string!</h3>
     <h5>Can you enter hello and world</h5>
     <form action="" method="POST">
        <label for="String1" > First String</label>
        <input type="text" id="firstString" name="First" > <br>
        <label for="string2" class="col-3">Second String</label>
        <input type="text" id="SecondStringS" name="Second"> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["First"]) && isset($_POST["Second"])) {
        $firstword = $_POST["First"];
        $secondword = $_POST["Second"];
        $joinedString = $firstword . $secondword;
        echo "<p>Join 'Hello' and 'World': $joinedString</p>";
        $length = strlen($joinedString);
        echo "<p>Length of the joined string: $length</p>";
    } else {
        echo "<p>Please provide both first and second strings.</p>";
    }
}
?>

     </form>
     <h3>working with Number</h3>
<form action="" method="POST" >
    <?php
    $firstnumber=298;
$secondnumber=234;
$thirdnumber=46;

$sum=$firstnumber+$secondnumber+$thirdnumber;
echo"<br>   the sum of the three number 298, 234, 46 is ".$sum;

?>
</form>


<form action="" method="POST">
    <h2>Check the browser</h2>

    <?php
    
    
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo'<br>'.$user_agent;
?>
</form>
<?php  include("footer.php"); ?>
<div class="container">
    <div class="row">
      <div class="col-4"></div>
        <div class="col-8 text-right mt-3">
            <?php
            $file_path = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF'];
            $file_modification_time = filemtime($file_path);
            echo '<p>Last modified: ' . date('F d, Y H:i:s', $file_modification_time) . ' (UTC)</p>';
            ?>
        </div>
    </div>
</div>
<?php
$title="Controls flow & Loop";
include("header.php");
?>

<h4 >Checking user if he/she is eligible for vote or not </h4>


<form   method="POST" action="ex4process.php" >
       <div class="mb-3">
          <label for="age " class="form-label">Name</label>
          <input type="text" class="form-control" name="name" >
       </div>
       <div class="mb-3">
          <label for="age " class="form-label">Enter age</label>
          <input type="text" class="form-control" name="age" >
        </div>
      <div class="mb-3">
          <label for="number" class="form-label">Enter number</label>
          <input type="text" class="form-control" name="number" >
        </div>
     <button type="submit" class="btn btn-primary">Submit</button>

</form>
<?php
include("footer.php") ?>
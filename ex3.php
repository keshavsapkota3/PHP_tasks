<?php
  $title="Variable, String and Operators";
  include("header.php");
  ?>

<form action="ex3process.php" method="POST">
        <div class="mb-3">
          <label for="name " class="form-label">First Name :</label>
          <input type="text" class="form-control" name="firstName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="Last name" class="form-label">Last Name :</label>
          <input type="text" class="form-control" name="lastName">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
     <form class="row">
        <label for="String1" > First String</label>
        <input type="text" id="firstString" > <br>
        <label for="string2" class="col-3">Second String</label>
        <input type="text" id="SecondStringS">
     </form>
     <h3>working with Number</h3>
<form class="row" >
    <label for="number1">sum of the 298, 234, 46</label>
</form>



<?php  include("footer.php"); ?>
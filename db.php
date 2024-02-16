<?php

if(isset($_POST['submit'])){
    // echo "<pre>";
    // print_r($_POST);

    $Name=$_REQUEST['Name'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $persons=$_REQUEST['persons'];
    $date=$_REQUEST['date'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body{
        width: 100%;
  height: auto;
  background-image: url(img/b.jpg);
  background-repeat: no-repeat;
  background-size: cover;
    }
.s1-d{
    padding-top:3%;
    margin:auto;
    width: 1000px;
    font-size:20px;
    
}
  </style>
  <body>
    <!-- section 1 -->
  <a href="Book Table.html" class="text-decoration-none text-light p-5" ><u> Back</u></a>
 <div class="s1-d">
 <h1 class="text-center py-3 text-light "><u> Customer Information</u></h1>
  <table class="table shadow rounded-3" >
  <thead>
    <tr>
      <th scope="col">NO.</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">How Many Persons</th>
      <th scope="col">Date</th>

    </tr>
  </thead >
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?php if(isset($Name))echo $Name ?> </td>
      <td><?php if(isset($phone))echo $phone ?></td>
      <td><?php if(isset($email))echo $email ?></td>
      <td><?php if(isset($persons))echo $persons ?></td>
      <td><?php if(isset($date))echo $date ?></td>
    </tr>


  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



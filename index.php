<?php
require 'config.php';

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $title = $_POST["title"];
    $position = $_POST["position"];
    $company = $_POST["company"];
    $bussinessarena = $_POST["bussinessarena"];
    $employee = $_POST["employee"];
    $addinfo = $_POST["addinfo"];
    $zipcode = $_POST["zipcode"];
    $place = $_POST["place"];
    $country = $_POST["country"];
    $code = $_POST["code"];

    //insert data
    $sql = "INSERT INTO pro VALUES ('','$firstname','$lastname','$email','$address','$number','$title','$position','$company'
    ,'$bussinessarena','$employee','$addinfo','$zipcode','$place','$country','$code')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Contact Form</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
              <h4>General Information</h4>
              <form action="" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Title">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="firstname" id="formGroupExampleInput2" placeholder="First Name">
                    <input type="text" class="form-control" name="lastname" id="formGroupExampleInput2" placeholder="Last Name">
                  </div>
                  <div class="mb-3">
                  <input type="text" class="form-control" name="position" id="formGroupExampleInput2" placeholder="Position">
                  </div>
                  <div class="mb-3">
                  <input type="text" class="form-control" name="company" id="formGroupExampleInput2" placeholder="Company">
                  </div>
                  <div class="mb-3">
                  <input type="text" class="form-control" name="bussinessarena" placeholder="Bussiness Arena">
                  <input type="text" class="form-control" name="employee" placeholder="Employees">
                  </div>
            </div>
            <div class="col-md-5 ">
              <h4>Contact us</h4>
              <div class="mt-4">
                  <div class="d-flex">
                  <input type="text" class="cont" name="address" placeholder="St No.">
                  </div>
                  <div class="d-flex">
                  <input type="text" class="cont" name="addinfo" placeholder="Additional Info">
                  </div>
                  <div class="d-flex">
                  <input type="text" class="cont" name="zipcode" placeholder="Zip Code" style="width:73px;">
                  <input type="text" class="ph" name="place" placeholder="Place" style="margin-left:45px;">
                  </div>
                  <div class="d-flex">
                  <input type="text" class="cont" name="country" placeholder="Country">
                  </div>
                  <div class="d-flex">
                  <input type="text" class="cont" name="code" placeholder="Code" style="width:73px;">
                  <input type="text" class="ph" name="number" placeholder="Phone Number" style="margin-left:45px;">
                  </div>
                  <div class="d-flex">
                  <input type="text" class="cont" name="email" placeholder="Email">
                  
                  </div>
                  <button class="btn btn-primary" name="submit" style="margin-top:9px;">Submit</button>
                  </form>
              </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

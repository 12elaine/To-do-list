<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Email = $_POST['Email'];
  $Number = $_POST['Number'];

  $sql = "INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Email`, `Number`)
          VALUES ('$id','$FirstName', '$LastName', '$Email', '$Number')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    header('Location: add.php');
    exit();
  } else {
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('amp.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 400px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            margin-top: 50px; /* Add margin-top value as desired */
        }

        .black-bold {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand black-bold" href="index.php">
                <img src="logo.png" alt="Logo" width="100" height="80" class="d-inline-block align-text-top">
                COLOURS PRINT AND TRADING WEB DESIGN
            </a>
        </div>
        </nav>
    <div class="center">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-4 m-auto">
          <h3 style="color:black;">Please fill out this form</h3>
        </div>
      </div>
      </body> 
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <form method="post">
          <div class="form-group">
          <label>Id</label>
            <input type="text" class="form-control" placeholder="Enter your id" name="id" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>FirstName</label>
            <input type="text" class="form-control" placeholder="Enter your FirstName" name="FirstName" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>LastName</label>
            <input type="text" class="form-control" placeholder="Enter your LastName" name="LastName" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Enter your Email" name="Email" autocomplete="off" readonly>
          </div>
          <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" placeholder="Enter your Number" name="Number" autocomplete="off" readonly>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <br>
    <?php include('inc/footer.php'); ?>
      </div>
    </div>
  </div> 
</body>
</html>

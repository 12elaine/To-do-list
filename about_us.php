<!doctype html>
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

    .center-heading {
            text-align: center;
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
      <nav id="navbar-example2" class="navbar bg-body-tertiary px-5 mb-5">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link black-bold" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link black-bold" href="about_us.php">ABOUT US</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link black-bold" href="contact.php">CONTACT US</a>
          </li>
          <li class="nav-item">
                    <a class="nav-link black-bold services" href="services.php">OUR SERVICES</a>
          </li>
        </ul>
      </nav>
    </div>
  </nav>
  
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <h4 id="scrollspyHeading1"><a class="black-bold" href="add.php">USER</a></h4>
    <p></p>
    <h4 id="scrollspyHeading2"><a class="black-bold" href="product.php">PRODUCT</a></h4>
    <p></p>
    <h4 id="scrollspyHeading3"><a class="black-bold" href="employee.php">EMPLOYEE</a></h4>
    <p></p>
    <h4 id="scrollspyHeading4"><a class="black-bold" href="inventory.php">INVENTORY</a></h4>
    <p></p>
  </div>

  <div class="container">
        <div class="jumbotron">
            <h3 class="display-4">ABOUT US </h3>
            <hr class="my-1">
      <div class="row">
        <div class="col-md-6 p-4 ps-md-0">
          <img src="fab.jpg" class="w-80" height="150" alt="Phone Icon">
          <br>
          <div class="col-md-6 p-4 ps-md-0">
            <a href="#">John Rey Fabia.</a>
            <br>
            <a href="#">A 3rd-year student of Palawan State University.</a>
            <br>
            <a href="#">Taking a Bachelor of Science in Computer Science.</a>
          </div>
        </div>
        <div class="col-md-6 p-4 ps-md-0">
          <img src="elai.jpg" class="w-80" height="150" alt="Phone Icon">
          <br>
          <div class="col-md-6 p-4 ps-md-0">
            <a href="#">Elaine Mae Llacuna.</a>
            <br>
            <a href="#">A 3rd-year student of Palawan State University.</a>
            <br>
            <a href="#">Taking a Bachelor of Science in Computer Science.</a>
          </div>
        </div>
      </div>
    </div>
    
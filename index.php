<?php
session_start();
?>
<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="utf-8"/>
      <title>signup page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Mubarak"/>
      <meta name="description" content="sign in with database"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body class="index_body">
      <header>
        <?php
          include ('./global_header.php')
        ?>
      </header>
    <main class="index_main">
        <p class="p_sign">Already have an account?<a href="./signIn.php" class="sign_in">sign in</a></p>
        <div class="container"> 
          <form class="row g-3" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" name="fname" id="inputEmail1" required>
            </div>
            <div class="col-md-6">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lname" id="inputEmail2" required>
            </div> 
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" name="inputEmail4" id="inputEmail4" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" name="inputPassword4" id="inputPassword4" required>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" name="inputCity" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Province</label>
                <select id="inputState" class="form-select">
                  <option selected>Choose...</option>
                  <option>Ontario</option>
                  <option>Quebec</option>
                </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" name="inputZip" id="inputZip">
            </div>
            <div class="col-md-2">
              <label for="img">Select image:</label>
              <input type="file" id="img" name="img" accept="image/*">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
          </form>
        </div>
    </main>
        <?php

          try {
            require_once ('./connection.php');
            if (isset($_POST) & !empty($_POST)) {
              $images = $_FILES['img']['name'];
              $image_url = 'img/' . $images;
              $temp_folder = $_FILES['img']['tmp_name'];
              move_uploaded_file($temp_folder, $image_url);
              $fname = trim($_POST['fname']);
              $lname = trim($_POST['lname']);
              $email = trim($_POST['inputEmail4']);
              $address = trim($_POST['inputAddress']);
              $password = trim($_POST['inputPassword4']);
              $city = trim($_POST['inputCity']);
              $zip = trim($_POST['inputZip']);

              $check = true;
              if (empty($fname)) {
                echo 'fill in your first name';
                $check = false;
              }
              if (empty($lname)) {
                echo 'fill in your last name';
                $check = false;
              }
              if (empty($email)) {
                echo 'fill in your email address';
                $check = false;
              }
              if (empty($password)) {
                echo 'fill in your password';
                $check = false;
              }
              if ($check) {
                $password = hash('sha512', $password);
                $res = $database->create($fname, $lname, $email, $address, $city, $zip, $password, $image_url);
                if ($res) {
                  echo "<script type='text/javascript'>alert($res);</script>";
                }
              }
            }
          } catch (Exception $e) {
            echo 'There is an error in the Index' . $e->getMessage();
          }

        ?>
        <footer>
          <div class="footer">
             <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
              <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
              <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
            </svg>
            <p>let us make your look your price</p>
          </div>
        </footer>
  </body>
</html>
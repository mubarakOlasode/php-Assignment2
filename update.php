<?php session_start(); ?>
<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta charset="utf-8"/>
      <title>Update page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Mubarak"/>
      <meta name="description" content="sign in with database"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <header>
        <?php
          include ('./global_header.php');
        ?>
      </header>
    <main class="index_main">
        <p class="p_sign">Update your information</a></p>
        <div class="container"> 
          <form class="row g-3" method="POST">
            <div class="col-md-6">
              <label for="fname" class="form-label">First Name</label>
              <input type="text" class="form-control" name="fname" id="inputEmail1">
            </div>
            <div class="col-md-6">
              <label for="lname" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lname" id="inputEmail2">
            </div> 
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" name="inputEmail4" id="inputEmail4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" name="inputCity" id="inputCity">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" name="inputZip" id="inputZip">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
    </main>
        <?php
          require_once ('./connection.php');
          try {
            if ($_SESSION['id']) {
              $id = $_SESSION['id'];
              $response = $database->edit($id);
              if (isset($_POST) & !empty($_POST)) {
                $fname = trim($_POST['fname']);
                $lname = trim($_POST['lname']);
                $email = trim($_POST['inputEmail4']);
                $address = trim($_POST['inputAddress']);
                $city = trim($_POST['inputCity']);
                $zip = trim($_POST['inputZip']);
                while ($info = mysqli_fetch_assoc($response)) {
                  if (empty($fname)) {
                    $fname = $info['fname'];
                  } else {
                    $fname = $fname;
                  }
                  if (empty($lname)) {
                    $lname = $info['lname'];
                  } else {
                    $lname = $lname;
                  }
                  if (empty($email)) {
                    $email = $info['email'];
                  } else {
                    $email = $email;
                  }
                  if (empty($address)) {
                    $address = $info['address'];
                  } else {
                    $address = $address;
                  }
                  if (empty($city)) {
                    $city = $info['city'];
                  } else {
                    $city = $city;
                  }
                  if (empty($zip)) {
                    $zip = $info['zip'];
                  } else {
                    $zip = $zip;
                  }
                }
                $res = $database->update($fname, $lname, $email, $address, $city, $zip, $id);
                header('Location:./view.php');
              }
            }
          } catch (Exception $e) {
            echo 'There is an error in the Index' . $e->getMessage();
          }

        ?>
  </body>
</html>
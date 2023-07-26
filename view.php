<?php
require_once ('./connection.php');
// if (!isset($_SESSION['email'])) {
//   header('Location:./signIn.php');
// } else {
  $res = $database->fetch();
//  }
if(isset($_GET['submit'])){
  $delete_id = $_GET['deleteid'];
  $res = $database->delete($delete_id);
  while($res){
    echo "<script>console.log($res)</script>";
    echo "<div> $res</div>";
  }
}
?>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>result page</title>
    <meta name="author" content="Mubarak"/>
    <meta name="description" content="display user's information"/>
    <script src="https://kit.fontawesome.com/8b0730a11f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
  <header>
        <?php
          include ('./global_header.php')
        ?>
      </header>
  <div class="container"> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $count = 0;
      while ($r = mysqli_fetch_assoc($res)) {
        $count++;
    ?>
    <tr>
      <th scope="row"><?php echo $r['Id'] ?></th>
      <td><?php echo $r['fname'] ?></td>
      <td><?php echo $r['lname'] ?></td>
      <td><?php echo $r['email'] ?></td>
      <td><?php echo $r['address'] ?></td>
      <td><?php echo $r['city'] ?></td>
      <td><?php echo $r['zip'] ?></td>
      <td><a href="./edit.php"><i class="fa-regular fa-pen-to-square"></i></a></td>
      <td><a href="./view.php?deleteid=<?php echo $r['Id']?>"><button type="submit" class="btn"><i class="fa-solid fa-xmark"></i></button></a></td>
    </tr>
  </tbody>
  <?php
      }
      ?> 
</table>

  </div>
  </body>
</html>
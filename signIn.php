<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>
    <title>Sign in</title>
</head>
<body class="body">
    <header>
        <?php
            include ('./global_header.php')
        ?>
    </header>
    <main class="signIn_main">
        <div class="signIn_div">
            <form method="post">
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" required>
                    <p id="emailHelp" class="form-text text">We'll never share your email with anyone else.</p>
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password" required>
                    <button type="submit" class="btn btn-primary submit_btn">Submit</button>
                </div>
            </form>
         </div>
         <div>
            <?php
                require_once ('connection.php');
                try {
                    if (isset($_POST) && !empty($_POST)) {
                        $email = trim($_POST['InputEmail']);
                        $password = hash('sha512', $_POST['password']);
                        $res = $database->read($email, $password);
                        $data_entry = mysqli_num_rows($res);
                        if ($data_entry == 1) {
                            session_start();
                            while ($data = $res->fetch_assoc()) {
                                $_SESSION['email'] = $data['email'];
                                Header('Location:./view.php');
                            }
                        }
                        else {
                            $alert='Email or Password is not correct';
                            echo "<script type='text/javascript'>alert('$alert');</script>";
                        }
                    } 
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

            ?>
         </div>
    
    </main>
</body>
</html>
<!-- backend -->

<?php
    include('../connection/dbconn.php');
    

    if(isset($_POST['login'])){
        
        $email = $_POST['adminemail'];
        $pass = $_POST['adminpass'];

        $sql = "SELECT * FROM `admin` WHERE email='$email' AND password='$pass'; ";
        $result = mysqli_query($con, $sql);
         $row = mysqli_num_rows($result);

        
        if($row == 1){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;
            header("Location: ./admindash.php");
        }
    }
    


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Login</title>
</head>

<body>

    <div class="container">

        <div class="login">
            <form method="POST" action="adminlogin.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adminemail">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="adminpass" id="exampleInputPassword1">
                </div>
                <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
                <button type="submit" class="btn btn-primary" name="login">Log in</button>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>


<style>
   .container{
       display: flex;
       justify-content: center;
       align-items: center;
   }

   .login{
       background-color: silver;
       padding: 3rem;
       margin-top: 10rem;
   }
</style>







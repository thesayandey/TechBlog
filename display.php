<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Blog</title>
  </head>
  <body>
    
  
  <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark ml-auto"> 
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Man and Code</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarid" aria-controls="navbarid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarid" >
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="./routes/adminlogin.php" class="nav-link">Admin login</a>
                    </li>

                    <li class="nav-item">
                        <a href="./routes/about.php" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="./routes/contactus.php" class="nav-link">Contact us</a>
                    </li>
                </ul>
                </div>
        </div>

    </nav>
  
  
  <div class="data" style="min-height:30rem; padding:15px">
      <?php

        $bid = $_POST['bid'];
        // echo($bid);

        include('connection/dbconn.php');
        $sql = "SELECT * FROM `blog` WHERE bid='$bid';";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_assoc($result);

        echo('<h1>'.$row['title'].'</h1>');
        echo('<p>'.$row['content'].'</p>');


      ?>
  </div>
  
  
  <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <ul class="list">
            <li>
                <a href="./index.php">Home</a>
            </li>

            <li>
                <a href="./routes/about.php">About</a>
            </li>

            <li>
                <a href="./routes/contactus.php">Contact us</a>
            </li>
        </ul>

        <p class="copyright" style="color: white; text-align:center; font-size: 12px;">Man and Code. @2022</p>
    </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>


<!-- Footer Styling -->


<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Segoe UI';
    font-weight: 400;
    /* background-color: grey; */
}

.footer{
    padding: 40px 0px;
    background-color: black;
}

.footer .social{
    text-align: center;
    /* padding: 25px; */
}

.footer .social a{
    color: white;
    font-size: 25px;

    width: 40px;
    height: 40px;
    line-height: 38px;

    display: inline-block;
    text-align: center;
}

.footer ul{
    margin-top: 0;
    padding: 0;
    list-style: none;
    font-size: 20px;
    line-height: 1.6;
    margin-bottom: 0;
    text-align: center;
}

.footer ul li a{
    color: white;
    text-decoration: none;
}

.footer ul li{
    display: inline-block;
    padding: 0 15px;
}

/* .footer .copyritgh{
    color: white;
    text-align: center;
    font-size: 15px;
} */
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
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
                <a href="../index.php">Home</a>
            </li>

            <li>
                <a href="./routes/about.php">About</a>
            </li>

            <li>
                <a href="#">Contact us</a>
            </li>
        </ul>

        <p class="copyright" style="color: white; text-align:center; font-size: 12px;">Man and Code. @2022</p>
    </section>
</body>
</html>

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
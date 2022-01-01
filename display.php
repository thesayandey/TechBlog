<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <?php require 'components/nav.php' ?>
  
  
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
  
  
  <div class="foot">
    <?php require 'components/footer.php' ?>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

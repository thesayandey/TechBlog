<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/foot.css">


  <!-- Incluiding jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Man and Code</title>
</head>

<body>
  <!-- incluiding navbar -->
  <?php require 'components/nav.php' ?>

  <!-- div containing introduction -->

  <div class="intro container-fluid">
    <div class="row">
      <div class="about col-md-6">
        <!-- Contains about text, and welcome message -->
        <h2 class="abt">Welcome to </h2>
        <!-- <h3 id="abt">Man and code</h3> -->

        <div class="cont">
            <div class="typed-out"><h3>Man and Code</h3></div>
        </div>


      </div>

      <div class="pic col-md-6">
        <!-- contains the logo of the blog -->
        <div class="logo">
          <!-- <img src="images/Man and Code(1).png" alt="logo" id="logo" style="height: 20em; width:20em"> -->
          <img src="images/Man and Code(1).png" alt="Logo" id="logo">

        </div>
      </div>
    </div>
  </div>

  <div class="blog">
    <div class="header">
      <div class="title">
        <h2>Blog Section</h2>
      </div>
    </div>
<!-- 
    <form action="display.php" method="POST">
    <div class="mainsection">
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
          <input type="submit" class="btn btn-primary" value="Read more...">
          <input type="hidden" name="bid" value="">
        </div>
      </div>
    </div>
    </form>
   -->

    <?php
      include('connection/dbconn.php');

      $sql = "SELECT * FROM `blog`";
      $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result) == 0){
        echo('<h3>Opps Stackoverflow</h3>');
      }
      else{
        while($row = mysqli_fetch_assoc($result)){
          $bid = $row['bid'];
          $title = $row['title'];
          $content = $row['content'];
          $desc = substr($content, 0, 500);

          echo('<form action="display.php" method="POST">');
          echo('<div class="mainsection">');
          echo('<div class="card">');
          echo(' <div class="card-header">');
          echo('Blog id: '.$bid);
          echo('</div>');
          echo('<div class="card-body">');
          echo('<h5 class="card-title">'.$title.'</h5>');
          echo('<p class="card-text">'.$desc.'</p>');
          echo('<input type="submit" class="btn btn-primary" value="Read more...">');
          echo('<input type="hidden" name="bid" value="'.$bid.'">');
          echo('</div>');
          echo('</div>');
          echo('</div>');
          echo('</form>');
         

        }
      }

    ?>

    <!-- blog section ends here -->
  </div>
  





  <div class="foot">
    <?php require 'components/footer.php' ?>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
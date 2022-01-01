<?php
session_start();

if (isset($_SESSION['email'])) {
    include('../connection/dbconn.php');

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        // echo ($title);
        // echo ($content);

        $sql = "INSERT INTO `blog`(`title`, `content`) VALUES ('$title','$content'); ";
        $run = mysqli_query($con, $sql);

        if ($run) {
            ?>
                <script>
                    alert("Content successfully published :)");
                </script>
            <?php
        }
    }

    
    
}
else{
    header("Location: ./login.php");
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

    <title>Admin Dashboard</title>
</head>

<body>


    <div class=" content container-fluid bg-dark">
        <h1 id="admintitle">Admin Dashboard</h1>
        <button id="btn" onclick="logout()">Log out</button>
        <button id="edit" onclick="more()">More options</button>
    </div>

    <div class="main">
        <!-- <form action="#" class="myform" name="myform">
            Blog title: <input type="text" class="form-control" name="blogtitle"> <br>
            Blog content: <input type="textarea" class="form-control" name="blogcontent" rows="4" cols="50"> <br>
            <input type="submit" value="Publish"> 
      </form> -->
        <form action="admindash.php" method="post" name="blogform">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Blog content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="18"></textarea>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Publish" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function more() {
            var a = document.getElementById('edit');
            a.addEventListener('click', function() {
                window.location = 'more.php';
                console.log('clicked');
            });
        }

         function logout(){
             var a = document.getElementById('btn');
             a.addEventListener('click', function(){
                // alert('<?php session_unset(); session_abort(); ?>');
                // alert('logging out...');
                window.location = 'logout.php';
            });
        }
    </script>



</body>

</html>


<style>
    .content {
        padding: 2rem;
    }

    #admintitle {
        color: white;
        display: inline-block;
    }

    #edit {
        float: right;
        margin-right: 5px;
        margin-top: 7px;
    }

    #btn {
        float: right;
        margin-top: 7px;
    }

    .submit {
        display: flex;
        justify-content: center;
    }

    .main {
        padding: 10px;
    }
</style>
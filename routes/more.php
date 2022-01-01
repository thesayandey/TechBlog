<?php
session_start();

if (isset($_SESSION['email'])) {
    include('../connection/dbconn.php');
} else {
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

    <title>More options</title>
</head>

<body>


    <div class=" content container-fluid bg-dark">
        <h1 id="admintitle">Admin Dashboard</h1>
        <button id="btn" onclick="logout()">Log out</button>

    </div>

    <div class="mainsec">
        <div class="search">
            <form action="more.php" method="post">
                Enter blog id: <input type="number" name="id" id="sid">
                <input type="submit" value="Search" name="search" class="btn btn-outline-primary">
            </form>
        </div>

        <div class="main">

            <?php
            include('../connection/dbconn.php');
            if (isset($_POST['search'])) {
                $bid = $_POST['id'];
                $sql = "SELECT * FROM `blog` WHERE bid='$bid'";

                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $nbid = $row['bid'];
            }
            ?>

            <form action="more.php" method="post" name="blogform">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" value="<?PHP echo ($row['title']); ?> " id="exampleFormControlInput1" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Blog content</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="18"><?PHP echo ($row['content']); ?></textarea>
                </div>
                <div class="submit">
                    <input type="submit" id="btn1" name="update_btn" value="Update" class="btn btn-primary btn-lg">
                    <input type="submit" id="btn2" name="delete_btn" value="Delete" class="btn btn-danger btn-lg">
                    <input type="hidden" name="hid" value="<?php echo($row['bid']); ?>">
                </div>
            </form>

            <!-- updation and deletion -->
            <?php

            if (isset($_POST['update_btn'])) {
                $newtitle = $_POST['title'];
                $newcontent = $_POST['content'];
                $id = $_POST['hid'];
                //echo($newtitle);
                $newsql = "UPDATE `blog` SET `title`='$newtitle',`content`='$newcontent' WHERE bid='$id'";
                $newres = mysqli_query($con, $newsql);
                if ($newres) {
                    echo("<script>alert('Updated')</script>");
                }
            }

            if(isset($_POST['delete_btn'])){
                $id = $_POST['hid'];
                $sql2 = "DELETE FROM `blog` WHERE bid='$id'";

                $res2 = mysqli_query($con, $sql2);
                if($res2){
                    echo("<script>alert('Deleted')</script>");
                }
          
            }

            ?>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>
        function logout() {
            var a = document.getElementById('btn');
            a.addEventListener('click', function() {
                // alert('<?php session_unset();
                            session_abort(); ?>');
                // alert('logging out...');
                window.location = 'logout.php';
            });
        }
    </script>
</body>

</html>




<style>
    #admintitle {
        color: white;
        display: inline-block;
    }

    /* #edit {
        float: right;
        margin-right: 5px;
        margin-top: 7px;
    } */

    #btn {
        float: right;
        margin-top: 7px;
    }

    .search {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    .submit {
        display: flex;
        justify-content: center;
    }

    #btn1 {
        margin-right: 5px;
    }

    #btn2 {
        margin-left: 5px;
    }
</style>
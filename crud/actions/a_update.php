<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR10 - Project: Library - Updated</title>

    <!-- BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }

        .jambo {
            background-image: url("https://cdn.pixabay.com/photo/2014/09/05/18/32/old-books-436498_960_720.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            }
    </style>

</head>


<body>


<!-- HERO IMAGE -->
    <div class="jumbotron jambo">

        <h1 class="display-4 text-center">Welcome to John's fantastic library!</h1>
        <hr class="my-4">
            <p class="display-6 text-center">Explore - Enjoy - Discover!</p>
    
    </div><!--HERO-->

    <div class="container">
        <?php require_once 'db_connect.php';

            if($_POST) {
                $title = $_POST['all_title'];
                $type = $_POST['all_media_type'];
                $author_first = $_POST['author_fName'];
                $author_last = $_POST['author_lName'];
                $published = $_POST['all_publish_date'];
                $publisher = $_POST['publisher_name'];
                $status = $_POST['all_status'];

                $id = $_POST['all_isbn'];

                $sql = "UPDATE all_media SET all_media_type = '$type', all_title = '$title', all_publish_date = '$published', all_status = '$status', publisher_name = '$publisher', author_fName = '$author_first', author_lName = '$author_last'  WHERE all_isbn = {$id}";

                if($con->query($sql) === TRUE) {
                    echo "<p class='display-4'>Successfully Updated!</p>" ;
                    // header("refresh:1; Location: ./../index.php");
                    // echo "<a href='./../index.php'><button class='btn btn-success btn-lg' type='button'>Home</button></a>";
                } else  {
                    echo "Error while updating record : ". $con->error;
                }
            
                $con->close();
            }
        ?>
    </div>

    <script>
        setTimeout(function () {
        window.location.href= './../index.php'; // the redirect goes here

        },1000);
    </script>

</body>

</html>
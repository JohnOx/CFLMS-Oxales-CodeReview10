<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR10 - Project: Library - SUCCESS</title>

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

                $sql = "INSERT INTO all_media(all_media_type,all_title,all_publish_date,all_status,publisher_name,author_fName,author_lName) VALUES ('$type','$title','$published','$status','$publisher','$author_first','$author_last')";

                if($con->query($sql) === TRUE) {
                    echo "<p class='display-4'>New Media added!</p>" ;
                    echo "<a href='./../create.php'><button class='btn btn-secondary btn-lg' type='button'>Back</button></a>";
                    echo "<a href='./../index.php'><button class='btn btn-success btn-lg' type='button'>Home</button></a>";
                } else  {
                    echo "Error " . $sql . ' ' . $con->connect_error;
                }
            
                $con->close();
            }
        ?>
    </div>
</body>

</html>
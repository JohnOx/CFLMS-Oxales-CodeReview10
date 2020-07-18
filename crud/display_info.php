<?php require_once './actions/db_connect.php'?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR10 - Project: Library</title>

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

<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <a class="navbar-brand text-light" href="#">John's Library</a>

            <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse text-light" id="navbarNav">
            <ul class="navbar-nav text-light">

                <li class="nav-item active">
                    <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">DVDs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">CDs</a>
                </li>
            
            </ul>
        </div>
    </nav><!-- NAVBAR -->

<!-- HERO IMAGE -->
    <div class="jumbotron jambo">

        <h1 class="display-4 text-center">Welcome to John's fantastic library!</h1>
        <hr class="my-4">
            <p class="display-6 text-center">Explore - Enjoy - Discover!</p>
    
    </div><!--HERO-->

    <div class="container">
       
                        <?php

                             if(isset($_GET['all_isbn'])){
                                $id= $_GET['all_isbn'];
                                $sql = "SELECT * FROM all_media WHERE all_isbn = ".$id;
                                mysqli_query($con, $sql);
                                
                                
                                }

                            // Display Data
                            
                            $display = mysqli_query($con, $sql);

                            if($display -> num_rows == 1) {
                                $value = $display -> fetch_assoc();
                                 
                                echo   "<div class='card' style='width: 18rem;'>
                                            <img src=".$value['all_image']." class='card-img-top' >

                                            <div class='card-body'>

                                                <h5 class='card-title'>".$value['all_title']."</h5>
                                                <h6 class='card-subtitle mb-2 text-muted'>by ".$value['author_fName']." ".$value['author_lName']."</h6>
                                                <p class='card-text'>".$value['all_synopsis']."</p>
                                            
                                            </div>
                                        </div>
                                        <a href='index.php' class='btn btn-primary'>Back</a>";

                                       }           
                        ?>
            
    </div><!--End of container-->

<hr>

<footer class="container fluid text-center text-danger">
    <h5>Code Factory - John Oxales 2020</h5>
</footer>    

</body>


</html>
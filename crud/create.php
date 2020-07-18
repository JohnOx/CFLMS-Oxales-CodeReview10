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


    <div class ="container">

    <h2>Add new Medias</h2>

        <form action="actions/a_create.php" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="all_title" >
            </div>

            <div class="form-group">
                <label for="authorFirstName">Author First Name</label>
                <input type="text" class="form-control" name="author_fName" >
            </div>

            <div class="form-group">
                <label for="authorLastName">Author Last Name</label>
                <input type="text" class="form-control" name="author_lName" >
            </div>

            <div class="form-group">
                <label for="published">Published</label>
                <input type="text" class="form-control" name="all_publish_date" placeholder="Publish Date YYYY-MM-DD">
            </div>

            <div class="form-group">
                <label for="publisherName">Published by:</label>
                <input type="text" class="form-control" name="publisher_name" placeholder="Publisher Company">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <!-- <input type="text" class="form-control" name="all_status" placeholder="available or reserved?" > -->
                    <select class="custom-select" name="all_status" >
                        <option selected>Availability:</option>
                        <option value="1">reserved</option>
                        <option value="2">available</option>  
                    </select>
            </div>

            <div class="form-group">
                <label for="mediaType">Media Type</label>
                <!-- <input type="text" class="form-control" name="all_media_type" placeholder="Book, CD, DVD,...?" > -->
                <select class="custom-select" name="all_media_type" >
                        <option selected>Type of Media:</option>
                        <option value="1">Book</option>
                        <option value="2">CD</option>
                        <option value="3">DVD</option>    
                    </select>
            </div>


            <input class="btn btn-primary btn-lg" type="submit" role="button" value="Add Media"></input>
           
            <a class="btn btn-success btn-lg" href="index.php" role="button">Home</a>
        </form>

        <hr>
        
    </div>

    </body>


</html>
<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn = $data['isbn'];
        $description = $data['description'];
        $type = $data['type'];
        $authorFirstName = $data['author_first_name'];
        $authorLastName = $data['author_last_name'];
        $pubisherName = $data['publisher_name'];
        $publisherAdress = $data['publisher_address'];
        $publishDate = $data['publish_date'];
        $status = $data['status'];

    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details</title>

        <nav class="navbar bg-light">
  <form class="container-fluid justify-content-start">
    
    <a href= "index.php"><button class="class='btn btn-primary btn-sm" type="button" >Home</button></a>
  </form>
</nav>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            img {
                width: 500px !important;
                height: 400px !important;
                
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>

        </head>
   
        <body>
            
        <div class="card mb-3">
  <img src='<?php echo $image ?>' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Title: <?php echo $title?></h5>
    <hr>
    <p class="card-text">ISBN-Code: <?php echo $isbn?></p><hr>
    <p class="card-text">Author: <?php echo $authorFirstName. " " .$authorLastName?></p><hr>
    <p class="card-text">Description: <?php echo $description?></p><hr>
    <p class="card-text">Type: <?php echo $type?></p><hr>
    <p class="card-text">Publisher: <?php echo $pubisherName?></p><hr>
    <p class="card-text">Publisher address: <?php echo $publisherAdress?></p><hr>
    <p class="card-text">Publish date: <?php echo $publishDate?></p><hr>

    
 
    <p class="card-text"><small class="text-muted">Status: <?php echo $status?></small></p>
  </div>
</div>

        </body>

</html>



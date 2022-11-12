<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($connect ,$sql);
$tbody=''; 
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "  <div class='col'>
        <div class='card h-100'>
          <img src='".$row['image']."' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>" .$row['title']."</h5>
            <p class='card-text'> 
            
            <td> Author: ".$row['author_first_name']." ".$row['author_last_name']."</td> <hr/>
            <td> Publisher: ".$row['publisher_name']."</td> <hr/>
            " .$row['description']."</p>
          </div>
          <div class='card-footer'>
          <td>
          <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
          <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
          <a href='details.php?id=" .$row['id']."'><button class='btn btn-warning btn-sm' type='button'>Details</button></a>
          </td>
          </div>
        </div>
      </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Library</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>

<nav class="navbar bg-light">
  <form class="container-fluid justify-content-start">
    
    <a href= "create.php"><button class="btn btn-outline-success me-2"type="button" >Add product</button></a>
  </form>
</nav>
    </head>
    <body>       
            
      <div class="row row-cols-1 row-cols-md-3 g-4">
       
        <?= $tbody;?>
        </div>
    </body>
</html>
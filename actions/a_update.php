<?php
require_once 'db_connect.php';

if ($_POST) {    
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $isbn = $_POST['isbn'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $authorFirstName = $_POST['author_first_name'];
    $authorLastName = $_POST['author_last_name'];
    $pubisherName = $_POST['publisher_name'];
    $publisherAdress = $_POST['publisher_address'];
    $publishDate = $_POST['publish_date'];
    $status = $_POST['status'];

   
  
  if(empty($publishDate)) {

               
    $sql = "UPDATE products SET title = '$title', image = '$image', isbn ='$isbn', description ='$description', type ='$type', author_first_name ='$authorFirstName', 
    author_last_name ='$authorLastName', publisher_name ='$pubisherName', publisher_address ='$publisherAdress', status = '$status'  WHERE id = {$id}";

  }  else { $sql = "UPDATE products SET title = '$title', image = '$image', isbn ='$isbn', description ='$description', type ='$type', author_first_name ='$authorFirstName', 
    author_last_name ='$authorLastName', publisher_name ='$pubisherName', publisher_address ='$publisherAdress', status = '$status'  WHERE id = {$id}";}            
       
    
        
  
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The product was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating product : <br>" . mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Notification</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
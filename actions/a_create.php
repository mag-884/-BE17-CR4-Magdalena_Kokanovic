<?php
require_once 'db_connect.php';


if ($_POST) {   
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

    
   
    $sql = "INSERT INTO products (title, image, isbn, description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date ) 
    VALUES ('$title', '$image','$isbn','$description','$type','$authorFirstName','$authorLastName','$pubisherName','$publisherAdress','$publishDate')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The product below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $image </td>
            <td> $isbn </td>
            </tr></table><hr>";

    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
                <h1>Notification:</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
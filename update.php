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
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update product <img class='img-thumbnail rounded-circle' src='<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Change product name" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type= "text" name="image" placeholder="Change image" value ="<?php echo $image ?>" /></td>
                    </tr>
                    <tr>
                        <th>ISBN-Code</th>
                        <td><input class="form-control" type= "text" name="isbn" placeholder="Change ISBN-Code" value ="<?php echo $isbn ?>" /></td>
                    </tr>

                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type= "text" name="description" placeholder="Change Description" value ="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type= "text" name="type" placeholder="Change type" value ="<?php echo $type ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author first name</th>
                        <td><input class="form-control" type= "text" name="author_first_name" placeholder="Change author first name" value ="<?php echo $authorFirstName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author last name</th>
                        <td><input class="form-control" type= "text" name="author_last_name" placeholder="Change author last name" value ="<?php echo $authorLastName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher name</th>
                        <td><input class="form-control" type= "text" name="publisher_name" placeholder="Change publisher name" value ="<?php echo $pubisherName ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher address</th>
                        <td><input class="form-control" type= "text" name="publisher_address" placeholder="Change publisher address" value ="<?php echo $publisherAdress ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class="form-control" type= "date" name="publish_date" placeholder="Change publish date" value ="<?php echo $publishDate ?>" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input class="form-control" type= "text" name="status" placeholder="Change status" value ="<?php echo $status ?>" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                     
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
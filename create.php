<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add Product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Product</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Insert product title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name= "image" placeholder="Insert image link" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Code</th>
                        <td><input class='form-control' type="text" name="isbn" placeholder="Insert ISBN Code"/></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name="description" placeholder="Insert description"/></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="type" placeholder="Book/CD/DVD"/></td>
                    </tr>

                    <tr>
                        <th>Author first name</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="insert author first name"/></td>
                    </tr>
                    <tr>
                        <th>Author last name</th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="Insert author last name"/></td>
                    </tr>

                    <tr>
                        <th>Publisher name</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Insert publisher name"/></td>
                    </tr>

                    <tr>
                        <th>Publisher address</th>
                        <td><input class='form-control' type="text" name="publisher_address" placeholder="Insert publisher address"/></td>
                    </tr>

                    <tr>
                        <th>Publish date</th>
                        <td><input class='form-control' type="date" name="publish_date" value=""/></td>
                    </tr>
                    
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
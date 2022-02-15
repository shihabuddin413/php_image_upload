
<?php
    $images = [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Host</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div>
            <h3>Image Host</h3>
        </div>
        <div>
            <h3>Upload a image</h3>

            <form  class="grid-col" action="logic.php" method="POST" enctype="multipart/form-data">
                <h3>Title </h3>
                <input type="text" name="title" >

                <h3>Select file </h3>
                <label>
                    Upload A new file 
                    <input type="file" name="src" >
                </label>

                <h5></h5>
                <input type="submit" name= "submit" value="Upload">
            </form>
        </div>
        <div>
            <?php if (count($images)>0): ?>
                <div>
                    <table>
                        <tr>   
                            <td><b>Sl.</b></td>
                            <td><b>Title</b></td>
                            <td><b>Preview</b></td>
                        </tr>
                        <?php foreach ($variable as $key => $value): ?>
                            <tr>
                                <td>Sl.</td>
                                <td>Title</td>
                                <td>Preview</td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php else: ?>
                <div>
                    <p>No Image found to display</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
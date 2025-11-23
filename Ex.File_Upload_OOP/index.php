<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <h3>File Upload Form</h3>
        <div>
            <label for="file">File:</label>
            <input type="file" name="file" id="file">
        </div>
        <div>
            <button type="submit" name="submit">Upload</button>
        </div>

        <?php
        include 'FileUploadClass.php';
        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];
            $obj = new FileUploadClass($file);
            $obj->upload();
        }
        ?>
    </form>

</body>

</html>
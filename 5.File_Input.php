<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Input</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    form {
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      width: 350px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="file"] {
      width: 100%;
      padding: 6px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background: #007bff;
      border: none;
      color: #fff;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background: #0056b3;
    }

    .result {
      margin-top: 15px;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
      font-weight: bold;
    }

    .success {
      background: #e9f7ef;
      border-left: 4px solid #2ecc71;
      color: #2ecc71;
    }

    .error {
      background: #fdecea;
      border-left: 4px solid #e74c3c;
      color: #e74c3c;
    }
  </style>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <h3>File Input</h3>

    <div>
      <label for="file">File:</label>
      <input type="file" name="file" id="file">
    </div>

    <input type="submit" name="submit" value="Submit">

    <?php
    if (isset($_POST['submit'])) {
      $file = $_FILES['file'];

      // Error
      $error = [];

      // Max file Size
      $max_size = 400 * 1024;

      // Allowed file types
      $valid_extensions = ['jpg', 'jpeg', 'png', 'gif', "pdf", "docx"];

      // Current File Extension
      $current_extension = pathinfo($file['name'], PATHINFO_EXTENSION);

      // Check if file size is too large
      if ($file['size'] > $max_size) {
        $error[] = "File size is too large.";
      }

      // Check if file type is valid
      if (!in_array($current_extension, $valid_extensions)) {
        $error[] = "Invalid file type.";
      }

      // Check if any errors
      if (count($error) > 0) {
        foreach ($error as $err) {
          echo "<div class='result error'>$err</div>";
        }
      } else {
        move_uploaded_file($file['tmp_name'], "uploads/" . $file['name']);
        echo "<div class='result success'>File uploaded successfully.</div>";
      }
    }
    ?>
  </form>
</body>

</html>
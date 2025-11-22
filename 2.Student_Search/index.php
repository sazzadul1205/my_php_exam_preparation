<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Student</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f3f3f3;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      background: white;
      padding: 25px 35px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 320px;
    }

    h3 {
      margin-bottom: 20px;
      text-align: center;
    }

    div {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    input[type="text"]:focus {
      border-color: #007bff;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #007bff;
      border: none;
      color: white;
      font-size: 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    /* Output text */
    .result {
      margin-top: 20px;
      font-weight: bold;
      text-align: center;
    }
  </style>

</head>

<body>
  <form action="" method="post">
    <h3>Search Student By ID</h3>

    <div>
      <label for="id">ID:</label>
      <input type="text" name="id" id="id">
    </div>

    <div>
      <button type="submit" name="submit">Search</button>
    </div>
    <?php
    include 'Class.php';
    if (isset($_POST['submit'])) {
      $id = $_POST['id'];

      $student = new Student($id);
      $data = $student->getData();

      echo $data;
    }
    ?>
  </form>

</body>

</html>
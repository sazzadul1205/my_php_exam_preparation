<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Largest & Smallest Value</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    form {
      background: #ffffff;
      padding: 25px 30px;
      border-radius: 8px;
      width: 330px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 12px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background: #007bff;
      color: #fff;
      border: none;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background: #0056b3;
    }

    .result {
      margin-top: 15px;
      padding: 10px;
      background: #e9f7ef;
      border-left: 4px solid #2ecc71;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <h3>Largest & Smallest Value</h3>

    <input type="number" name="num[]" placeholder="Enter First Number"><br>
    <input type="number" name="num[]" placeholder="Enter Second Number"><br>
    <input type="number" name="num[]" placeholder="Enter Third Number"><br>
    <input type="number" name="num[]" placeholder="Enter Fourth Number"><br>
    <input type="number" name="num[]" placeholder="Enter Fifth Number"><br>
    <input type="submit" name="submit" value="Submit">

    <?php
    if (isset($_POST['submit'])) {
      $num = $_POST['num'];

      $largest = $num[0];
      $smallest = $num[0];

      foreach ($num as $value) {
        if ($value > $largest) {
          $largest = $value;
        }
        if ($value < $smallest) {
          $smallest = $value;
        }
      }

      echo "<div class='result'>";
      echo "Largest Value: " . $largest . "<br>";
      echo "Smallest Value: " . $smallest;
      echo "</div>";
    }
    ?>
  </form>
</body>

</html>
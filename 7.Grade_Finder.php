<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Finder</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    form {
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      width: 320px;
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

    input[type="number"],
    input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 15px;
      outline: none;
    }

    input[type="number"]:focus {
      border-color: #007bff;
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
      font-weight: bold;
      text-align: center;
      border-radius: 5px;
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
  <form action="" method="post">
    <h3>Grade Finder</h3>

    <div>
      <label for="marks">Grade: ( A, B, C, D, F ) </label>
      <input type="text" name="marks" id="marks" maxlength="1" placeholder="Enter grade letter">
    </div>

    <input type="submit" name="submit" value="Submit">

    <?php
    if (isset($_POST['submit'])) {
      $marks = strtoupper(trim($_POST['marks'])); // Convert to uppercase

      if ($marks == 'A') {
        echo "<div class='result'>Excellent</div>";
      } elseif ($marks == 'B') {
        echo "<div class='result'>Good</div>";
      } elseif ($marks == 'C') {
        echo "<div class='result'>Fair</div>";
      } elseif ($marks == 'D') {
        echo "<div class='result'>Poor</div>";
      } elseif ($marks == 'F') {
        echo "<div class='result'>Fail</div>";
      } else {
        echo "<div class='result error'>Invalid Input</div>";
      }
    }
    ?>
  </form>
</body>

</html>
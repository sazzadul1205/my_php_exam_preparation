<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial Calculator</title>

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

    input[type="number"] {
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
      border-radius: 5px;
      text-align: center;
      font-weight: bold;
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
    <h3>Factorial Calculator</h3>

    <div>
      <label for="number">Number:</label>
      <input type="number" name="number" id="number" min="0" placeholder="Enter a number">
    </div>

    <input type="submit" name="submit" value="Calculate">

    <?php
    if (isset($_POST['submit'])) {
      $number = $_POST['number'];

      if ($number < 0) {
        echo "<div class='result error'>Please enter a non-negative number.</div>";
      } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
          $factorial *= $i;
        }
        echo "<div class='result'>Factorial of $number is: $factorial</div>";
      }
    }
    ?>
  </form>
</body>

</html>
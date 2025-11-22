<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime OR Not</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    form {
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 320px;
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

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 15px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #007bff;
      border: none;
      color: white;
      font-weight: bold;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }

    .result {
      margin-top: 15px;
      font-weight: bold;
      text-align: center;
    }
  </style>

</head>

<body>

  <form method="POST">
    <h3>Check if a number is prime</h3>

    <div>
      <label for="num">Number:</label>
      <input type="text" name="num" id="num">
    </div>

    <button type="submit" name="submit">Check</button>

    <?php
    if (isset($_POST['submit'])) {
      $num = $_POST['num'];

      if ($num == 1) {
        echo "<div class='result' style='color:red;'>$num is not a prime number.</div>";
      } elseif ($num == 2) {
        echo "<div class='result' style='color:green;'>$num is a prime number.</div>";
      } elseif ($num % 2 == 0) {
        echo "<div class='result' style='color:red;'>$num is not a prime number.</div>";
      } else {
        echo "<div class='result' style='color:green;'>$num is a prime number.</div>";
      }
    }
    ?>
  </form>

</body>

</html>
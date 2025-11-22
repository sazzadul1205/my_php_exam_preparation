<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Registration System</title>
  <style>
    /* Reset some default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    div {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #007bff;
      outline: none;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>


<body>
  <!-- Form -->
  <form action="" method="post">
    <!-- Title -->
    <h3>Login Registration System</h3>

    <!-- PHP -->
    <?php
    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];

      $errors = []; // Array to store all errors

      // Check empty fields
      if (empty($username) || empty($email)) {
        $errors[] = "Please fill in all fields.";
      }

      // Validate email
      if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
      }

      // Check username length
      if (!empty($username) && (strlen($username) < 4 || strlen($username) > 8)) {
        $errors[] = "Username must be between 4 and 8 characters.";
      }

      // Display errors
      if (!empty($errors)) {
        foreach ($errors as $error) {
          echo "<p class='error'>$error</p>";
        }
      } else {
        // No errors, display submitted data
        echo "<p>Username: $username</p>";
        echo "<p>Email: $email</p>";
      }
    }
    ?>


    <!-- Username -->
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
    </div>

    <!-- Email -->
    <div>
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
    </div>

    <!-- Submit -->
    <div>
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</body>

</html>
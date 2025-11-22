<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 0;
      margin: 0;
    }

    table {
      border-collapse: collapse;
      width: 400px;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      border-radius: 5px;
      overflow: hidden;
    }

    thead {
      background: #007bff;
      color: #fff;
    }

    th,
    td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    tbody tr:nth-child(even) {
      background: #f9f9f9;
    }

    tbody tr:hover {
      background: #e6f0ff;
    }

    h3 {
      background: #e9f7ef;
      color: #2ecc71;
      padding: 10px 20px;
      border-left: 4px solid #2ecc71;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <?php
  $Student_Data = [
    "Sazzad" => 43,
    "Rihana" => 45,
    "Jamil" => 12,
    "Amina" => 89,
    "Farhan" => 34,
  ];

  // Find maximum roll number
  $max_roll = max($Student_Data);

  $max_students = array_keys($Student_Data, $max_roll);
  $max_names = implode(", ", $max_students);
  ?>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($Student_Data as $name => $roll) : ?>
        <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $roll; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <h3>Maximum Roll Number: <?php echo $max_roll; ?> (<?php echo $max_names; ?>)</h3>
</body>

</html>
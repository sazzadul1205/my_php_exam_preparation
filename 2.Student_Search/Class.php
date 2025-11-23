<?php

class Student
{
  // ID
  public $id;

  // Constructor
  public function __construct($id)
  {
    $this->id = $id;
  }

  // Get the student data
  public function getData($id)
  {
    // File name
    $file = "Student_Data.txt";

    // Check if the file exists
    if (!file_exists($file)) {
      echo "Result file not found!";
      return;
    }

    // Read the file
    $lines = file($file);

    // Loop through the file
    foreach ($lines as $line) {
      $data = explode(" ", $line);

      if ($data[0] == $id) {
        echo "ID: " . $data[0] . "<br>";
        echo "Name: " . $data[1] . "<br>";
        echo "Batch: " . $data[2] . "<br>";
        return;
      }
    }

    echo "No result found for ID: $id";
  }
}

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
  public function getData()
  {
    // Open the file
    $file = fopen("Student_data.txt", "r");

    // Check if the file can be opened
    if (!$file) {
      return "File can't be opened.";
    }

    // Read the file line by line
    while (!feof($file)) {

      // Read a single line
      $line = fgets($file);

      // Remove leading and trailing whitespace
      $line = trim($line);
      if ($line === "") return "<div class='result' style='color:red;'>ID not found.</div> ";   // skip blank lines


      // Split the line into an array
      list($id, $name, $roll) = explode(" ", $line);

      // Check if the ID matches
      if ($id == $this->id) {
        return "<div class='result'>
            ID: $id <br>
            Name: $name <br>
            Roll: $roll
          </div>";
      }
    }

    // Close the file
    fclose($file);
    return "<div class='result' style='color:red;'>ID not found.</div>";
  }
}

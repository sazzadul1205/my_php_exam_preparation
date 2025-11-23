<?php

class FileUploadClass
{
    public $fileInfo;

    public function __construct($file)
    {
        $this->fileInfo = $file;
    }

    public function upload()
    {
        $file = $this->fileInfo;
        $name = $file['name'];
        $tempName = $file['tmp_name'];
        $size = $file['size'];

        $AllowedSize = 1000000;
        $AllowedTypes = array('jpg', 'png', 'jpeg', 'gif');

        $errors = [];

        $data = pathinfo($name);
        $extension = strtolower($data['extension']);

        if ($size > $AllowedSize) {
            $errors[] = 'File size is too big';
        }

        if (!in_array($extension, $AllowedTypes)) {
            $errors[] = 'File type is not allowed';
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error . '<br>';
            }
        } else {
            move_uploaded_file($tempName, 'Uploads/' . $name);
            echo 'File uploaded successfully';
        }
    }
}

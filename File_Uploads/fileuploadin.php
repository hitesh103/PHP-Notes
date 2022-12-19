<?php

if(isset($_POST['name'])){
    $errors = [];
    $fileName = $_FILES['filename']['name'];
    $file_tmp = $_FILES['filename']['tmp_name'];
    $file_size = $_FILES['filename']['size'];
    $file_extn = strtolower(end(expload('.',$fileName)));
    $allowExtns = ["jpg", "jpeg", "png"];

    if(!in_array($file_extn,$allowExtns)){
        $errors[] = "Invalid file extension. Only JPG, JPEG and PNG are allowed";
    }

    if($file_size > 209752){
        $errors[] = "File size must be less than 2 MB";
    }

    if(empty($errors)){
       $destination = getcwd(). "/upload/". $fileName;
       if( move_uploaded_file($file_tmp, $destination)){
          echo "file uploaded successfully";
       }
       else {
        echo "could not  uploaded file";
       }
}
else {
     echo "<pre>";
     print_r($errors);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipath/form-data">
        <input type="file" name = "filename">
        <input type="submit" name="submit" value="SUBMIT"/> 
    </form>
    <!-- enctype="multipath/form-data" - always use this atribute for upload without this the file will not be uploaded-->
    
</body>
</html>
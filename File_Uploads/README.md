# File Upload

To handle file uploads in PHP, you can use the `$_FILES` superglobal array.

This array contains all the information about uploaded files, including the file name, temporary path, size, and type.

 Here is an example of how you can handle file uploads in PHP:

```php

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];

  // File properties
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];

  // Work out the file extension
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  // Allowed file types
  $allowed = array('txt', 'pdf', 'doc', 'docx');

  // Check if the file type is allowed
  if (in_array($file_ext, $allowed)) {
    // Check for errors
    if ($file_error === 0) {
      // Check file size
      if ($file_size <= 2097152) {
        // Create a new file name
        $file_name_new = uniqid('', true) . '.' . $file_ext;
        // Set the file path
        $file_destination = 'uploads/' . $file_name_new;

        // Attempt to move the file
        if (move_uploaded_file($file_tmp, $file_destination)) {
          echo "The file has been uploaded successfully.";
        } else {
          echo "There was an error uploading the file.";
        }
      } else {
        echo "The file is too large.";
      }
    } else {
      echo "There was an error uploading the file.";
    }
  } else {
    echo "The file type is not allowed.";
  }
}
```

This example checks for common issues that can arise when handling file uploads, such as the file size, file type, and any errors that occurred during the upload process. 

It also generates a unique file name for the uploaded file to avoid overwriting existing files with the same name

To use this code, you will need to include an HTML form in your PHP script that allows the user to select a file to upload. The form should include an input element with the type attribute set to "file" and the `name` attribute set to "file".



```html
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="Upload" name="submit">
</form>

```



The `enctype` attribute of the form element should be set to "multipart/form-data" to indicate that the form will be sending binary data (the uploaded file).

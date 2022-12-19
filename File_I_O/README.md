# File & I/O 

PHP provides a set of functions for reading and writing files, as well as for managing directories and file permissions. These functions are known as the PHP file system functions.

Here are some examples of how you can use PHP's file system functions:

### Reading files:

```php
// Read the contents of a file into a string
$contents = file_get_contents('filename.txt');

// Read the contents of a file into an array, with each line as an element
$lines = file('filename.txt');

// Read a file line by line using a file handle
$handle = fopen('filename.txt', 'r');
while (($line = fgets($handle)) !== false) {
  // process the line
}
fclose($handle);
```

### Writing to a file:

```php
// Write a string to a file
file_put_contents('filename.txt', 'Hello, world!');

// Append a string to a file
$current = file_get_contents('filename.txt');
$current .= "Goodbye, world!";
file_put_contents('filename.txt', $current);

// Write to a file using a file handle
$handle = fopen('filename.txt', 'w');
fwrite($handle, 'Hello, world!');
fclose($handle);
```

### Managing directories:

```php
// Create a new directory
mkdir('new_directory');

// Remove an empty directory
rmdir('empty_directory');

// List the files in a directory
$files = scandir('directory');

// Check if a directory exists
if (is_dir('directory')) {
  // do something
}
```
### Managing file permissions:

```php
// Change the permissions of a file
chmod('filename.txt', 0644);

// Check if a file is readable
if (is_readable('filename.txt')) {
  // do something
}

// Check if a file is writable
if (is_writable('filename.txt')) {
  // do something
}
```

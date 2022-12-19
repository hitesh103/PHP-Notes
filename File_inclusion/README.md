 # File Inclusion

In PHP, file inclusion is a way to include the contents of one PHP file into another PHP file. There are several ways to include a file in PHP, such as using the `include` or `require` functions, or the `include_once` or `require_once` functions.

## include function

The `include` function is used to include a file in PHP. If the file cannot be found, a warning message will be displayed, but the script will continue to execute.
```php
include 'filename.php';

```
## require function 
The `require` function is similar to `include`, but it will produce a fatal error if the file cannot be found, and the script will stop executing.
```php
require 'filename.php';

```
## include_once and require_once

The `include_once` and `require_once` functions are similar to `include` and `require`, respectively, but they will only include the file once, even if the file is included multiple times. This can be useful to prevent errors caused by multiple function declarations or variable assignments.

```php
include_once 'filename.php';
require_once 'filename.php';

```

File inclusion is useful when you need to reuse code in multiple scripts, or when you want to separate code into smaller, more manageable files. However, it's important to be careful when using file inclusion, as it can also introduce security vulnerabilities if the included files are not properly sanitized

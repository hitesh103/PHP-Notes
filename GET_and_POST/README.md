 # GET and POST

In PHP, the `$_GET` and `$_POST` superglobal arrays are used to retrieve data from HTML forms submitted using the GET and POST methods, respectively.


 Here is an example of a form that uses the GET method to submit data:

```html
<form action="submit.php" method="get">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 
```

To retrieve the form data in the `submit.php` script, you can use the `$_GET` array:
```php
$name = $_GET['name'];
$email = $_GET['email'];
```

Here is an example of a form that uses the POST method to submit data:



```html
  <form action="submit.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 


```

To retrieve the form data in the `submit.php` script, you can use the `$_POST` array:
```php
$name = $_POST['name'];
$email = $_POST['email'];
```

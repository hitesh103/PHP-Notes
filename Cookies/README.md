# Cookies

Cookies are small pieces of data that are stored by a web browser and can be accessed by a web server. They are often used to store user preferences or to track user activity on a website.

In PHP, you can use the `setcookie()` function to set a cookie and the `$_COOKIE` superglobal array to access the values of cookies.

Here is an example of how you can set and retrieve a cookie in PHP:

```php
<?php
// Set a cookie
setcookie('favorite_color', 'green', time() + 86400); // expires in 1 day

// Check if a cookie has been set
if (isset($_COOKIE['favorite_color'])) {
  // Print the value of the cookie
  echo 'Your favorite color is ' . $_COOKIE['favorite_color'];
} else {
  echo 'You have not set a favorite color.';
}
```

The `setcookie()` function takes three arguments: the name of the cookie, the value of the cookie, and the expiration time of the cookie (in seconds). If you set the expiration time to a value in the past, the cookie will be deleted.

The `$_COOKIE` superglobal array is an associative array that contains the values of all the cookies that are set by the web server. You can access the value of a specific cookie using the cookie name as the key.

Note that cookies can only be set or accessed from the server-side, not from the client-side. This means that you must use PHP to set or retrieve the value of a cookie, and you cannot use JavaScript or any other client-side language

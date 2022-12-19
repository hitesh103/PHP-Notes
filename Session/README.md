 # Sessions

 In PHP, a session is a way to store data across multiple pages on a website.
  When a user visits a website, a session is created on the server to store data specific to that user. The server assigns the user a unique session ID, which is stored in a cookie on the user's computer.


 Sessions are useful for storing data that needs to be accessed and maintained across multiple pages on a website, such as a shopping cart or a user's login status.



 To use sessions in PHP, you need to start the session using the `session_start()` function at the beginning of each page that needs to access session data. This function must be called before any output is sent to the browser


 #### To set a session variable, you can use the `$_SESSION` superglobal array:



```php
$_SESSION['variable_name'] = 'value';
```

#### To retrieve a session variable, you can use the same syntax:

```php
$value = $_SESSION['variable_name'];
```

#### To end a session, you can use the `session_destroy()` function. This function removes all session variables and destroys the session.


```php
  session_destroy();

```

It's important to note that sessions are stored on the server, not the client, so they are not vulnerable to client-side attacks such as cookie theft. However, it's still important to properly secure your session data to prevent unauthorized access

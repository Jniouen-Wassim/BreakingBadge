<?php
include_once('components/functions.php');

if(!empty($_POST['email'])){
    if(login($_POST['email'], $_POST['password'])){
            header("Location: ?p=dashboard");
    };
}
?>

<form method="post">
<label for="email">Email Address</label>
<br>
<input type="email" name="email">
<br>
<br>
<label for="password">Password</label>
<br>
<input type="password" name="password">
<br>
<input type="submit" name="submit" value="Submit">
</form>
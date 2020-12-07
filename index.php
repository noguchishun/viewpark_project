<?php
session_start();
?>
<form method="post" name="login" action="login.php">
<label for="name" class="labelname"> Username </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password </label>
<input type="password" name="password" id="passid" required="required" /><br />
<input type="submit" name="submit" id="submit" value="Login" />
</form>
<?php
phpinfo();
?>

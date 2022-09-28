<?php
if($_POST["message"]) {
    mail("me@michaelthousand.com", "Form to email message", $_POST["message"], "From: submission@michaelthousand.com");
}
?>


<!DOCTYPE html>
<body>
<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
</body>
</HTML>

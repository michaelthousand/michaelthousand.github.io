<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
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

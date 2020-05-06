<?php
if($_POST["message"]) {
    mail("samsonoyebamiji02@gmail.com", "Form to email message", $_POST["message"], "From:samsonaoyebamiji.02@gmail.com");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title> Template Css</title>
<style>

</style>
</head>
<body>
<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
</body>
</html>
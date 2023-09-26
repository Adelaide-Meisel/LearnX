<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="columns">
       <p></p>
    </div>
    <div class="columns">
        <form action="form.php" method="post">
            <label for="fname">User Name:</label><br>
            <input type="text" id="user" name="user" placeholder="Sample Name"><br>
            <label for="passW">Password:</label><br>
            <input type="text" id="passW" name="passW" placeholder="Sample Password"><br>
            <label for="mail">Email:</label><br>
            <input type="email" id="mail" name="mail" placeholder="sample@gmail.com"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="columns">
       <p></p>
    </div>
</body>
</html>

<?php

?>
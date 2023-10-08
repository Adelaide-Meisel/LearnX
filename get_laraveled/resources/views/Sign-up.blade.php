<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">

<div>
    <p>Please leave your name, your email, and a message to me.<br>
    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="Sample"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="Text">
        <label for="mail">Email:</label><br>
        <input type="email" id="mail" name="mail" placeholder="sample@gmail.com"><br>

        <input type="radio" id="choice1" name="choice1" value="Org">
        <label for="choice1"> I am an organization</label><br>
        <input type="radio" id="choice2" name="choice2" value="Home">
        <label for="choice2"> I am homeschooled/ my child is homeschooled</label><br>
        <input type="radio" id="choice3" name="choice3" value="Neither">
        <label for="choice3"> I am neither</label><br>

        <textarea name="message" rows="10" cols="30"></textarea><br>
    </form>
</div>
</html>
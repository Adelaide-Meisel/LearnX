<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">

<div style="position:absolute; margin-right: 25px; margin-left: 505px;">
    <form>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="Sample"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="Text"><br>
        <label for="mail">Email:</label><br>
        <input type="email" id="mail" name="mail" placeholder="sample@gmail.com"><br>

        <input type="radio" id="choice1" name="choice" value="Org">
        <label for="choice1"> I am an organization</label><br>
        <input type="radio" id="choice2" name="choice" value="Home">
        <label for="choice2"> I am homeschooled/ my child is homeschooled</label><br>
        <input type="radio" id="choice3" name="choice" value="Neither">
        <label for="choice3"> I am neither</label><br>

        <input type="text" id="orgAt" name="argAt" placeholder="What is your organizations @"><br>
        <input type="text" id="homeSchool" name="homeSchool" placeholder="What is your (or your childs) email"><br>

        <label for="message"> What is your purpose for joining</label><br>
        <textarea name="message" rows="10" cols="30"></textarea><br>
    </form>
</div>
</html>
<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">

<div style="position:absolute; margin-right: 25px; margin-left: 505px;">
    <form form method="POST" action="/users">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"  value="{{old('name')}}"><br>

        <label for="mail">Email:</label><br>
        <input type="email" id="mail" name="email" value="{{old('email')}}"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="newPassword" name="password" value="{{old('password')}}"><br>

        <label for="passord2">Confirm Password:</label><br>
        <input type="password" id="password2" name="password_confirmation" value="{{old('password_confirmation')}}"><br>

        <input type="radio" id="choice1" name="choice" value="Org">
        <label for="choice1"> I am an organization</label><br>
        <input type="radio" id="choice2" name="choice" value="Teacher">
        <label for="choice2"> I am a teacher</label><br>
        <input type="radio" id="choice3" name="choice" value="Student">
        <label for="choice3"> I am a student</label><br>

        <!--<input type="text" id="orgAt" name="argAt" placeholder="What is your organizations @"><br>
        <input type="text" id="homeSchool" name="homeSchool" placeholder="What is your (or your childs) email"><br>-->

        <label for="message"> What is your purpose for joining</label><br>
        <textarea name="message" rows="10" cols="30"></textarea><br>

        <input type="submit" id="submit" name="submit" value="Create Account">
    </form>
</div>
</html>
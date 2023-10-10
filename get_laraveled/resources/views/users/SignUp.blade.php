<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">

<div style="position:absolute; margin-right: 25px; margin-left: 505px;">
    <!--Goes to route and then to UserController to be varified and stored-->
    <!--The value "old" makes it so the boxes retain what they say so the user doesnt have 
    to repeat themself-->
    <form form method="POST" action="/users">
        @csrf <!--Makes it so people cant use scripts against your site-->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"  value="{{old('name')}}"><br>
        <!--Gets name-->
        <label for="mail">Email:</label><br>
        <input type="email" id="mail" name="email" value="{{old('email')}}"><br>
        <!--Gets email-->
        <label for="password">Password:</label><br>
        <input type="password" id="newPassword" name="password" value="{{old('password')}}"><br>
        <!--Gets password-->
        <label for="passord2">Confirm Password:</label><br>
        <input type="password" id="password2" name="password_confirmation" value="{{old('password_confirmation')}}"><br>
        <!--Confirms password with a custom name-->
        <input type="radio" id="choice1" name="choice" value="Org">
        <label for="choice1"> I am an organization</label><br>
        <input type="radio" id="choice2" name="choice" value="Teacher">
        <label for="choice2"> I am a teacher</label><br>
        <input type="radio" id="choice3" name="choice" value="Student">
        <label for="choice3"> I am a student</label><br>
        <!--Gets your position-->
        <!--Will add parts next to make it get small errors under the inputs if
        they arent good, along with other features.-->

        <!--<input type="text" id="orgAt" name="argAt" placeholder="What is your organizations @"><br>
        <input type="text" id="homeSchool" name="homeSchool" placeholder="What is your (or your childs) email"><br>-->

        <label for="message"> What is your purpose for joining</label><br>
        <textarea name="message" rows="10" cols="30" value="{{old('message')}}"></textarea><br>
        <!--Gets the users reason for joining-->

        <input type="submit" id="submit" name="submit" value="Create Account">
    </form>
</div>
</html>
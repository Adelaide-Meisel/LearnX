<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Sign Up">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: rgb(205, 186, 203);">
    <div style="position:absolute; margin-right: 25px; margin-left: 505px;">
        <!--Goes to route and then to UserController to be varified and stored-->
        <!--The value "old" makes it so the boxes retain what they say so the user doesnt have 
        to repeat themself-->
        <form form method="POST" action="/users">
            @csrf <!--Makes it so people cant use scripts against your site-->
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"  value="{{old('name')}}"><br>
            @error('name')
                <p style="color:red">{{$message}}</p>
            @enderror
            <!--Gets name. Errors if you dont put it in or it is incorrect-->
            <label for="mail">Email:</label><br>
            <input type="email" id="mail" name="email" value="{{old('email')}}"><br>
            @error('email')
                <p style="color:red">{{$message}}</p>
            @enderror
            <!--Gets email. Errors if you dont put it in or it is incorrect-->
            <label for="password">Password:</label><br>
            <input type="password" id="newPassword" name="password" value="{{old('password')}}"><br>
            @error('password')
                <p style="color:red">{{$message}}</p>
            @enderror
            <!--Gets password. Errors if you dont put it in or it is incorrect-->
            <label for="passord2">Confirm Password:</label><br>
            <input type="password" id="password2" name="password_confirmation" value="{{old('password_confirmation')}}"><br>
            @error('password_confirmation')
                <p style="color:red">{{$message}}</p>
            @enderror
            <!--Confirms password with a custom confirmation name. Errors if you dont put it in or it is incorrect-->
            
            <!--<input type="radio" id="choice1" name="radio" value="Org">
            <label for="choice1"> I am an organization</label><br>
            <input type="radio" id="choice2" name="radio" value="Teacher">
            <label for="choice2"> I am a teacher</label><br>
            <input type="radio" id="choice3" name="radio" value="Student">
            <label for="choice3"> I am a student</label><br>-->
            @error('radio')
                <p style="color:red">{{$message}}</p>
            @enderror

            <!--Gets your position and errors if you dont pick one-->
            <!--Will add parts next to make it get small errors under the inputs if
            they arent good, along with other features.-->

            <!--<input type="text" id="orgAt" name="argAt" placeholder="What is your organizations @"><br>
            <input type="text" id="homeSchool" name="homeSchool" placeholder="What is your (or your childs) email"><br>-->

            
            <!--<label for="message"> What is your purpose for joining</label><br>
            <textarea name="message" rows="10" cols="30" value="{{old('message')}}"></textarea><br>-->
            <!--Gets the users reason for joining-->

            <input type="submit" id="submit" name="submit" value="Create Account">
        </form>
    </div>
</body>
</html>
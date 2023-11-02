<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Sign In">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="Sign-In-bg">
</body>

<div id="middle">

    <h1>
        <div class="Title">
            LearnX
        </div>
    </h1>

    <div style="position=absolute; font-family: Preahvihear; font-size: 18; margin-left: 20px">
        <a href={{ route("page.index") }}><<< Go Back<a><!--Goes back to index-->
    </div>

    <div class="sign-in">
        Sign-In
    </div>

    <!--Email and password boxes-->
        <style>
            input[type="text"]
                {
                    width: 300px;
                    height: 60px;
                }
        </style>
        <!--Goes to the authenticate route and then to the UserController-->
        <form method="POST" action="/users/authenticate">
            @csrf <!--Makes it so people cant use scripts against your site-->
            <div class="sign-in-box">
                <div>
                    <input type="text" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                    @error('email')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <input type="password" id="password" name="password" placeholder="Password" value="{{old('password')}}">
                    @error('password')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </div>
                <div style= " position: absolute; margin-left: 75px; margin-top: 50px; ">
                    <input style="font-family: Preahvihear; font-size: 30px;"type="submit" id="submit" name="submit" value="Lets Go >>>">
                </div>
                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                wrong info -->
            </div>
        </form>

    <div style="font-size: 20px; position:absolute">
        <a href={{ route("page.reset.pas") }} style="margin-left: 272px">I forgot my password</a>
    </div>

</div>
</html>
<!DOCTYPE html>

<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">
<body class="Sign-In-bg">
</body>

<div id="middle">

    <h1>
        <div class="Title">
            LearnX
        </div>
    </h1>

    <div style="position=absolute; font-family: Preahvihear; font-size: 18; margin-left: 20px"><!--make link-->
        <a href={{ route("page.index") }}><<< Go Back<a>
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
                    <input type="text" id="email" name="email" value="{{old('email')}}">
                </div>
                <div>
                    <input type="text" id="password" name="password" value="{{old('password')}}">
                </div>
            </div>
        </form>

    <div style="font-size: 20px; position:absolute">
        <a href={{ route("page.reset.pas") }} style="margin-left: 272px">I forgot my password</a>
    </div>

    <div style= "font-family: Preahvihear; font-size: 30px; position: absolute; margin-left: 225px; margin-top: 50px";>
    <a>Lets Go >>><a><!--turn into submit button and then have it redirect to the signed in page-->
</div>

</div>
</html>
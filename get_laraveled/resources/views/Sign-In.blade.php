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

<div>
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
    <div class="sign-in-box">
        <div>
            <input type="text" id="email" name="email" placeholder="Email">
        </div>
        <div>
            <input type="text" id="password" name="password" placeholder="Password">
        </div>
    </div>
</div>

<div style="font-size: 20px; position:absolute">
    <a href={{ route("page.reset.pas") }} style="margin-left: 328px">I forgot my password</a>
</div>
</div>
</html>
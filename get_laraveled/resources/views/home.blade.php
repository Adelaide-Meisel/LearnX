<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">
    <head>
        <h1>
            Welcome Home. You successfully logged in. Sadly there is nothing yet
        </h1>
    </head>
    <body>
        <form method="POST" action="/logout">
            @csrf
            <input type="submit" id="submit" name="submit" value="Logout">
        </form>
    </body>
</html>

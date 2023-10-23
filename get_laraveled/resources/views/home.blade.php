<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Learning Website">
        <meta name="keywords" content="HTML, CSS, JavaScript, Laravel">
        <meta name="author" content="Brodie Kirby And Adelaide Meisel">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <h1>
            Welcome Home. You successfully logged in. Sadly there is nothing yet
        </h1>
        <form method="POST" action="/logout">
            @csrf
            <input type="submit" id="submit" name="submit" value="Logout">
        </form>
    </head>
    <body>
    </body>
</html>

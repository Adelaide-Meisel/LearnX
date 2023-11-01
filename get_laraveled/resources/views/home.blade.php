<!DOCTYPE html>
{{-- <link rel="stylesheet" type="text/css" href="/css/app.css">  --}}
@vite('resources/css/app.css')  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <h1>This is temporarily how all views will be accessed. In time a way to render based on permissions will be used.</h1>
        <form method="POST" action="/logout">
            @csrf
            <input type="submit" id="submit" name="submit" value="Logout">
        </form>
    </head>
    <a type="button" value ="Yes" class href={{ route("page.student") }}>Student View</a> 
</html>
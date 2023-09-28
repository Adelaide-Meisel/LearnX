<!DOCTYPE html>
<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<body class=new-accounts>
 
    <h1>Create New Account</h1>

    <p id="myParagraph">Are you an orginization? </p>

    <body>
        <a type="button" class="Button" value ="Yes" class onclick={{ redirect("page.are.you.org") }}>Yes</a> 
        <a type="button" class="Button"  value="No" class onclick={{ redirect("page.are.home.school") }}>No</a>
    </body>

</body>
</html>
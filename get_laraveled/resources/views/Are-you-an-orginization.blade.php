<!DOCTYPE html>
<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<body class=new-accounts>
 
   <h1>
        <div id="title">
            Create New Account
        </div>
    </h1>

    <p id="myParagraph">Are you an orginization? </p>

    <body>
        <a type="button" class="Button" value ="Yes" class onclick={{ redirect("page.org.at") }}>Yes</a> 
        <a type="button" class="Button"  value="No" class onclick={{ redirect("page.are.home.school") }}>No</a>
    </body>

</body>
</html>
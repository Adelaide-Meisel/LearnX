<!DOCTYPE html>
<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<body class=new-accounts>
 
   <h1>
        <div>
            Create New Account
        </div>
    </h1>

    <p id="myParagraph">Is your child(ren) homeschooled? </p>

    <div style="margin-right: 25px; margin-left: 505px; height: 100px; width: 100px; position: absolute">
        <a type="button" value ="Yes"  href={{ route("page.email") }}>Yes</a>
    </div>
    <div style="margin-left: 25px; margin-left: 897px; height: 100px; width: 100px; position: absolute">
        <a type="button" value="No" href={{ route("page.purpose.join") }}>No</a>
    </div>

</body>
</html>
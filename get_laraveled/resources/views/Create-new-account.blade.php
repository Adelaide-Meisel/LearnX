<!DOCTYPE html>
<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<h1>Create New Account</h1>

<p id="myParagraph">Are you an orginization? </p>

<body>
    <input type="button" class="Yes-Button" value ="Yes" class onclick="org_yes_no()"></input> 
    <input type="button" class="No-Button"  value="No" class onclick="org_yes_no()"></input>
</body>

<script>
    function org_yes_no()
    {
        document.querySelector(".Yes-Button").onclick = function()
        {
            window.location.href = 'EXAMPLE';
        } 
        
        document.querySelector(".No-Button").onclick = function()
        {
            var paragraph=document.getElementById("myParagraph");
            paragraph.textContent="Is your child(ren) homeschooled?";
        }
    }
</script>




</html>
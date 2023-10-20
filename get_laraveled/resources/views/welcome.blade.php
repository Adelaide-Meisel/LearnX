<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css">

<body>
    <div class="Top-div-info-page">
        <div>
            <div>
                <a href="Intro-Page.html">LearnX</a>
            </div>

                <!--<div>
                        put the "A+s" here
                </div>-->

            <div class="sign-in-create-account">
                <a type="button" value ="Yes" class href={{ route("signin") }} style="color: white;">Sign-In  </a><a type="button" value ="Yes" class href={{ route("signup") }} style="color: white;">|  Create New Account</a>
                <!--Sign in is sign in, create new needs to go to are you org-->
            </div>
        </div>
    </div>
</body>

<div style="margin-top=200px; margin-right=300px; position: absolute;">
    <div >
        <img src="/Images/Teacher-Online-With-Student.jpg" width="900px" height="550px">
    </div>
</div>

<div style="width: 325px; height: 125px;" class="slogan">
    <div>
        LearnX: A+ Students
    </div>
    <div class="slogan-Asgl">
                A+ Grades
    </div>
    <div class="slogan-Asgl">
                A+  Learning
    </div>
</div>


<body class="main-intro-page-body">

    <div class="body-text">
        <p style="margin: 10px; margin-top: 25px">
        LearnX, a place for students K-12 to strive and grow through their educational learning.
        We strive to make every year count as your students grow throught this program. At LearnX
        we take it upon ourselves to better our platform for students and for you. We teach kids
        their 123's, all the way up to thier f(x) = 3x^4 - 2x^3 + 5x^2 - 7x + 9 (The answer is x≈0.5231).
        From their ABC's to fully eassays on complex topics our world faces. For this upcoming 2024-2025
        school year, we hope to help teachers engage with their students more than they could. We
        also offer personalized learning sessions so students can get the most out of their learning.
        We make our system user-friendly so you can get the most out of our site.
        <br> 
        <br>
        <br> 
        <br>
        <br>
        We hope you enjoy LearnX! <a type="button" id="inText" value ="Yes" class href={{ route("signup") }}>Click here</a> to make a new account.<!--Goes to routes and goes to the respective pages for login and sign up-->
        </p>
    </div>
    
</body>

<div class="info-div" >
    <div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
        </div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.about") }}>ABOUT</a>
        </div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.why.us") }}>WHY US</a>
        </div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.donate") }}>DONATE</a>
        </div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.reviews") }}>WHAT TEACHERS/STUDENTS SAY</a>
        </div>
        <!--Links to various places on the website-->
    </div>
</div>

</html>


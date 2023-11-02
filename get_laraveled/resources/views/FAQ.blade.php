<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX FAQ">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #9b84ff">
<div class="faq">

    <h1 style="text-align: center; ">FAQ</h1>

    
    <h4>What is better about LearnX?</h4>
    <p>LearnX is a simple-to-use online website for K-12 to learn and grow. We offer class assignments and 
    tailor to the students so we can best help their learning needs. We make learning fun by using a belt
    system and as students go up grade levels, their belt colors will upgrade.</p>
    <br>
    <h4>How secure will my child's and the school's information be kept?</h4>
    <p>We encrypt all information we hold so students information can be kept safe and they can learn with no worry.</p>
    <br>
    <h4>What is the belt system?</h4>
    <p>The belt system gives a fun way for K-12 students to learn by color coding each grade. The color will become
    more prominent as they get father into the grade.</p>
    <br>
    <h4>What will my kid be learning?</h4>
    <p>Any assignments on our site are the bare minimum for that grade level. Teachers are still responsible for most assignments. We
    help teach concepts but do not provide assignments for anything extra the teacher might want to add.</p>
    <br>
    <h4>How can I contact LearnX if there is a problem?</h4>
    <p>LearnX can be contacted at learnxinfo@learnx.org for any problems regarding our site, assignments, or other technical problem
    there may be with our site.</p>
    <br>
    <!--<h4>What are the terms of service?</h4>
    <p>Dont be bad</p>
    <br>-->
    <h4>Is this site mobile-friendly?</h4>
    <p>We are currently working on our site becoming more mobile-friendly. We hope you enjoy the desktop version while you wait!</p>
    <br>
    <h4>Does this site cost money?</h4>
    <p>We do not have any "premium" accounts. We ask for donations only which you can find <a type="button" id="inText" value ="Yes" class href={{ route("page.donate") }}>here</a></p>
    <br>
    <h4>Can I trust the information on this site?</h4>
    <p>Yes. We do research and run all problems through our employees and other teachers in the U.S. so you can always be assured 
    that your students will never be given anything other than accuracy.</p>
    <br>
    <h4>Can I customize student's experience?</h4>
    <p>You can add assignments for your students to do but we do not offer a complete remodel of the system.</p>
    <br>
    <!--<h4>Is there a helper forum?</h4>
    <p>There are resources to help you work through our site.</p>-->
</body>


<div class="info-div" style="margin-top: 0px">
    <div>
        <div class="link">
            <a type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a> 
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


</div>
</html>
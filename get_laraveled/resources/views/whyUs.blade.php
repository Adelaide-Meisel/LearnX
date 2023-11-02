<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Why us">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <body style="background-color: #9b84ff">
    
        <h1 style="text-align: center; text-decoration:underline;">Why Us?</h1>
        <div class="whyUs">
            <p>
            We offer revelent courses to suit the students needs. Our flashcards and small assignments will fit<br>  
            what the student would learn during the course of that year. We run our assignments through our <br>
            employees and other teachers throughout the U.S. to ensure that every student gets the correct <br>
            information they will need to learn as best as they can. With LearnX students get the best education <br>
            they can get. Our website is easy to navigate and easy for teachers to help students. Teachers can <br>
            add their own assignments and eaisily put them into the gradebook. All of our assignments, quizzes, <br>
            and tests challenge and push students as they grow. We don't have any premium account because <br>
            of our belifs that every child deserves a fair and free education. We do ask for donations which you<br> 
            can find at the bottom of the screen.
            </p>
        </div>
        <div class="Text-and-Pic">
            <div>
                <img src="/Images/Calculator-On-Notepad.jpg" width="400" height="450" style="float: right;" ><!--DON'T PUT ANYTHING HERE, THIS IS FOR PIC ONLY-->
            </div>
            <div style="position: absolute; margin-top: 27px; margin-left: 210px; font-size: 25px; font-family: Arial, Helvetica, sans-serif;">
                LearnX made learning in school so much easier! -Larua Don<br>
                <br>
                School and LearnX equals success. - Kelly Hemp<br>
            </div>
            <div style="position: absolute; margin-top: 330px; margin-left: 25px; font-size: 25px; font-family: Arial, Helvetica, sans-serif;">
                All schools should use LearnX! My child is so successful in school now! -Brooke Asher
            </div>
        </div>


        <div class="info-div" style="margin-top: 580px">
            <div>
                <div class="link">
                    <a type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
                </div>
                <div class="link">
                    <a type="button" value ="Yes" class href={{ route("page.about") }}>ABOUT</a>
                </div>
                <div class="link">
                    <a type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a>
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


    </body>
</html>
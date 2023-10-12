<!DOCTYPE html>
<!--sign-in page-->
<link rel="stylesheet" type="text/css" href="/css/app.css">

<p>
    Hello! You've made it to LearnX!
    Our goal is to make school easy for teachers and fun for kids.
    <br>
    <br>
    We strive to reach to all corners of the U.S. so education can be spread to all. Our donations go to support our staff
    and imporove our website so your student(s) can learn better with more reasourses.
    <br>
    Our team includes: Adelaide Meisel, Brodie Kirby, Camran Hamilton, and Thomas Whitaker
    <br>

    Our core values are: respect, responsiblity, courage, honesty, teamwork, open-midedness, freedom, and equality
</p>
    <!-- 
        Brodie: Responsiblitly honesty
        Adelaide: teamwork equlity
        Camron:
        Tommy :
    -->

    <div>
        <div>
            <div class ="AboutPics">
                Adelaide Meisel
                <img src="/Images/Adelaide_Meisel.png" alt="Image cannot load" width="400px" height="300px">
            </div>

            <div class ="AboutPics">
            </div>
        </div>
        
        <div>
            <div class ="AboutPics">
            </div>

            <div class ="AboutPics">
            </div>
        </div>
    </div>


    <div class="info-div">
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
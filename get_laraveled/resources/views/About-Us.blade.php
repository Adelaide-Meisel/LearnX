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
                
                <img src="/Images/Adelaide_Meisel.png" alt="Image cannot load" width="290px" height="340px">
            </div>

            <div class ="AboutPics">
                <img src="/Images/Brodie_Kirby.png" alt="Image cannot load" width="290px" height="340px">
            </div>
        </div>
        
        <div>
            <div class ="AboutPics">
                <img src="/Images/Cameron_Hamilton.png" alt="Image cannot load" width="290px" height="340px">
            </div>

            <div class ="AboutPics">
                <img src="/Images/Thomas_Whitaker.png" alt="Image cannot load" width="290px" height="340px">
                I work at LearnX to revolutionize education for K-12 students, creating an innovative online platform that 
                caters to diverse learning styles. Through research and collaboration with educators, LearnX has created a 
                comprehensive curriculum for core subjects, interactive lessons, and engaging activities to make learning 
                enjoyable. With a commitment to continuous improvement, "LearnX" strives to empower students with the skills 
                and knowledge necessary for success in the ever-changing world.
                <br>
                <br>
                Courage: The spark that ignites the flame of curiosity in young minds is courage. It serves as the gateway to 
                exploration, empowering children to venture into the realms of knowledge with confidence. By fostering courage,
                we teach resilience, ensuring that every challenge becomes an opportunity for growth and discovery.
                <br>
                Freedom: The key that unlocks the boundless potential of young learners is freedom. It provides children with 
                the liberty to navigate through a diverse array of educational experiences. Through exploration, LearnX inspires 
                a sense of ownership in learning, encouraging children to chart their own course toward a future enriched with 
                7knowledge and creativity.


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
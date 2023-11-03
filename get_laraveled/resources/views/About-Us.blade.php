<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LearnX About">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    
</head>

<body style="background-color: #91ffa5;">
    <p class="text-4xl mt-12">
        {{-- <p style="font-size: 18px;"> --}}
            Hello! You've made it to LearnX!
        Our goal is to make school easy for teachers and fun for kids.
        <br>
        <br>
        We strive to reach to all corners of the U.S. so education can be spread to all. Our donations go to support our staff
        and imporove our website so your student(s) can learn better with more reasourses.
        <br>
        Our team includes: Adelaide Meisel, Brodie Kirby, Camran Hamilton, and Thomas Whitaker (In order listed)
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
            <div class ="AboutPics">
                    
                <img src="/Images/Adelaide_Meisel.png" alt="Image cannot load" width="290px" height="340px">
            </div>
            <div class ="AboutDescription">
                <p>
                I am the founder of LearnX. I have designed this website to be easy to interact with, easy to teach, 
                and easy to learn. I want students to be able to learn the fundamentals of education through our site. Thank you 
                for supporting us. 
                <br>
                <br>
                <br>
                Equality: At LearnX we treat all of our students with equality. We make sure that all students have access to the 
                same information, our donations go to help them, and all students learn the same information regardless of race, 
                sex, wealth etc.
                <br>
                <br>
                Teamwork: We organize ourselves to collaborate and manage LearnX efficiently with teamwork. We consider LearnX to
                be a team building project and work to make the site and ourselves better. We are always providing feedback to 
                our employees and helping them thrive in our organization. We understand that working with each other and you 
                helps students to grow which is why teamwork is so important to us. 
                </p>
            </div>
                
            <div class ="AboutPics" style="margin-top:350px">
                <img src="/Images/Brodie_Kirby.png" alt="Image cannot load" width="290px" height="340px">
            </div>
            <div class="AboutDescription" style="margin-top:350px">
                <p>I am the co-founder of LearnX. I helped build this website from the ground up with the goal of 
                bringing good education to all. I have always wanted to lead something important and helpful for the world, 
                and here at LearnX I finally have the chance. I am a programming hobbyist and hope to be one of the leading 
                supports for any teacher who wishes to bring programming to the classroom. By working at LearnX I understand 
                the importance of working hard and working towards your goals as a student.
                <br>
                <br>
                <br>
                Honesty: Here at LearnX we hold honesty very closely. As an online school platform, we understand how people can be 
                skeptical of us and how well students may work compared to traditional school settings. But we assure you we will 
                be transparent and help to make sure your child works just as hard on our platform as in a normal school. 
                <br>
                <br>
                Responsiblity: At LearnX we care a lot about responsibility. The most successful people must be very responsible to 
                get as far as they do, and just as much so to stay there. We make sure any student who uses our platform has the 
                ability to learn how to be responsible and work their way to the top.</p>
            </div>
            
            <div class ="AboutPics" style="margin-top:700px">
                <img src="/Images/Cameron_Hamilton.png" alt="Image cannot load" width="290px" height="340px">
            </div>
            <div class="AboutDescription" style="margin-top:700px">
                <p>
                    I'm fortunate to be part of the team behind LearnX, to transform the way people learn. Collaborating with a 
                    group of dedicated individuals, I've been able to contribute to the development of this innovative learning 
                    platform. I've gained valuable experience as we strive to make education more accessible and engaging. It's 
                    been a rewarding journey, knowing that my work plays a part in helping learners of all backgrounds expand 
                    their knowledge. I look forward to the future as we continue to refine and improve LearnX.
                    <br>
                    <br>
                    <br>
                    Respect: LearnX is a platform that fosters a culture of respect by promoting inclusive and diverse learning 
                    environments, where individuals from various backgrounds and perspectives are encouraged to engage in 
                    meaningful discussions.
                    <br>
                    <br>
                    Open-mindedness: Open-mindedness is a core value at LearnX, encouraging learners to explore new ideas and viewpoints with 
                    curiosity, while also valuing the contributions of others, leading to a more enriching educational experience. 
                </p>
            </div>
            <div class ="AboutPics" style="margin-top:1050px">
                <img src="/Images/Thomas_Whitaker.png" alt="Image cannot load" width="290px" height="340px">
            </div>
            <div class="AboutDescription" style="margin-top:1050px">
                I work at LearnX to revolutionize education for K-12 students, creating an innovative online platform that 
                caters to diverse learning styles. Through research and collaboration with educators, LearnX has created a 
                comprehensive curriculum for core subjects, interactive lessons, and engaging activities to make learning 
                enjoyable. With a commitment to continuous improvement, "LearnX" strives to empower students with the skills 
                and knowledge necessary for success in the ever-changing world.
                <br>
                <br>
                <br>
                Courage: The spark that ignites the flame of curiosity in young minds is courage. It serves as the gateway to 
                exploration, empowering children to venture into the realms of knowledge with confidence. By fostering courage,
                we teach resilience, ensuring that every challenge becomes an opportunity for growth and discovery.
                <br>
                <br>
                Freedom: The key that unlocks the boundless potential of young learners is freedom. It provides children with 
                the liberty to navigate through a diverse array of educational experiences. Through exploration, LearnX inspires 
                a sense of ownership in learning, encouraging children to chart their own course toward a future enriched with 
                knowledge and creativity.
            </div>

            <div class="info-div" style="margin-top:1400px;">
                <div>
                    <div class="link">
                        <a type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
                    </div>
                    <div class="link">
                        <a type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a>
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
    </body>
</html>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css">
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="What people say about LearnX">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <body style="background-color: #9b84ff">

        <h1 style="text-align: center;">What Students and Teachers Say About Learn</h1>

        <p style="text-align: left; font-size: 20px;">
            Olivia Smith(K-Student): "I like the colorful pictures and fun stories on LearnX. It makes learning so much fun!"<br><br>
            Sarah Anderson (Teacher): "LearnX provides a variety of teaching resources and lesson plans that make my job as a teacher easier. It helps me keep my students engaged."<br><br>
            Ethan Davis(3rd Grade Student): "LearnX has interactive quizzes that help me understand the lessons better. It's not boring like some other stuff."<br><br>
            James Mitchell (Teacher): "I appreciate the flexibility of LearnX in adapting to different learning styles. It allows me to tailor lessons to meet the unique needs of my students."<br><br>
            Sophia Roberts (High School Student): "LearnX has a lot of great study materials and practice tests that help me prepare for my exams. It's a huge help for high school."<br><br>
            Emily Parker (Teacher): "LearnX offers a wide range of educational tools and assessments that help me track my students' progress and adjust my teaching methods accordingly."<br><br>
            Ryan Lewis (High School Student): "LearnX is my go-to resource for test preparation and self-study. It offers a wide range of study materials and practice tests that are helping me excel in high school."<br><br>
            Michael Turner (Teacher): "The professional development resources on LearnX are invaluable. They keep me updated with the latest teaching strategies and techniques."<br><br>
            Ava Wilson (High School Student): "LearnX is user-friendly and helps me manage my assignments and deadlines. It makes my high school life less stressful."<br><br>
            Lisa Johnson (Teacher): "LearnX has a fantastic platform for creating and sharing educational content. It's a great tool for collaborating with other educators and sharing resources, making my teaching job more efficient."<br><br>
        </p>

        <div class="info-div" style="margin-top: 65px">
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
                    <a type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a>
                </div>
                <!--Links to various places on the website-->
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css') --}}
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Donate page">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body style="background-color:#fcebff">

<div style="border: 2px solid #000; font-family: 'Preahvihear'; font-size: 30px; text-align: left; height: 100px; width: 100%; background-color:#f0ffeb">
        <div>
                <div style="position:absolute; margin-left: 140px;"><img src="/Images/LearnXLogo.png" alt="Image cannot load" width="80px" height="100px"></div>
                <div style="position:absolute; margin-left: 350px"><!--Science--><a href={{ route("page.science") }}><img src="/Images/Science_Icon.jpg" alt="Image cannot load" width="90px" height="100px"></a><!--Image by rawpixel.com on Freepik>--></div>
                <div style="position:absolute; margin-left: 500px"><!--Math--><a href={{ route("page.math") }}><img src="/Images/Math_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by brgfx on Freepik--></div>
                <div style="position:absolute; margin-left: 650px"><!--English--><a href={{ route("page.english") }}><img src="/Images/English_Icon.jpg" alt="Image cannot load" width="80px" height="90px"></a><!--Image by upklyak on Freepik--></div>
                <div style="position:absolute; margin-left: 800px"><!--History--><a href={{ route("page.history") }}><img src="/Images/History_Icon.jpg" alt="Image cannot load" width="80px" height="80px"></a><!--Image by Freepik--></div>
                <div style="position:absolute; margin-left: 85%; margin-top: 3px"><!--pfp--><a href={{ route("page.profile") }}><img src="/Images/Default_Pfp.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
                <div style="position:absolute; margin-left: 93%"><!--Home Button--><a href={{ route("page.home") }}><img src="/Images/Home_Icon.png" alt="Image cannot load" width="90px" height="90px"></a></div><!--Image by qalebstudio on Freepik-->
                <div></div>
                LearnX      
            <br>
            A+ A+ A+
        </div>  
    </div>

    <div>
        <!--Belt Color-->
    </div>
    <div style="font-family: 'Preahvihear';Text-align: Center; font-size:5rem;">
        <b>HISTORY</b>
    </div>
    <div style="display: flex; flex-direction: colum;"> 
        <div style="font-family: 'Arial'; width: 50%; margin-left: 24%">
            <br>
            <div>Holidays Around the World</div>
            <br>
            <div>Contenents/Oceans</div>
            <br>
            <div>States in the U.S.</div>
            <br>
            <div>Branches of the U.S. Government</div>
            <br>
            <div>Ancient History</div>
            <br>
        </div>
        <div style="font-family: 'Arial'; width: 50%; text-align:left">
            <br>
            <div>American History</div>
            <br> 
            <div>World History</div>
            <br>
            <div>Economics</div>
            <br>
            <div>Civics</div>
            <br>
            <div>Politics</div>
            <br>
        </div>
    <div>

    <div style="font-family: 'Preahvihear'; font-size: 30px; text-align: left; height: 100px; width: 100%; position:absolute; bottom: 0;">
        <div style="position:absolute; margin-left: 10%; color:#BE84FF">Flashcards</div>
        <div style="position:absolute; margin-left: 43%; color: #8FE475">Learning Fun</div>
        <div style="position:absolute; margin-left: 80%; color:#BE84FF">Timeline</div>
    </div>
</body>
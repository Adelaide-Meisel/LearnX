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
                <div style="position:absolute; margin-left: 140px;"><!--logo--><img src="/Images/LearnXLogo.png" alt="Image cannot load" width="75px" height="100px"></div>
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
        <b>MATH</b>
    </div>
    <div style="display: flex; flex-direction: colum;"> 
        <div style="font-family: 'Arial'; width: 50%; margin-left: 24%">
            <br>
            <div>Numbers</div>
            <br>
            <div>Shapes & Colors</div>
            <br>
            <div>Probability</div>
            <br>
            <div>Elementary Math</div>
            <br>
            <div>Graphing</div>
            <br>
        </div>
        <div style="font-family: 'Arial'; width: 50%; text-align:left">
            <br>
            <div>Staticstics</div>
            <br> 
            <div>Fractions, Decimals, and Precentages</div>
            <br>
            <div>Alagrbra(1 and 2)</div><!--make link to a page where they choose, or drop down?-->
            <br>
            <div>Geometry</div>
            <br>
            <div>Calculus</div>
            <br>
        </div>
    </div>

    <div style="font-family: 'Preahvihear'; font-size: 30px; text-align: left; height: 100px; width: 100%; position:absolute; bottom: 0;">
        <div style="position:absolute; margin-left: 10%; color:#BE84FF">Flashcards</div>
        <div style="position:absolute; margin-left: 43%; color: #8FE475">Learning Fun</div>
        <div style="position:absolute; margin-left: 80%; color:#BE84FF">Solve It</div>
    </div>
</body>

</html>
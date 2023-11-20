<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/css/app.css"> 
{{-- @vite('resources/css/app.css')   --}}
    <head>
        <meta charset="UTF-8">
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
                <div style="position:absolute; margin-left: 950px"><!--Grades--><a href={{ route("page.gradebook") }}><img src="/Images/Grade_Icon.png" alt="Image cannot load" width="100px" height="100px"></a><!--Image by Freepik--></div>
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
            <b>PARTS OF SPEECH</b>
        </div>
        <div style="margin-left: 20%">
            Nouns: Words that represent people, places, things, or ideas. <br>
            Examples: dog, city, love<br>
            <br>
            Verbs: Words that describe actions or states of being.<br>
            Examples: run, eat, think<br>
            <br>
            Adjectives: Words that modify or describe nouns, giving more information about them.<br>
            Examples: happy, tall, blue<br>
            <br>
            Adverbs: Words that modify or describe verbs, adjectives, or other adverbs, providing more details about how, when, where, or to what extent.<br>
            Examples: quickly, very, often<br>
            <br>
            Pronouns: Words that take the place of nouns.<br>
            Examples: he, she, it, they<br>
            <br>
            Conjunctions: Words that connect words, phrases, or clauses.<br>
            Examples: and, but, or<br>
            <br>
            Articles: The words "a," "an," and "the," which are used to specify or limit a noun<br>
            Examples: I saw a cat in the backyard./Can you please pass the salt?
            <br>
        </div>

<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="/css/app.css">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Donate page">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #C7DDFF;">

<div>

<h1 style="text-align: center">LearnX Can't Do It Alone</h1>
<p style="text-align: center; font-size: 18px">
    We apperciate your donation, please type in the amount you wish to donate below:
</p>
    <style>
        input[type="text"]
            {
                width: 300px;
                height: 60px;
            }
    </style>

    <form method="POST" action="/users/authenticate" style="position:absolute;">
        @csrf <!--Makes it so people cant use scripts against your site-->
            <div class="donation-box">
                Dollar Amount
                <div>
                    <input type="text" id="dollar" name="dollar" placeholder="Dollar Amt" value="{{old('dollar')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    Credit/Debit Card #
                <div>
                    <input type="text" id="Cred-Deb" name="Cred-Deb" placeholder="Card #" value="{{old('Cred-Deb')}}">
                </div>
                    <br>
                    <br>
                    <br>
                    CVC
                <div>
                    <input type="text" id="CVC" name="CVC" placeholder="CVC" value="{{old('CVC')}}">
                </div>
                    <!--submit button-->
                <div style= "position: absolute; margin-left: 75px; margin-top: 50px; ">
                    <input style="font-family: Preahvihear; font-size: 30px;"type="submit" id="submit" name="submit" value="DONATE>">
                </div>
                <!--Gets your input and tries to verify your account info. endError sections determine what will happen if they input the
                wrong info -->
            </div>
        </form>

<div>

</body>
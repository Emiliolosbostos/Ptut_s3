<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: #fcfcfc;
        }
        footer{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100vw;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #fff;
            border-top : solid #17ff02;
        }
        .footer1{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .footer1 h3{
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
            color : #17ff02;
        }
        .footer1 p{
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color : #17ff02;
        }
        .reseaux{
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }
        .reseaux li{
            margin: 0 10px;
        }
        .reseaux a{
            text-decoration: none;
            color: #fff;
        }
        .reseaux a i{
            font-size: 1.1rem;
            transition: color .4s ease;

        }
        .reseaux a:hover i{
            color: #17ff02;
        }

        .footer2{
            background: #000;
            width: 100vw;
            padding: 20px 0;
            text-align: center;
            border : solid #17ff02;
        }
        .footer2 p{
            font-size: 14px;
            word-spacing: 2px;
            color : #17ff02;
        }
        .footer2 span{
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
            color : #17ff02;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <footer>
        <div class="footer1">
            <h3>ProjetTuTS3</h3>
            <p>Ce site propose une multitudes de jeux vous permettant de devenir de meilleurs codeurs. Rejoignez notre discord pour rejoindre la communauté !</p>
            <ul class="reseaux">
                <li><a href="https://discord.gg/6P7NYZGK"><i class="fab fa-discord"></i></a></li>
            </ul>
        </div>
        <div class="footer2">
            <p>copyright Emile Mathias Sami Vassilly William</p>
        </div>
    </footer>
</body>
</html>

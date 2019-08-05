<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);

        *:focus {
            outline: none;
        }

        body {
            margin: 0;
            padding: 0;
            background: white;
            font-size: 16px;
            color: #222;
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        #login-box {
            position: relative;
            margin: 5% auto;
            width: 600px;
            height: 400px;
            background: #FFF;
            border-radius: 2px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
        }

        .left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
        }

        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }

        input[type="submit"] {
            margin-top: 28px;
            width: 120px;
            height: 32px;
            background: #16a085;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        input[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }

        .or {
            position: absolute;
            top: 180px;
            left: 280px;
            width: 40px;
            height: 40px;
            background: #DDD;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            line-height: 40px;
            text-align: center;
        }

        .right {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
            background-image: url("https://stmed.net/sites/default/files/tanks-wallpapers-29142-2723951.jpg");
            background-size: cover;
            background-position: center;
            border-radius: 0 2px 2px 0;
        }

        .right .loginwith {
            display: block;
            margin-bottom: 40px;
            font-size: 28px;
            color: #FFF;
            text-align: center;
        }

        button.social-signin {
            margin-bottom: 20px;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #FFF;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
        }

        button.social-signin:hover,
        button.social-signin:focus {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin:active {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.2s ease;
        }

        button.social-signin.facebook {
            background: #32508E;
        }

        button.social-signin.twitter {
            background: #55ACEE;
        }

        button.social-signin.google {
            background: #DD4B39;
        }

        .imglogo {
            border-radius: 10px;
            margin-left: 40px;
            margin-top: 20px;

        }

        .slogan {
            text-align: center;
            font-size: 60px;
            font-family: 'Abril Fatface', cursive;
            color: black;
            margin-top: 40px;

        }

        .header {
            background-size: cover;
        }

        .cart {
            width: 100%;
            height: 50px;
            border: 1px solid black;
            font-size: 25px;
            margin-bottom: 10px;
            margin-left: 3px;
        }

        .cart a {
            margin-left: 40px;
            text-decoration: none;
            color: white;
        }

        .menu {
            text-align: center;
        }

        .imgmenu {
            margin-left: 15px;
        }

        .menu {
            background: #1b4b72;
            height: 600px;
            margin-top: 1px;
        }

        .active-pink-1 input {
            border-bottom: 1px solid #ce93d8;
            box-shadow: 0 1px 0 0 #ce93d8;
            width: 620px;
            height: 50px;
        }

        .table {
            margin-top: 50px;
            width: 100%;
            margin-left: 50px;
        }

        .title {
            margin: 5px;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="row header">
        <div class="col-mg-3">
            <img class="imglogo" width="50%" height="70%"
                 src="https://img.freepik.com/free-vector/video-game-logo-template-with-modern-style_23-2147834934.jpg?size=338&ext=jpg"
                 alt="">
        </div>
        <div class="slogan col-mg-7">
            Hãy chơi theo cách của bạn
        </div>
        <div class="col-mg-7"></div>
    </div>
</div>
<div class="row" style="height: 2px;border: 1px solid #434343"></div>
<div class="container">
    <div class="row navbar1 ">
        <div class=" menu col-3">
            <div class="  row">
                <img class="imgmenu" src="https://img.icons8.com/nolan/64/000000/menu.png">
            </div>
            <div class=" cart row">
                <a href="/game">
                    -Danh sách Game </a>
            </div>
            <div class="cart row">
                <a href="/form">
                    -Thêm
                </a></div>
        </div>
        <div style="margin-top: 40px" class="col-9">
            <div class=" title row"><h2>Danh sách Game</h2></div>
            <form id="login-box" method="post" action="{{route('game.update',$game->id)}}">
                @method('PUT')
                @csrf
                <div class="left">
                    <h1>Create</h1>
                    <input type="text" name="name" value="{{$game->name}}"/>
                    <input type="text" name="ma" value="{{$game->ma}}"/>
                    <input type="text" name="theloai" value="{{$game->theloai}}"/>
                    <input type="text" name="gia" value="{{$game->theloai}}"/>
                    <input type="submit" name="signup_submit" value="Sign me up"/>
                </div>

                <div class="right">

                </div>
            </form>
        </div>

    </div>
</div>
<div style="height: 40px;background: #1b4b72;text-align: center;line-height: 40px">Copyright GameCenter</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

</body>
</html>

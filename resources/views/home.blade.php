<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightblue;
        }

        header {
            background-image: linear-gradient(to right, blue, rgb(0, 140, 255), rgb(0, 140, 255), blue);
            color: white;
        }

        nav {
            padding: 20px;
            display: flex;
            align-items: center;
            border-bottom: 2px solid black;
        }

        nav > * {
            width: 50%;
        }

        nav .nav_title h3{
            font-size: 27px;
            letter-spacing: 1px;
            font-style: italic;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            display: inline-block;
        }

        nav ul li a {
            display: inline-block;
            padding: 7px 13px;
            color: white;
            text-decoration: none;
            margin: 0 2px;
            font-size: 18px;
            font-weight: bold;
            border: 2px solid transparent;
            border-radius: 10px;
            transition: all .1s linear;
        }

        nav ul li a:hover {
            color: black;
            background-color: white;
            border: 2px solid black;
        }

        main {
            margin-top: 40px;
            text-align: center;
        }

        main > h1 {
            margin-bottom: 15px;
            font-weight: bold;
            font-size: 60px;
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav_title">
                <h3>NAVBAR</h3>
            </div>
            <ul>
                @foreach($listNavLink as $navLink)
                    <li>
                        <a href="{{ route($navLink['link']) }}">{{ $navLink["title"] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello World!</h1>
        @if(count($heroesList))
        <h3>{{ $name }} {{ $surname }}</h3>
        <ul>
            @foreach($heroesList as $hero)
                <li>{{ $hero }}</li>
            @endforeach
        </ul>
        @endif
    </main>
</body>
</html>
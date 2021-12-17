<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                @foreach($listNavLink as $navLink)
                    <li><a href="{{ $navLink["link"] }}">{{ $navLink["title"] }}</a></li>
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
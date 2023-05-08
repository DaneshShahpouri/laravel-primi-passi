<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="navbar">

        <div class="left-side">
            <h3>SitoPocoFinto</h3>
            
        </div>

        <div class="right-side">
            <ul class="links">
                @foreach ($links as $link)
                    <li><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
        </div>

    </div>
    
</body>
</html>
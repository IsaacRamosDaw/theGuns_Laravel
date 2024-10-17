<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">

</head>

<body>
    <h2 id="title">
        Deadliest weapons
        <div></div>
    </h2>


    <div id="textContainer">
        <p class="text">
            Did you know there are weapons whose designs and purposes be the deadliest weapon known in earth, you'll be
            surprised to learn about the innovations that never became public knowledge. Join us as we explore the weapons
            the government doesn’t want you to know existed
        </p>
    </div>
    <img id="guns-bg" src="img/ak.png" alt="">
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="50" height="50">
        <g data-name="18-Arrow Down">
            <path d="M16 0a16 16 0 1 0 16 16A16 16 0 0 0 16 0zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14z" fill="#ffffff" />
            <path d="M17 23.59V5h-2v18.59l-5.29-5.3-1.42 1.42 7 7a1 1 0 0 0 1.41 0l7-7-1.41-1.41z" fill="#ffffff" />
        </g>
    </svg>
    <div id="linkContainer">
        <a href="{{ route('guns.index') }}">Discover</a>
    </div>
</body>

</html>

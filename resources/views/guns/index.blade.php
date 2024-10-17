<h1>The Weapons</h1>

<div id="allGuns">
    <ul>
        @foreach ($guns as $gun)
            <li>
                <h2> {{ $gun->name }} </h2>
                <div id="data-container">
                    <div id="caracteristics">
                        <p> Type </p>
                        <p> Country </p>
                        <p> Ammo </p>
                    </div>
                    <div id="data">
                        <p> {{ $gun->type }} </p>
                        <p> {{ $gun->country }} </p>
                        <p> {{ $gun->ammo }} </p>
                    </div>
                </div>

                <form action="{{ route('guns.destroy', $gun->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div id="buttons">
                        <a href="{{ route('guns.edit', $gun->id) }}">EDIT</a>
                        <button type="submit">DELETE</button>
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
    <div id="linkContainer">
        <a href="{{ route('guns.create') }}">Create yours</a>
    </div>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
</div>

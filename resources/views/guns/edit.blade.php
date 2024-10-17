<form action="{{route('guns.update', $gun->id)}}" method="POST">
    @csrf
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{old('name', $gun->name)}}">
        <br>

        <label for="">Type</label>
        <input type="text" name="type" value="{{old('type', $gun->type)}}">
        <br>

        <label for="">Country</label>
        <input type="text" name="country" value="{{old('country', $gun->country)}}">
        <br>

        <label for="">Ammo</label>
        <input type="text" name="ammo" value="{{old('ammo', $gun->ammo)}}">
        <br>

        <div id="buttonContainer">
            <button type="submit">Change gun</button>
        </div>
    </form>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">


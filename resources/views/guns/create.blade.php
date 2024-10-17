<div id="form">
    <h2>Create your weapon</h2>
    <form method="POST" action="{{ route('guns.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="type">Type</label>
        <input type="text" name="type">

        <label for="country">Country</label>
        <input type="text" name="country">

        <label for="ammo">Ammo</label>
        <input type="text" name="ammo">
        <br>
        <br>
        <div id="buttonContainer">
            <button type="submit">Insert my Gun</button>
        </div>
    </form>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
</div>



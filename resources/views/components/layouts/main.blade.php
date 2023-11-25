<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>

<body>
    <header>
        <h1>Playlist Name</h1>
        <p>Playlist Description or Information</p>
    </header>

    <main>
        <aside>
            <h2>Saved Playlists</h2>
            <ul>
                <li>Playlist 1</li>
                <li>Playlist 2</li>
                <li>Playlist 3</li>
            </ul>
        </aside>

        <section>
            <div>
                <div>Serial No</div>
                <div>Song Title</div>
                <div>Artist Name</div>
                <div>Album Name</div>
                <div>Duration</div>
            </div>
            <div>
                <div>1</div>
                <div>Song 1</div>
                <div>Artist 1</div>
                <div>Album 1</div>
                <div>3:30</div>
            </div>
            <div>
                <div>2</div>
                <div>Song 2</div>
                <div>Artist 2</div>
                <div>Album 2</div>
                <div>4:15</div>
            </div>
            <!-- Add more rows as needed -->
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>
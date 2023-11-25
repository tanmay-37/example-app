<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 20px;
            padding: 20px;
        }

        .sidebar {
            background-color: #ddd;
            padding: 10px;
        }

        .content {
            background-color: white;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 20px;
        }

        form input, form select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        form button {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Playlist Name</h1>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>

    <main>
        <div class="sidebar">
            <h2>Saved Playlists</h2>
            <ul>
                <li>Playlist 1</li>
                <li>Playlist 2</li>
                <li>Playlist 3</li>
            </ul>
        </div>

        <div class="content">
            <h2>Songs</h2>
            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Song Title</th>
                        <th>Artist Name</th>
                        <th>Album Name</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Song 1</td>
                        <td>Artist 1</td>
                        <td>Album 1</td>
                        <td>3:30</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>

            <form>
                <div>
                    <label for="playlistName">Playlist Name</label>
                    <input type="text" id="playlistName" name="playlistName">
                </div>
                <div>
                    <label for="songSelect">Select Song</label>
                    <select id="songSelect" name="songSelect">
                        <option value="">None</option>
                        <option value="song1">Song 1</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Your Company</p>
        <div>
            <a href="#">About</a>
            <a href="#">Terms of Service</a>
            <a href="#">Privacy Policy</a>
        </div>
    </footer>

</body>
</html>

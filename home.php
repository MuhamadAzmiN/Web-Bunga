<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f7f7f7;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .button {
            margin-top: 20px;
            padding: 10px;
            width: 200px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hitung Bunga</h1>
        <button class="button" onclick="window.location.href='bunga%20tunggal'">Bunga Tunggal</button>
        <button class="button" onclick="window.location.href='bunga%20majemuk'">Bunga Majemuk</button>
    </div>

</body>
</html>

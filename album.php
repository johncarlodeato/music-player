<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .album-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .album-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .back-home-btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Album Pictures</h1>

    <!-- Album grid format for images -->
    <div class="album-container">
        <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image4.jpg" alt="Image 4">
        <!-- Add more images as needed -->
    </div>

    <!-- Button to go back to the home page -->
    <a href="home.php" class="back-home-btn">Home</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
         body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        .container img {
            /*display: block;*/
            margin: 0 auto;
            max-width: 100%;
        }
        
        .container a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="./img/RlH.jpg" alt="Ramaikan" style=""><br>
        <a href="./EntahJastip">RAMAIKAN!!</a>
        <div>
            <?php include 'pengunjung.php'; ?>
        </div>
    </div>
</body>
</html>
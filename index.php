<!DOCTYPE html>
<html>
<head>
    <title>Hello, World!</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hello-box {
            background-color: #000;
            padding: 40px 60px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            font-size: 38px;
            color: #ffffff;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 16px;
            color: #aaa;
            background-color: #111;
            border-top: 1px solid #333;
        }
		
    </style>
</head>
<body>
    <div class="content">
        <div class="hello-box">
            <?php echo "Hello, World!"; ?>
        </div>
    </div>

    <footer>
        Sharvari Bhujade <br>
		Roll no. 25 
    </footer>
</body>
</html>

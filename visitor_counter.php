<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1e1e2f;
            color: #f0f0f0;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #ffd369;
        }

        .counter {
            padding: 30px 40px;
            background-color: #2c2c3e;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        h2 {
            font-size: 28px;
            color: #ffffff;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 16px;
            color: #aaa;
            background-color: #2c2c3e;
            border-top: 1px solid #333;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to the Visitor Counter Page</h1>
        <div class="counter">
            <?php
                $file = "visitor_count.txt";
                if (!file_exists($file)) {
                    file_put_contents($file, 0);
                }

                $count = (int)file_get_contents($file);
                $count++;
                file_put_contents($file, $count);

                echo "<h2>Total Visitors: $count</h2>";
            ?>
        </div>
    </div>
    
    <footer>
        Sharvari Bhujade <br>
        Roll No. 25
    </footer>
</body>
</html>

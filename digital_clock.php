<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Baloo 2', cursive;
            background: linear-gradient(135deg, #d0bfff, #b8e0ff);
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h2 {
            font-size: 36px;
            color: #4b0082;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px #fff;
        }

        #clock {
            font-size: 60px;
            color: #fff;
            font-weight: bold;
            padding: 30px 50px;
            background: #1c1c2c;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5), 0 0 30px #8a2be2;
            letter-spacing: 2px;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 16px;
            color: #aaa;
            background-color: #1c1c2c;
            border-top: 1px solid #333;
        }
    </style>
</head>
<body>

    <div class="content">
        <h2>Server Time Digital Clock</h2>
        <div id="clock">
            <?php
                date_default_timezone_set("Asia/Kolkata"); // Set server timezone
                echo date("H:i:s"); // Display current server time
            ?>
        </div>
    </div>

    <footer>
        Sharvari Bhujade <br>
        Roll No. 25
    </footer>

    <script>
        function updateClock() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "server_time.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("clock").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
        setInterval(updateClock, 1000); // Update every second
    </script>

</body>
</html>

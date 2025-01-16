<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .container {
            position: relative;
            height: 100vh;
            background: linear-gradient(45deg, #ff6f61, #6a11cb, #2575fc);
            background-size: 400% 400%;
            animation: gradient-animation 15s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .text {
            font-size: 10vw;
            color: white;
            text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5), 0 0 25px rgba(0, 0, 0, 0.2);
            font-weight: bold;
            transition: transform 0.3s ease;
            text-align: center;
        }

        .text:hover {
            transform: scale(1.2);
        }

        .pulse {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: pulse-animation 2s infinite;
            transition: all 0.5s ease-in-out;
        }

        .pulse:hover {
            animation: pulse-hover 0.5s ease-out;
        }

        @keyframes pulse-animation {
            0% {
                transform: scale(0.5);
                opacity: 1;
            }
            50% {
                transform: scale(1);
                opacity: 0.5;
            }
            100% {
                transform: scale(0.5);
                opacity: 1;
            }
        }

        @keyframes pulse-hover {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- نص SOON مع تأثير التفاعل -->
        <div class="text">SOON</div>
        
        <!-- دائرة تفاعلية تظهر عند تمرير الماوس عليها -->
        <div class="pulse"></div>
    </div>
</body>
</html>

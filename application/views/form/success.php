<?php include(APPPATH . "views/include/header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de succès</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
        }
        
        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }
        
        .card {
            height: 560px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
        }
        
        .text {
            margin-top: 20px;
        }
        
        .text h2 {
            margin-top: -30px;
            color: #004289;
        }
        
        .text p {
            margin-top: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #a8a8a8;
        }
        
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        
        .buttons button {
            height: 40px;
            width: 100px;
            border: none;
            border-radius: 5px;
            background-color: #0075ff;
            font-size: 14px;
            color: #fff;
            cursor: pointer;
        }
        
        .success {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }
        
        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        
        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }
        
        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }
        
        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes scale {
            0%, 100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }
        
        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="success">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
            <div class="text">
                <h2>Все готово!</h2>
                <p>Спасибо, <span class="shown_name"></span>! Ваша информация передана администрации The Hostels. Статус верификации обновится в ближайшее время.</p>
            </div>
            <div class="buttons">
                <button class="back_button">Назад</button>
                <button class="submit_button">Завершить</button>
            </div>
        </div>
    </div>

    <script>
        var back_click = document.querySelector(".back_button");
        var submit_click = document.querySelector(".submit_button");
        var shown_name = document.querySelector(".shown_name");

        back_click.addEventListener('click', function () {
            window.history.back();
        });

        submit_click.addEventListener('click', function () {
            shown_name.innerHTML = "John Doe"; // Remplacez "John Doe" par le nom approprié
        });
    </script>
</body>
</html>
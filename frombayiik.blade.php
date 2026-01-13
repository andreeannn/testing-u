<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buatt bayiik</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffeaa7, #fab1a0, #fd79a8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .gift-box {
            width: 200px;
            height: 200px;
            position: relative;
            cursor: pointer;
            transition: transform 0.5s;
            z-index: 2;
            /* Pastikan kado di atas bunga */
        }

        .gift-box:hover {
            transform: scale(1.1);
        }

        .box {
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #e17055, #fdcb6e);
            border-radius: 10px;
            position: absolute;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .lid {
            width: 100%;
            height: 50%;
            background: linear-gradient(45deg, #fd79a8, #ffeaa7);
            border-radius: 10px 10px 0 0;
            position: absolute;
            top: 0;
            transition: transform 1s ease-in-out;
        }

        .ribbon {
            width: 20px;
            height: 100%;
            background: #ff7675;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .ribbon::before {
            content: '';
            width: 100%;
            height: 20px;
            background: #ff7675;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .inside {
            width: 100%;
            height: 100%;
            background: #fff;
            border-radius: 10px;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 1s;
            font-size: 1.2em;
            color: #e17055;
            text-align: center;
        }

        .open .lid {
            transform: rotateX(180deg) translateY(-50px);
        }

        .open .inside {
            opacity: 1;
        }

        /* Animasi bunga jatuh */
        .flower {
            position: absolute;
            width: 15px;
            height: 15px;
            background: radial-gradient(circle, #ff7675, #fdcb6e);
            border-radius: 50%;
            animation: fall 8s linear infinite;
            z-index: 1;
        }

        .flower:nth-child(odd) {
            animation-delay: -2s;
        }

        .flower:nth-child(even) {
            animation-delay: -4s;
        }

        @keyframes fall {
            from {
                top: -20px;
                left: 0;
                opacity: 1;
            }

            to {
                top: 100vh;
                left: 100vw;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="gift-box" onclick="openGift()">
        <div class="box">
            <div class="lid"></div>
            <div class="ribbon"></div>
            <div class="inside">
                <p>happy birthday bayiik<br>💖Semoga makin panjang umur sehat selalu dan juga sering sering mandii yaah
                    💖</p>
            </div>
        </div>
    </div>

    <!-- Bunga-bunga jatuh -->
    <div class="flower" style="left: 10%;"></div>
    <div class="flower" style="left: 20%;"></div>
    <div class="flower" style="left: 30%;"></div>
    <div class="flower" style="left: 40%;"></div>
    <div class="flower" style="left: 50%;"></div>
    <div class="flower" style="left: 60%;"></div>
    <div class="flower" style="left: 70%;"></div>
    <div class="flower" style="left: 80%;"></div>
    <div class="flower" style="left: 90%;"></div>

    <script>
        function openGift() {
            const giftBox = document.querySelector('.gift-box');
            giftBox.classList.toggle('open');
        }
    </script>
</body>

</html>

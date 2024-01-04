<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body,html{
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            display: grid;
            background-color: black;
            place-items: center;
        }
        .icon-rotate-ball{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid black;
            cursor: pointer;
            position: relative;
            background-color: white;
            /* overflow: hidden; */
        }
        .color-ball{
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: white;
            transform: scale(0);
            position: absolute;
        }
        .icon{
            font-size: 3rem;
            transition: transform .3s;
            color: dodgerblue;
            /* display: none; */
        }
        .icon-rotate-ball:hover .color-ball{
            background-color: dodgerblue;
            animation: pop .4s forwards;
        }
        .icon-rotate-ball:hover .icon{
            color: white;
            transform: rotateY(180deg);
        }
        @keyframes pop {
            0%{
                transform: scale(0);
            }
            50%{
                transform: scale(1.05);
                /* background-color: dodgerblue; */
            }
            100%{
                transform: scale(1);
                /* background-color: dodgerblue; */
            }
        }
    </style>
</head>
<body>
    <div class="icon-rotate-ball">
        <div class="color-ball"></div>
        <span class="icon"><i class="ri-store-2-line"></i></span>
    </div>
</body>
</html>
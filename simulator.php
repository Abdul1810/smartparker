<<<<<<< HEAD
=======
<?php
session_start();
require('includes/dbconn.php');
if (!isset($_SESSION["lot_id"])) {
    header("Location: index.php");
    exit();
}
?>
>>>>>>> 2ca28e9 (added database)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Rectangle Divided into Halves and Parts</title>
=======
    <title>Please Park Your Vehicle</title>
>>>>>>> 2ca28e9 (added database)
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Custom CSS to style the rectangle and boxes */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Center the container vertically in the viewport */
        }

        .rectangle {
            width: 600px;
            /* Adjust the width of the rectangle as needed */
            height: 400px;
            display: flex;
            flex-direction: column;
            /* Divide into two vertical halves */
            background-color: #ccc;
            padding: 5px;
            border: 1px solid #000;
            /* Border thickness of 1.5 pixels */
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex: 1;
        }

        .box {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 191px;
            width: 200px;
            border: 1.8px solid #000;
            /* Border thickness of 1.5 pixels */
        }

        /* Add margin to separate the two halves vertically */
        .row:first-child {
            margin-bottom: 8px;
        }

        .is-filled {
            background-color: #a04242;
            color: #fff;
        }
<<<<<<< HEAD
=======

        /* create a blinking animation in green */
        .is-lot {
            background-color: #42a04f;
            color: #fff;
            animation: blinker 2s linear infinite;
        }
        @keyframes blinker {
            50% {
                opacity: 20%;
            }
        }
>>>>>>> 2ca28e9 (added database)
    </style>
</head>

<body align="center">
    <div class="container mx-auto mt-4">
        <div class="rectangle">
            <!-- Create the top half with 5 horizontal rows -->
            <div class="row">
                <div class="box is-filled">
                    <p class="text-2xl font-semibold">1</p>
                </div>
                <div class="box">
                <div class="box is-lot">
                    <p class="text-2xl font-semibold">3</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">5</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">7</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">9</p>
                </div>
            </div>
<<<<<<< HEAD

=======
>>>>>>> 2ca28e9 (added database)
            <!-- Create the bottom half with 5 horizontal rows -->
            <div class="row">
                <div class="box">
                    <p class="text-2xl font-semibold">2</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">4</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">6</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">8</p>
                </div>
                <div class="box">
                    <p class="text-2xl font-semibold">10</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
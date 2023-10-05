<?php
session_start();
require('includes/dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional styles for the background image */
        body {
            background-image: url('assets/thanks.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="h-screen flex flex-col justify-center items-center">
    <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg text-center">
        <h1 class="text-3xl font-semibold text-blue-500 mb-4">Thanks for visiting our services</h1>
        <p class="text-gray-700">Check your mail for payment & confirmation details.</p>
    </div>
</body>
</html>

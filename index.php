<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <title>About me...</title>
</head>
<body class="font-mono bg-neutral-900">

    <?php
        include_once 'priv/navigation.html';
    ?>


    <div class="text-white flex justify-center w-auto h-auto mt-56">
        <h1 class="text-4xl">I'm <span class="auto-type"></span></h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
    <div class="flex justify-center mt-10 text-white text-4xl">
        <a href="links/aboutme"><button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">About me</button></a>

        <button type="button" class="ml-10 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Projects</button>

        <button type="button" class="ml-10 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Other</button>

    </div>

    <script>
        var typed = new Typed(".auto-type", {
            strings: ["a Student...", "a Web Developer...", "a C++ Developer...", "a Chief Technology Officer..."],
            typeSpeed: 250,
            backSpeed: 40,
            loop: true
        })
    </script>

<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-[Poppins] bg-gray-800 h-screen ">
    <header class="bg-cyan-950 text-white    ">
        <nav class="flex  w-[92%] mx-auto ">
            <div class ="py-4 px-10 text-xl">
                <h1>System Management Employee</h1>
            </div>
            <div
                class="nav-links  flex items-center px-10">
                <ul class="flex md:flex-row gap-8">
                    <li>
                        <a class="hover:text-gray-700 " href="/">Dashboard</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700" href="/employees">Employee</a>
                        
                    </li>
                    
                </ul>
            </div>
    </header>
    <div class="container mx-auto">
        @yield('container')
    </div>


    <footer class="bg-cyan-950 shadow ">
        <div class="w-full mx-auto max-w-screen-xl  md:flex md:items-center md:justify-between text-center">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400 ">© 2023 <a href="https://www.linkedin.com/in/rizalzeri/" class="hover:underline hover:text-gray-700">Rizal Zeri Subakti</a>. All Rights Reserved.
        </span>
        
        </div>
    </footer>
    
</body>

</html>
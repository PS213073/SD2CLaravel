<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-2xl mx-auto">
    
        <nav class="border-gray-200">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="views.home.php" class="flex">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/2048px-Tailwind_CSS_Logo.svg.png" alt="logo" class="w-8 h-8">
                <span class="self-center text-lg font-semibold whitespace-nowrap">Tailwind css</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center justify-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                <a href="{{('/home')}}" class="py-2 pl-3 pr-4 text-lg text-white bg-blue-700 rounded text-block md:bg-transparent md:text-blue-700 md:p-0 focus:outline-none" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-lg font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Services <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="{{('/webdesign')}}" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">Web Design</a>
                        </li>
                        <li>
                            <a href="{{('/hosting')}}" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">Hosting</a>
                        </li>
                        <li>
                            <a href="{{('/seo')}}" class="block px-4 py-2 text-lg text-gray-700 hover:bg-gray-100">SEO</a>
                        </li>
                        </ul>                        
                    </div>
                </li>
                <li>
                <a href="{{('/about')}}" class="block py-2 pl-3 pr-4 text-lg text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About Us</a>
                </li>
                <li>
                <a href="{{('/contact')}}" class="block py-2 pl-3 pr-4 text-lg text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>                
            </ul>
            </div>
        </div>
        </nav>        
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>   
    
        @yield('page-content')
    

</body>
</html>
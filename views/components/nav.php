<header class="bg-white shadow-md p-4 sticky top-0 z-10">
    <div class="max-w-7xl mx-auto flex justify-between items-center relative">
        <!-- Hamburger Menu Button for Mobile -->
        <button id="menu-btn" class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation Links -->
        <nav class="md:bg-gray-100 md:rounded-full md:px-6 md:py-2 md:flex md:space-x-6 bg-gray-100 rounded-lg px-4 py-2 absolute md:static top-14 left-0 w-full md:w-auto transition-all duration-300 ease-in-out nav-closed z-04" id="nav-menu">
            <a href="/" class="block text-gray-700 hover:text-blue-500 py-2 md:inline-block md:py-0">Home</a>
            <a href="/about" class="block text-gray-700 hover:text-blue-500 py-2 md:inline-block md:py-0">About</a>
            <a href="/articles" class="block text-gray-700 hover:text-blue-500 py-2 md:inline-block md:py-0">Articles</a>
            <a href="/projects" class="block text-gray-700 hover:text-blue-500 py-2 md:inline-block md:py-0">Projects</a>
            <a href="#" class="block text-gray-700 hover:text-blue-500 py-2 md:inline-block md:py-0">Uses</a>
        </nav>

        <!-- Icons -->
        <div class="flex space-x-2 md:absolute md:right-0">
            <button class="bg-gray-100 rounded-full p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 14v1m-6-6h1m14-6h1m-6 10h1m-6-10h-1m10 6h-1m-6-10v14m6-6h-1"></path>
                </svg>
            </button>
            <button class="bg-gray-100 rounded-full p-1 text-gray-500 hover:text-gray-700 focus:outline-none">
                <img src="images/pp.jpg" alt="Profile Picture" class="w-7 h-7 object-cover rounded-full">
            </button>
        </div>
    </div>
</header>
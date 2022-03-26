<!DOCTYPE html>
<html lang="es" class="bg-[#151515]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba tecnica Muxii</title>
    <link rel="stylesheet" href="./css/app.css">
    <script defer type="module" src="./js/main.js"></script>
    
</head>

<body>

    <nav class="flex flex-nowrap justify-between mx-auto bg-black h-full">

        <div id="logo" class="h-24">
            <a href="#"> <img src="/assets/logo.jpg" alt="Muxii Studios"> </a>
        </div>

        <div id="search-container" class="h-24 w-3/4 flex justify-end pr-3 items-center">
            <form class="w-full max-w-sm">
                <div class="flex items-center py-2">
                    <input
                        class="appearance-none bg-[#2D2D2D] rounded-full border-none w-full text-gray-400 mr-2 py-2 px-4 leading-tight focus:outline-none"
                        type="text" placeholder="Search Muxii">
                    <button class="flex-shrink-0 bg-[#2D2D2D] text-sm text-gray-400 py-2 px-2 rounded-full"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <div id="buttons-container" class="py-2 h-24 mx-0 flex items-center">

            <button class="btn-p" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </button>

            <button class="btn-p" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>

            <button class="btn-p" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </button>

        </div>

    </nav>

    <main class="flex flex-wrap">

        <aside class="w-24" aria-label="Sidebar">

            <div class="overflow-y-auto py-4 px-3 bg-black h-full">

                <ul class="space-y-4">

                    <li class="mx-4">

                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </button>
                    </li>
                    <li class="mx-4">
                        <button class="btn-p" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                        </button>
                    </li>
                </ul>

            </div>
        </aside>

        <div id="content" class="w-5/6">

            <div class="container my-2 mx-10 w-auto">
                <img src="./assets/banner.jpg" alt="">
            </div>

            <div class="container flex flex-nowrap my-4 mx-auto w-auto">
                <button type="button"
                    class="px-2 py-1 mx-1 text-xs font-extrabold text-left text-white bg-[#656565] w-28 rounded-full">
                    Trending</button>
                <button type="button"
                    class="px-2 py-1 mx-1 text-xs font-extrabold text-left text-white bg-[#656565] w-28 rounded-full">
                    Monthly Top</button>
                <button type="button"
                    class="px-2 py-1 mx-1 text-xs font-extrabold text-left text-white bg-[#656565] w-28 rounded-full">
                    View All</button>
                <button type="button"
                    class="py-1 text-xs font-extrabold text-center text-pinky bg-white w-2/4 rounded-full">
                    IT’S TIME TO UPGRADE TO PREMIUM - 20% OFF ONLY THIS WEEKEND!</button>
                <button type="button"
                    class="px-2 py-1 mx-1 text-xs font-extrabold text-center text-white bg-[#656565] w-28 rounded-full">
                    10:20 P.M.</button>
                <button type="button"
                    class="px-2 py-1 mx-1 text-xs font-extrabold text-center text-white bg-[#656565] w-28 rounded-full">
                    8/14/2023</button>
            </div>

            <div id="cards-container" class="masonry sm:masonry-sm md:masonry-md"></div>
        </div>

    </main>

</body>

<!-- <script src="{{asset('js/main.js')}}"></script> -->
<!-- <script src="../js/main.js"></script> -->
</html>
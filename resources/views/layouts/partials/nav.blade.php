<nav x-data="{ isOpen: false }" class="sticky top-0 z-50 sm:px-2 light-theme shadow-md">
    <div class="max-w-7xl mx-auto md:flex px-2 py-0 md:px-0 md:py-2">
        <div class="flex items-center justify-between">
            <a href="/" class="font-bold text-3xl primary-color">
                {{-- <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt=""> --}}
                {{ config('app.name', 'Laravel') }}
            </a>

            <!-- Mobile menu button -->
            <div class="flex md:hidden gap-4 z-50">
                <div class="flex items-center gap-6">
                    <button id="searchModalButton" aria-label="button for modal open" @click="modalSearch = true"
                        class="flex items-center justify-center w-11 h-11 rounded-full bg-gray lg:transition-all lg:ease-linear lg:duration-200 hover:bg-gray-2 hover:text-dark">
                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.1875 17.4063L14.0313 13.2188C16.1563 10.3125 15.9375 6.15625 13.2812 3.53125C11.875 2.125 10 1.34375 8 1.34375C6 1.34375 4.125 2.125 2.71875 3.53125C-0.1875 6.4375 -0.1875 11.1875 2.71875 14.0938C4.125 15.5 6 16.2813 8 16.2813C9.90625 16.2813 11.6875 15.5625 13.0938 14.2813L18.3125 18.5C18.4375 18.5938 18.5938 18.6563 18.75 18.6563C18.9688 18.6563 19.1562 18.5625 19.2812 18.4063C19.5312 18.0938 19.5 17.6563 19.1875 17.4063ZM8 14.875C6.375 14.875 4.875 14.25 3.71875 13.0938C1.34375 10.7188 1.34375 6.875 3.71875 4.53125C4.875 3.375 6.375 2.75 8 2.75C9.625 2.75 11.125 3.375 12.2812 4.53125C14.6562 6.90625 14.6562 10.75 12.2812 13.0938C11.1562 14.25 9.625 14.875 8 14.875Z"
                                fill=""></path>
                        </svg>
                    </button>
                </div>
                <button x-cloak @click="isOpen = !isOpen" type="button"
                    class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
            class="absolute shadow-md md:shadow-none  bg-white inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out 0 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
            <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0 border-t-2 md:border-none border-gray-100">
                <x-a-link href="#">Home</x-a-link>
                <x-a-link href="#">About</x-a-link>
                <x-a-link href="#">Blog</x-a-link>
                {{-- <x-a href="#">Contact</x-a> --}}
            </div>

            <div class="block md:flex items-center gap-6">
                {{-- <x-search /> --}}
                @include('layouts.partials.search')
                {{-- toggle-theme --}}
                {{-- @include('layouts.partials.toggle-theme') --}}
                {{-- <button
                    class="flex items-center gap-2 text-base font-medium text-black dark:text-gray-50 hover:text-primary lg:transition-all lg:duration-200 lg:ease-linear">
                    <svg class="rotate-180 fill-current" width="22px" height="22px" viewBox="0 0 18 18"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_209_9540)">
                            <path
                                d="M11.209 0.937499C10.1833 0.937484 9.35657 0.937472 8.70635 1.02489C8.03127 1.11565 7.46286 1.30983 7.01142 1.76126C6.61773 2.15496 6.4188 2.63877 6.31437 3.20726C6.2129 3.75968 6.19349 4.43572 6.18897 5.24687C6.18724 5.55753 6.43768 5.81076 6.74833 5.81249C7.05899 5.81422 7.31223 5.56379 7.31396 5.25313C7.31852 4.43301 7.33982 3.8517 7.42086 3.41051C7.49895 2.9854 7.62433 2.73935 7.80692 2.55676C8.01449 2.34919 8.30592 2.21385 8.85625 2.13986C9.42276 2.0637 10.1736 2.0625 11.2502 2.0625L12.0002 2.0625C13.0767 2.0625 13.8276 2.06369 14.3941 2.13986C14.9444 2.21385 15.2358 2.34918 15.4434 2.55676C15.651 2.76433 15.7863 3.05576 15.8603 3.60609C15.9365 4.1726 15.9377 4.92344 15.9377 6L15.9377 12C15.9377 13.0766 15.9365 13.8274 15.8603 14.3939C15.7863 14.9442 15.651 15.2357 15.4434 15.4432C15.2358 15.6508 14.9444 15.7862 14.3941 15.8601C13.8276 15.9363 13.0767 15.9375 12.0002 15.9375L11.2502 15.9375C10.1736 15.9375 9.42277 15.9363 8.85625 15.8601C8.30592 15.7862 8.01449 15.6508 7.80692 15.4432C7.62433 15.2607 7.49895 15.0146 7.42086 14.5895C7.33982 14.1483 7.31852 13.567 7.31396 12.7469C7.31223 12.4362 7.05899 12.1858 6.74833 12.1875C6.43768 12.1892 6.18725 12.4425 6.18897 12.7531C6.19349 13.5643 6.2129 14.2403 6.31437 14.7927C6.4188 15.3612 6.61773 15.845 7.01143 16.2387C7.46286 16.6902 8.03127 16.8843 8.70635 16.9751C9.35658 17.0625 10.1833 17.0625 11.209 17.0625L12.0413 17.0625C13.067 17.0625 13.8937 17.0625 14.544 16.9751C15.2191 16.8843 15.7875 16.6902 16.2389 16.2387C16.6903 15.7873 16.8845 15.2189 16.9753 14.5438C17.0627 13.8936 17.0627 13.0668 17.0627 12.0412L17.0627 5.95885C17.0627 4.93315 17.0627 4.10641 16.9753 3.45619C16.8845 2.78111 16.6903 2.2127 16.2389 1.76126C15.7875 1.30982 15.2191 1.11565 14.544 1.02489C13.8938 0.937472 13.067 0.937484 12.0413 0.937499L11.209 0.937499Z"
                                fill=""></path>
                            <path
                                d="M11.25 8.4375C11.5607 8.4375 11.8125 8.68934 11.8125 9C11.8125 9.31066 11.5607 9.5625 11.25 9.5625L3.02058 9.5625L4.49107 10.8229C4.72694 11.0251 4.75426 11.3802 4.55208 11.6161C4.34991 11.8519 3.9948 11.8793 3.75893 11.6771L1.13393 9.42708C1.00925 9.32022 0.937501 9.16421 0.937501 9C0.937501 8.83579 1.00925 8.67978 1.13393 8.57292L3.75893 6.32292C3.9948 6.12074 4.34991 6.14806 4.55208 6.38393C4.75426 6.6198 4.72694 6.97491 4.49107 7.17708L3.02058 8.4375L11.25 8.4375Z"
                                fill=""></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_209_9540">
                                <rect width="18" height="18" rx="5" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>Log in
                </button> --}}
            </div>

        </div>
    </div>
</nav>

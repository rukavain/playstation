@extends('layout')

@section('content')
    <nav class="flex w-full shadow-lg justify-between items-center p-2 max-xl:hidden mb-10">
        <div class="flex justify-center items-center gap-6">
            <svg aria-hidden="true" focusable="false" class="shared-nav-ps-logo" width="50px" height="50px" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"
                data-di-res-id="c1f185c3-f87a03f2" data-di-rand="1734449291358">
                <g>
                    <g>
                        <path
                            d="M5.8,32.1C4.3,33.1,4.8,35,8,35.9c3.3,1.1,6.9,1.4,10.4,0.8c0.2,0,0.4-0.1,0.5-0.1v-3.4l-3.4,1.1
                                                                                                                                                                                                                                                                                                                                                                                                                                                     c-1.3,0.4-2.6,0.5-3.9,0.2c-1-0.3-0.8-0.9,0.4-1.4l6.9-2.4V27l-9.6,3.3C8.1,30.7,6.9,31.3,5.8,32.1z M29,17.1v9.7
                                                                                                                                                                                                                                                                                                                                                                                                                                                     c4.1,2,7.3,0,7.3-5.2c0-5.3-1.9-7.7-7.4-9.6C26,11,23,10.1,20,9.5v28.9l7,2.1V16.2c0-1.1,0-1.9,0.8-1.6C28.9,14.9,29,16,29,17.1z
                                                                                                                                                                                                                                                                                                                                                                                                                                                      M42,29.8c-2.9-1-6-1.4-9-1.1c-1.6,0.1-3.1,0.5-4.5,1l-0.3,0.1v3.9l6.5-2.4c1.3-0.4,2.6-0.5,3.9-0.2c1,0.3,0.8,0.9-0.4,1.4
                                                                                                                                                                                                                                                                                                                                                                                                                                                     l-10,3.7V40L42,34.9c1-0.4,1.9-0.9,2.7-1.7C45.4,32.2,45.1,30.8,42,29.8z"
                            fill="#0070d1">
                        </path>
                    </g>
                </g>
            </svg>
            <div>
                <details class="dropdown min-w-20">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        Games</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow flex">
                        <li><a>PS5</a></li>
                        <li><a>PS4</a></li>
                        <li><a>PS VR2</a></li>
                        <li><a>PC</a></li>
                    </ul>
                </details>
                <details class="dropdown min-w-20">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        PS5
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Console</a></li>
                        <li><a>Games</a></li>
                        <li><a>Controllers</a></li>
                        <li><a>PS VR2</a></li>
                        <li><a>Audio</a></li>
                    </ul>
                </details>
                <details class="dropdown">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        PS4
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Console</a></li>
                        <li><a>Games</a></li>
                        <li><a>Controllers</a></li>
                        <li><a>PS VR2</a></li>
                        <li><a>Audio</a></li>
                    </ul>
                </details>
                <details class="dropdown">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        Accessories</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>PS5</a></li>
                        <li><a>PS4</a></li>
                        <li><a>PS VR2</a></li>
                        <li><a>PC</a></li>
                    </ul>
                </details>
                <details class="dropdown">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        News
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>This Month on Playstation</a></li>
                    </ul>
                </details>
                <details class="dropdown">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        Store</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Buy Games</a></li>
                    </ul>
                </details>
                <details class="dropdown">
                    <summary
                        class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                        Support</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Support</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <div class="flex gap-4 justify-center items-center">
            <a href="" class="border rounded-md bg-blue-600 text-white text-md py-1 px-7 font-semibold">
                Sign in
            </a>
            <svg aria-hidden="true" focusable="false" width="30px" height="30px" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"
                data-di-res-id="794de2a6-9a4279a4" data-di-rand="1734449291359">
                <g>
                    <path
                        d="M8,20.913 C8,14.344 13.344,9 19.913,9 C26.482,9 31.827,14.344 31.827,20.913 C31.827,27.482 26.482,32.827 19.913,32.827 C13.344,32.827 8,27.482 8,20.913 M45.112,43.585 L32.346,30.82 C34.518,28.099 35.827,24.658 35.827,20.913 C35.827,12.139 28.688,5 19.913,5 C11.139,5 4,12.139 4,20.913 C4,29.688 11.139,36.827 19.913,36.827 C23.503,36.827 26.808,35.618 29.474,33.604 L42.284,46.413 C42.674,46.804 43.186,46.999 43.698,46.999 C44.209,46.999 44.721,46.804 45.112,46.413 C45.502,46.023 45.698,45.511 45.698,44.999 C45.698,44.488 45.502,43.976 45.112,43.585">
                    </path>
                </g>
            </svg>
        </div>
    </nav>
    <nav class="w-full shadow-lg justify-between items-center p-4 bg-white hidden max-xl:flex">
        <!-- Logo Section -->
        <div class="flex items-center gap-4">
            <button id="mobile-menu-toggle" class="lg:hidden block text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <svg aria-hidden="true" focusable="false" class="shared-nav-ps-logo" width="50px" height="50px"
                version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 50 50" data-di-res-id="c1f185c3-f87a03f2" data-di-rand="1734449291358">
                <g>
                    <g>
                        <path
                            d="M5.8,32.1C4.3,33.1,4.8,35,8,35.9c3.3,1.1,6.9,1.4,10.4,0.8c0.2,0,0.4-0.1,0.5-0.1v-3.4l-3.4,1.1
                                                                                                                                                                                                                                                                                                                                                                                                                                                     c-1.3,0.4-2.6,0.5-3.9,0.2c-1-0.3-0.8-0.9,0.4-1.4l6.9-2.4V27l-9.6,3.3C8.1,30.7,6.9,31.3,5.8,32.1z M29,17.1v9.7
                                                                                                                                                                                                                                                                                                                                                                                                                                                     c4.1,2,7.3,0,7.3-5.2c0-5.3-1.9-7.7-7.4-9.6C26,11,23,10.1,20,9.5v28.9l7,2.1V16.2c0-1.1,0-1.9,0.8-1.6C28.9,14.9,29,16,29,17.1z
                                                                                                                                                                                                                                                                                                                                                                                                                                                      M42,29.8c-2.9-1-6-1.4-9-1.1c-1.6,0.1-3.1,0.5-4.5,1l-0.3,0.1v3.9l6.5-2.4c1.3-0.4,2.6-0.5,3.9-0.2c1,0.3,0.8,0.9-0.4,1.4
                                                                                                                                                                                                                                                                                                                                                                                                                                                     l-10,3.7V40L42,34.9c1-0.4,1.9-0.9,2.7-1.7C45.4,32.2,45.1,30.8,42,29.8z"
                            fill="#0070d1">
                        </path>
                    </g>
                </g>
            </svg>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex gap-4 items-center">
            <details class="dropdown">
                <summary class="list-none cursor-pointer hover:text-blue-600 font-semibold py-2 px-4">Games</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow flex">
                    <li><a>PS5</a></li>
                    <li><a>PS4</a></li>
                    <li><a>PS VR2</a></li>
                    <li><a>PC</a></li>
                </ul>
            </details>
            <details class="dropdown">
                <summary
                    class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                    PS4
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Console</a></li>
                    <li><a>Games</a></li>
                    <li><a>Controllers</a></li>
                    <li><a>PS VR2</a></li>
                    <li><a>Audio</a></li>
                </ul>
            </details>
            <details class="dropdown">
                <summary
                    class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                    Accessories</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>PS5</a></li>
                    <li><a>PS4</a></li>
                    <li><a>PS VR2</a></li>
                    <li><a>PC</a></li>
                </ul>
            </details>
            <details class="dropdown">
                <summary
                    class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                    News
                </summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>This Month on Playstation</a></li>
                </ul>
            </details>
            <details class="dropdown">
                <summary
                    class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                    Store</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Buy Games</a></li>
                </ul>
            </details>
            <details class="dropdown">
                <summary
                    class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-center transition-all font-semibold min-w-20 m-1 py-2 px-4">
                    Support</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                    <li><a>Support</a></li>
                </ul>
            </details>
            <!-- Add additional dropdowns here following the same pattern -->
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden absolute top-16 left-0 w-full bg-white shadow-md z-10">
            <ul class="flex flex-col space-y-2 p-4">
                <li class="flex flex-col justify-center items-start text-left">
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            Games
                        </summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow flex">
                            <li><a>PS5</a></li>
                            <li><a>PS4</a></li>
                            <li><a>PS VR2</a></li>
                            <li><a>PC</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            PS4
                        </summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Console</a></li>
                            <li><a>Games</a></li>
                            <li><a>Controllers</a></li>
                            <li><a>PS VR2</a></li>
                            <li><a>Audio</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            Accessories</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>PS5</a></li>
                            <li><a>PS4</a></li>
                            <li><a>PS VR2</a></li>
                            <li><a>PC</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            News
                        </summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>This Month on Playstation</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            Store</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Buy Games</a></li>
                        </ul>
                    </details>
                    <details class="dropdown">
                        <summary
                            class="list-none cursor-pointer hover:text-white hover:bg-blue-600 rounded-md text-left transition-all font-semibold min-w-20 m-1 py-2 px-4">
                            Support</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Support</a></li>
                        </ul>
                    </details>
                </li>
                <!-- Add additional items here for other dropdowns -->
            </ul>
        </div>

        <!-- Sign In and Search -->
        <div class="hidden lg:flex items-center gap-4">
            <a href="#" class="border rounded-md bg-blue-600 text-white py-1 px-7 font-semibold">Sign In</a>
            <svg aria-hidden="true" focusable="false" width="30px" height="30px" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"
                data-di-res-id="794de2a6-9a4279a4" data-di-rand="1734449291359">
                <g>
                    <path
                        d="M8,20.913 C8,14.344 13.344,9 19.913,9 C26.482,9 31.827,14.344 31.827,20.913 C31.827,27.482 26.482,32.827 19.913,32.827 C13.344,32.827 8,27.482 8,20.913 M45.112,43.585 L32.346,30.82 C34.518,28.099 35.827,24.658 35.827,20.913 C35.827,12.139 28.688,5 19.913,5 C11.139,5 4,12.139 4,20.913 C4,29.688 11.139,36.827 19.913,36.827 C23.503,36.827 26.808,35.618 29.474,33.604 L42.284,46.413 C42.674,46.804 43.186,46.999 43.698,46.999 C44.209,46.999 44.721,46.804 45.112,46.413 C45.502,46.023 45.698,45.511 45.698,44.999 C45.698,44.488 45.502,43.976 45.112,43.585">
                    </path>
                </g>
            </svg>
        </div>
    </nav>

    <script>
        const toggleButton = document.getElementById("mobile-menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        toggleButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>
@endsection

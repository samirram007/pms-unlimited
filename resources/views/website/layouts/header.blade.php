<header class="">
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="">
            <div class="row">
                <div class="col-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html"
                                style="margin-bottom:5px; margin-right:5px;">
                                <h3 style="padding-left:2rem;">
                                    <img src="{{ asset('website/images/logo2.png') }}" alt=""
                                        title="#slider-direction-2" style="height:50px;" />
                                    <span style="font-size:.9em;"><span
                                            style="color:rgba(0,211,255,1.00);">Life</span><span
                                            style="color:rgba(255,255,255,1.00);"> Fertility Centre</span> </span>
                                </h3>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                            id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="{{ route('landing') }}/#">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('landing') }}/#services">Services</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('doctors') }}">Doctor With us</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="{{ route('home_services') }}">Home Services</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="https://pat.lifefertilitycentre.com/">Book Now <sup
                                            class="badge badge-primary">new</sup></a>

                                </li>

                                <li>
                                    <a class="page-scroll" href="{{ route('gallery') }}">Gallery</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="{{ route('landing') }}/#contact">Contact us</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ route('landing') }}/#privacy">Privacy</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li>



                                            <a href="{{ url('/home') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>



                                        </li>
                                    @else
                                        <li>
                                            <a href class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" data-toggle="modal" data-target="#exampleModalCenter">
                                                Log In
                                              </a>
                                            {{-- <a href="{{ route('login') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                in</a> --}}
                                        </li>
                                        <li class="sr-only">
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        </li>
                                    @endauth
                                @endif
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>

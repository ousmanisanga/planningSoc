<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PlanningSOc</title>
        @vite(['resources/css/app.scss', 'resources/js/app.js'])

        <!-- Fonts -->
        {{-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('maps/style.css.map') }}"> --}}


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
            <link rel="icon" type="image/png" sizes="16x16" href="asset('images/logoElite.png')">

        {{-- injecte CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Poppins&display=swap" rel="stylesheet">
        <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">




        <link rel="stylesheet" href="{{ asset('css/dashboard/css/bootstrap/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
        <link rel="stylesheet" href="{{ asset('css/allasked.css') }}">



        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/bootstrap/bootstrap.min.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/daterangepicker.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/fontawesome.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/footable.standalone.min.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/fullcalendar@5.2.0.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/jquery-jvectormap-2.0.5.css')}}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/line-awesome.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/magnific-popup.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/MarkerCluster.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/MarkerCluster.Default.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/select2.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/slick.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/star-rating-svg.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/dashboard/css/trumbowyg.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/wickedpicker.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/dashboard/css/style.css') }}">


    </head>
    <body  >



        {{-- start form search --}}

        <div class="mobile-search">
            <form class="search-form">
                <span data-feather="search"></span>
                <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
            </form>

        </div>
        {{-- end form search --}}
        <div class="mobile-author-actions"></div>
        <header class="header-top">
            <nav class="navbar navbar-light">
                {{-- start: navbar-left --}}
                <div class="navbar-left">
                    <a href="" class="sidebar-toggle">
                        <img class="svg" src="{{ asset('fonts/dashboard/fonts/feather-master/icons/align-justify.svg') }}" alt="img" style="background-color: #fba407"></a>
                    <a class="navbar-brand" href="#"><img class="dark" src="{{ asset('images/logoElite.png') }}" alt="svg"  style="width: 33px; height:25px"><span style=" font-family: 'Lora', serif;">SocElite</span></a>
                    <form action="/" class="search-form">
                        <span data-feather="search"></span>
                        <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Recherche">
                    </form>

                </div>
                <!-- ends: navbar-left -->

                <!-- Start navbar-right-->
                <div class="navbar-right">
                    <ul class="navbar-right__menu">
                        <li class="nav-search d-none">
                            <a href="#" class="search-toggle">
                                <i class="la la-search"></i>
                                <i class="la la-times"></i>
                            </a>
                            <form action="/" class="search-form-topMenu">
                                <span class="search-icon" data-feather="search"></span>
                                <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                            </form>
                        </li>
                        <li class="nav-message">
                            <div class="dropdown-custom">
                                <a href="javascript:;" class="nav-item-toggle">
                                    <span data-feather="mail"></span></a>
                                <div class="dropdown-wrapper">
                                    <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ml-1">2</span></h2>
                                    <ul>
                                        <li class="author-online has-new-message">

                                            <div class="user-message">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                    <span class="time-posted">3 hrs ago</span>
                                                </p>
                                                <p>
                                                    <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                        dolor amet cosec Lorem ipsum</span>
                                                    <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                    <a href="" class="dropdown-wrapper__more">See All Message</a>
                                </div>
                            </div>
                        </li>
                        <!-- ends: nav-message -->
                        <li class="nav-notification">
                            <div class="dropdown-custom">
                                <a href="javascript:;" class="nav-item-toggle">
                                    <span data-feather="bell"></span></a>
                                <div class="dropdown-wrapper">
                                    <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ml-1">4</span></h2>
                                    <ul>
                                        <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                            <div class="nav-notification__type nav-notification__type--primary">
                                                <span data-feather="inbox"></span>
                                            </div>
                                            <div class="nav-notification__details">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                                    <span>sent you a message</span>
                                                </p>
                                                <p>
                                                    <span class="time-posted">5 hours ago</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                            <div class="nav-notification__type nav-notification__type--secondary">
                                                <span data-feather="upload"></span>
                                            </div>
                                            <div class="nav-notification__details">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                                    <span>sent you a message</span>
                                                </p>
                                                <p>
                                                    <span class="time-posted">5 hours ago</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                            <div class="nav-notification__type nav-notification__type--success">
                                                <span data-feather="log-in"></span>
                                            </div>
                                            <div class="nav-notification__details">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                                    <span>sent you a message</span>
                                                </p>
                                                <p>
                                                    <span class="time-posted">5 hours ago</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                            <div class="nav-notification__type nav-notification__type--info">
                                                <span data-feather="at-sign"></span>
                                            </div>
                                            <div class="nav-notification__details">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                                    <span>sent you a message</span>
                                                </p>
                                                <p>
                                                    <span class="time-posted">5 hours ago</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                            <div class="nav-notification__type nav-notification__type--danger">
                                                <span data-feather="heart"></span>
                                            </div>
                                            <div class="nav-notification__details">
                                                <p>
                                                    <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                                    <span>sent you a message</span>
                                                </p>
                                                <p>
                                                    <span class="time-posted">5 hours ago</span>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                                </div>
                            </div>
                        </li>
                        <!-- ends: .nav-notification -->
                        <li class="nav-item dropdown">
                            <div class="dropdown-custom">
                                <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" style="text-decoration: none; color:black; font-size:16px" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="list-settings">
                                        <li class="d-flex">

                                            <div class="flex-grow-1">
                                                <h6>
                                                    <a href="" class="stretched-link">Design Mockups</a>
                                                </h6>
                                                <p>Share planning visuals with clients</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">

                                            <div class="flex-grow-1">
                                                <h6>
                                                    <a href="" class="stretched-link">Content Planner</a>
                                                </h6>
                                                <p>Centralize content gethering and editing</p>
                                            </div>
                                        </li>
                                        <li class="d-flex">

                                            <div class="flex-grow-1">
                                                <h6>
                                                    <a href="" class="stretched-link">Diagram Maker</a>
                                                </h6>
                                                <p>Plan user flows & test scenarios</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- ends: .nav-settings -->

                        <!-- ends: .nav-support -->

                        <!-- ends: .nav-flag-select -->
                        <li class="nav-author">
                            <div class="dropdown-custom">
                                <a href="javascript:;" class="nav-item-toggle"></a>
                                <div class="dropdown-wrapper">
                                    <div class="nav-author__info">

                                        <div>
                                            <h6>Abdullah Bin Talha</h6>
                                            <span>UI Designer</span>
                                        </div>
                                    </div>
                                    <div class="nav-author__options">
                                        <ul>
                                            <li>
                                                <a href="">
                                                    <span data-feather="user"></span> Profile</a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span data-feather="settings"></span> Settings</a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span data-feather="key"></span> Billing</a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span data-feather="users"></span> Activity</a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <span data-feather="bell"></span> Help</a>
                                            </li>
                                        </ul>
                                        <a href="" class="nav-author__signout">
                                            <span data-feather="log-out"></span> Sign Out</a>
                                    </div>
                                </div>
                                <!-- ends: .dropdown-wrapper -->
                            </div>
                        </li>
                        <!-- ends: .nav-author -->
                    </ul>
                    <!-- ends: .navbar-right__menu -->
                    <div class="navbar-right__mobileAction d-md-none">
                        <a href="#" class="btn-search">
                            <span data-feather="search"></span>
                            <span data-feather="x"></span></a>
                        <a href="#" class="btn-author-action">
                            <span data-feather="more-vertical"></span></a>
                    </div>
                </div>
                <!-- ends: .navbar-right -->


            </nav>
        </header>
        {{-- commancement Menu principal  --}}


        <main class="main-content">
            <aside class="sidebar-wrapper">
                <div class="sidebar sidebar-collapse" id="sidebar">
                    <div class="sidebar__menu-group">
                        <ul class="sidebar_nav" >
                            <li class="menu-title mb-4">
                                <span style="color: #fba407">Fonctionalités Principales</span>
                            </li>

                            {{-- Partie manager --}}

                            @if (Auth::user()->role == '0')
                            <li>
                                <a href="{{ route('home') }}" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Tableau de bord') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Utilisateurs') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('users.declarer') }}" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Incidents') }}</span>
                                </a>
                            </li>
                            <li class="has-child">
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="layout" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text" >Validation</span>
                                    <x-wi-direction-right style="height: 16px"/>
                                </a>
                                <ul>
                                    <li class="">
                                        <a href="{{ route('arrangement') }}"  style="text-decoration: none">{{ __('Permutation') }}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('demande') }}"  style="text-decoration: none">{{ __('Permission') }}</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Planning Supervision') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Mon compte') }}</span>
                                </a>
                            </li>


                            @endif

                            {{-- Partie Superviseur --}}

                            @if (Auth::user()->role == '1')
                            <li>
                                <a href="{{ route('home') }}" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Accueil') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('incidents.index') }}" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Déclaration des incidents') }}</span>
                                </a>
                            </li>
                            <li class="has-child">
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="layout" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text" >Soumettre une demande</span>
                                    <span class=""><x-wi-direction-right /></span>
                                </a>
                                <ul>
                                    <li class="">
                                        <a href="{{ route('permutations.index') }}"  style="text-decoration: none">{{ __('Permutation') }}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('permissions.index') }}"  style="text-decoration: none">{{ __('Permission') }}</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Consuluter le programme') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Rapport de supervision') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="" style="text-decoration: none">
                                    <span data-feather="message-square" class="nav-icon" style="color: #fba407"></span>
                                    <span class="menu-text">{{ __('Mon compte') }}</span>
                                </a>
                            </li>

                            @endif

                            <li class=" mt-4">
                                <a href="{{ route('auth.login') }}"  style="text-decoration: none">
                                    <span class="nav-icon"><x-iconsax-out-logout  style="color: #fba407;height:20px"/></span>
                                    <span class="menu-text" >{{__('Déconnexion')}}</span>

                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </aside>


            {{-- Contenu principale --}}

            <div class="contents">




                @yield('page-content')

            </div>

            <div class="app">
                <users-list></users-list>
            </div>








            {{-- Fin Contenu principale --}}
        </main>
        {{-- Fin Menu principal --}}







        {{--                                     start  Inject Js                                                        --}}

        <script src="{{ asset('js/dashboard/js/jquery/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/bootstrap/popper.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/accordion.js') }}"></script> --}}


        {{-- <script src="{{ asset('js/daterangepicker.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/drawer.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/dynamicBadge.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/dynamicCheckbox.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/feather.min.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/footable.min.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery.filterizr.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/jquery.mCustomScrollbar.min.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/jquery.peity.min.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/jquery.star-rating-svg.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/leaflet.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/loader.js')}}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/message.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/moment.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/moment/moment.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/dashboard/js/muuri.min.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/notification.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/popover.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/select2.full.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/dashboard/js/slick.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/trumbowyg.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/dashboard/js/ui/icons.svg') }}"></script>
        <script src="{{ asset('js/dashboard/js/wickedpicker.min.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/theme/js/drag-drop.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/theme/js/footable.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/theme/js/full-calendar.js') }}"></script>
        <script src="{{ asset('js/dashboard/js/theme/js/googlemap-init.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/theme/js/icon-loader.js') }}"></script>
        {{-- <script src="{{ asset('js/dashboard/js/theme/js/jvectormap-init.js') }}"></script> --}}
        {{-- <script src="{{ asset('js/dashboard/js/theme/js/leaflet-init.js') }}"></script> --}}
        <script src="{{ asset('js/dashboard/js/theme/js/main.js') }}"></script>
        <script src="js"></script>
        <script src="{{ asset('fonts/dashboard/fonts/feather/feather.min.js') }}"></script>

        @yield('scripts')
        {{--                                     End Inject Js                                                                                               --}}
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
       
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
                color:black;
            }

            body {
                min-height: 100vh;
                background: white;
                color: white;
                background-size: cover;
                background-position: center;
            }

            .side-bar {
                color: white!important;
                background: #1b1a1b;
                backdrop-filter: blur(15px);
                width: 250px;
                height: 100vh;
                /* position: fixed; */
                position: relative;
                top: 0;
                top: 0;
                left: -250px;
                overflow-y: auto;
                transition: 0.6s ease;
                transition-property: left;
            }
            .side-bar h1,
            .side-bar h2,
            .side-bar h3,
            .side-bar h4,
            .side-bar h5,
            .side-bar i
            {
                color: white!important;
            }

            .side-bar::-webkit-scrollbar {
                width: 0px;
            }



            .side-bar.active {
                left: 0;
            }

            h1 {

                text-align: center;
                font-weight: 500;
                font-size: 25px;
                padding-bottom: 13px;
                font-family: sans-serif;
                letter-spacing: 2px;
            }

            .side-bar .menu {
                width: 100%;
                margin-top: 30px;
            }

            .side-bar .menu .item {
                position: relative;
                cursor: pointer;
            }

            .side-bar .menu .item a {
                color: #fff;
                font-size: 16px;
                text-decoration: none;
                display: block;
                padding: 5px 30px;
                line-height: 60px;
            }

            .side-bar .menu .item a:hover {
                background: #33363a;
                transition: 0.3s ease;
            }

            .side-bar .menu .item i {
                margin-right: 15px;
            }

            .side-bar .menu .item a .dropdown {
                position: absolute;
                right: 0;
                margin: 20px;
                transition: 0.3s ease;
            }

            .side-bar .menu .item .sub-menu {
                background: #262627;
                display: none;
            }

            .side-bar .menu .item .sub-menu a {
                padding-left: 80px;
            }

            .rotate {
                transform: rotate(90deg);
            }

            .close-btn {
                position: absolute;
                color: #fff;

                font-size: 23px;
                right: 0px;
                /* margin: 15px; */
                cursor: pointer;
            }

            .menu-btn {
                /* position: fixed; */
                color: rgb(0, 0, 0);
                font-size: 35px;
                margin: 25px;
                cursor: pointer;
            }

            .main {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 50px;
            }

            .main h1 {
                color: rgba(213, 216, 46, 0.8);
                font-size: 60px;
                text-align: center;
                line-height: 80px;
            }

            @media (max-width: 900px) {
                .main h1 {
                    font-size: 40px;
                    line-height: 60px;
                }
            }

            img {
                width: 100px;
                margin: 15px;
                border-radius: 50%;
                margin-left: 70px;
                border: 3px solid #b4b8b9;
            }

            header {
                background: #33363a;
            }

        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 ">
        @include('layouts.navigation')
        <div class="d-flex">
    
                    @include('layouts.sidebar')
              
            


                <!-- Page Content -->
               
                <div class="row">
                    <div class="col-12 ms-2 me-2">
                        <h2> This is basic Side bar Implement.</h2>
                    </div>

                </div>
                


            </div>
           
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //jquery for toggle sub menus
                $('.sub-btn').click(function() {
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });

                //jquery for expand and collapse the sidebar
                $('.menu-btn').click(function() {
                    // $('.layout-first').removeClass('col-3 col-sm-3 col-lg-2');
                    // $('.layout-first').addClass('col-9 col-sm-9 col-lg-10');
                    $('.side-bar').addClass('active');
                    $('.side-bar').css('display','block');
                    $('.menu-btn').css('display','none');
                    // $('.menu-btn').css("visibility", "hidden");
                });

                $('.close-btn').click(function() {
                    $('.layout-first').removeClass('col-9 col-sm-9 col-lg-10').add('col-3 col-sm-3 col-lg-2');
                    $('.side-bar').removeClass('active');
                    $('.side-bar').css('display','none');
                    $('.menu-btn').css('display','block');
                    // $('.menu-btn').css("visibility", "visible");
                });
            });
        </script>
    </body>
</html>

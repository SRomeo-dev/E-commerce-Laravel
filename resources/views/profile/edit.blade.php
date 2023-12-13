 @if(session('success'))
    <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button id="closeBtn" type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3 flex items-center">
            <!-- Utilisation de l'icône de fermeture "X" de Heroicons -->
            <svg class="h-5 w-5 text-green-700 fill-current" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 5.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 11-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <script>
        document.getElementById('closeBtn').addEventListener('click', function() {
            document.getElementById('alert').style.display = 'none';
        });
    </script>
@endif

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">


    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">    
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('accueil') }}">
                        <span>
                            2R-Shop
                        </span>
                    </a>
                </nav>
            </div>
        </header>
    </div>

    <!-- Votre formulaire de déconnexion caché -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


</body>

</html>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4 md:mb-0">
                Mon Profil
            </h2>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <a href="{{ route('accueil') }}" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);">Accueil</a>
                <a href="{{ route('produits') }}" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);">Produits</a>
                <a href="{{ route('propos') }}" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);">À Propos</a>
                <a href="{{ route('panier') }}" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);">Panier</a>
                <a href="{{ route('panier') }}" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);">Panier</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="font-semibold text-sm md:text-xl dark:text-blue-300 leading-tight hover:opacity-70" style="color: rgba(8, 19, 92, 0.9);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

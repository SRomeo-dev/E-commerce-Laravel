<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ route('accueil') }}">
                <span>
                    2R-Shop
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('produits') }}">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('propos') }}">à propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panier') }}">
                            <span>
                                Panier 
                                <span class="badge badge-pill badge-danger">{{ Cart::count() }}</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Mon compte
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- Votre formulaire de déconnexion caché -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
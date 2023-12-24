<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin') }}" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">2R-Shop Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Rechercher.......">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->
            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Romeo SAWADOGO</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Romeo SAWADOGO</h6>
                        <span>Analyste développeur</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profil') }}">
                            <i class="bi bi-person"></i>
                            <span>Mon Profil</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>

                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Déconnexion</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('commande') }}">
                <i class="bi bi-journal-text"></i><span>Commandes</span>
            </a>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('produit') }}">
                <i class="bi bi-menu-button-wide"></i><span>Produits</span>
            </a>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('client') }}">
                <i class="bi bi-people"></i><span>Clients</span>
            </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profil') }}">
                <i class="bi bi-person"></i>
                <span>Profil</span>
            </a>
        </li><!-- End Profile Page Nav -->
    </ul>

</aside>
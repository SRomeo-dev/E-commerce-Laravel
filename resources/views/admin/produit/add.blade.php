<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.namea', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        /* Style pour les labels */
        label {
            font-weight: bold;
            color: #333;
            /* Changer la couleur selon vos préférences */
        }
    </style>


</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.partials.header2')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Produits</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Produits</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="container mt-5">
                <h2>Ajouter un Produit</h2>
                <form action="{{ route('produit-ajouter') }}" method="POST" enctype="multipart/form-data" class=" p-4 shadow" style="width: 50%;">
                    @csrf
                    <!-- Champs pour le nom, le prix et la description -->
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Catégorie</label>
                        <select class="form-select shadow" id="category_id" name="category_id">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="1">Téléphone</option>
                            <option value="2">Électroménager</option>
                            <option value="3">Informatique</option>
                            <option value="4">Mode</option>
                            <option value="5">Électronique</option>
                            <option value="6">Cosmétique</option>
                        </select>
                    </div>
                                                            
                    <!-- Champ d'upload pour l'image -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Image du Produit</label>
                        <input type="file" class="form-control shadow" id="image" name="image">
                    </div>

                    <!-- Champs pour le nom, le prix et la description -->
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom du Produit</label>
                        <input type="text" class="form-control shadow" id="nom" name="nom">
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="decimale" class="form-control shadow" id="prix" name="prix">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control shadow " id="description" rows="3" name="description"></textarea>
                    </div>

                    <!-- Bouton pour soumettre le formulaire -->
                    <button type="submit" class="btn btn-primary shadow"><i class="bi bi-plus"></i> Ajouter</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; 2023 2R-Shop | Tous droits réservés - <strong><span>Designed by Ramzy and Nana</span></strong>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

     <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
        

</body>

</html>
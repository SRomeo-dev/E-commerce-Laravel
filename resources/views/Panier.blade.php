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

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            var alertElement = document.querySelector('.alert');
            var closeButton = alertElement.querySelector('.btn-close');

            closeButton.addEventListener('click', function() {
                alertElement.classList.add('d-none');
            });
        </script>
        @endif

        <!-- header section strats -->
        @include('partials.header')
        <!-- end header section -->
    </div>

    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="h5">Produits</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Cart::count() > 0)
                                @foreach (Cart::content() as $produit)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $produit->model->image) }}" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                                <div class="flex-column ms-4">
                                                    <p class="mb-2">{{ $produit->model->description }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;"><input type="hidden" name="productName[]" value="{{ $produit->model->nom }}">{{ $produit->model->nom }}</p>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex flex-row">
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 50px;" />
                                                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;"><input type="hidden" name="productName[]" value="{{ $produit->model->prix }}">{{ $produit->model->prix }}CFA</p>
                                        </td>
                                        <td class="align-middle">
                                            <form action="{{ route('panier.delete', $produit->rowId) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">
                                        Votre panier est vide !
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                @if (Cart::count() > 0)
                <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                    <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                                        <p class="mb-2">Montant total</p>
                                        <p class="mb-2">{{ Cart::subtotal() }} FCFA</p>
                                    </div>
                                    <div class="d-flex justify-content-between" style="font-weight: 500;">
                                        <p class="mb-0">Taxe</p>
                                        <p class="mb-0">{{ Cart::tax() }} FCFA</p>
                                    </div>
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                                        <p class="mb-2">Total</p>
                                        <p class="mb-2">{{ Cart::total() }} FCFA</p>
                                    </div>
                                    <form action="{{ route('session') }}" method="POST">
                                        @csrf <!-- Ajout du jeton CSRF -->
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span>Payer</span>
                                                <span>{{ Cart::total() }} FCFA</span>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                @endif
            </div>
          </div>
        </div>
    </section>

    {{-- @if (Cart::count() > 0)
    <div class="px-4 px-lg-0">
        <div class="pb-5">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="text-uppercase">Produits</th>
                                    <th scope="col" class="text-uppercase">Prix</th>
                                    <th scope="col" class="text-uppercase">Quantité</th>
                                    <th scope="col" class="text-uppercase">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $produit)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $produit->model->image }}" alt="" width="70" class="img-fluid rounded shadow-sm me-3">
                                            <div>
                                                <h5 class="mb-0">{{ $produit->model->nom }}</h5>
                                                <span class="text-muted font-italic">Category: Watches</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><strong>{{ $produit->model->prix }} FCFA</strong></td>
                                    <td><strong>1</strong></td>
                                    <td>
                                        <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                                        <!-- End -->
                </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                    <div class="p-4">
                    <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                    <div class="input-group mb-4 border rounded-pill p-2">
                        <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                        <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                        </div>
                    </div>
                    </div>
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                    <div class="p-4">
                    <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                    <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                    <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                        <h5 class="font-weight-bold">$400.00</h5>
                        </li>
                    </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
    @else
    <h2>Votre panier est vide</h2>
    @endif  --}}


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

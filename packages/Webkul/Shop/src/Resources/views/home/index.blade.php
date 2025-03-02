<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Gift Shoping Website Template | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/fav.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />


</head>
<bod>
    <header class="container-fluid bg-white">
        <div class="header-top bg-gray  border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- <ul class="d-inline-flex pt-0 pt-md-2 fs-6">
                            <li class="p-2 "><i class="bi bi-envelope"></i> Support@smarteyeapps.com</li>
                            <li class="p-2 d-none d-md-block"><i class="bi bi-headphones"></i> +987 676 7676 676</li>
                        </ul> -->
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <ul class="ms-auto d-inline-flex">
                            <li class="p-2">
                                <a href="{{ route('login') }}" class="btn px-4 btn-danger">Login</a>
                            </li>
                            <li class="p-2">
                                <a href="{{ route('register') }}" class="btn px-4 btn-outline-danger">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-contaienr p-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-9 pt-1 pb-2">
                        <a href="index.html">
                            <img class="logo" src="images/logoConjutoBrasiliense.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-6 d-none d-md-block pt-2">
                        <div class="input-group pt-1 mb-0">
                            <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text sit border-start-0" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-3 pt-1 text-end">
                        <a href="cart.html">
                            <button type="button" class="btn btn-light shadow-md border position-relative">
                                <i class="bi fs-4 bi-basket"></i>
                                <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    2

                                </span>
                            </button>
                        </a>

                        <button type="button" class="btn d-none d-md-inline-block ms-3 btn-light shadow-md border position-relative">
                            <i class="bi fs-4 bi-heart"></i>
                            <span class="position-absolute fs-6 top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                2

                            </span>
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <div class="menu-bar bg-danger container-fluid border-top">
            <div class="container">
                <h6 class="d-md-none text-white p-3 mb-0 fw-bold">Menu
                    <a class="text-white" data-bs-target="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu"><i class="bi cp bi-list float-end fs-1 dmji"></i></a>
                </h6>
                <ul id="menu" class=" navcol fw-bold d-none d-md-inline-flex">
                    <li class="p-21 px-4"><a class="text-white" href="">Categorias<i class="bi pt-2 bi-chevron-down"></i></a>
                        <div class="inner-div">
                            <ul class="">
                                <li><a href="">Veículos</a></li>
                                <li><a href="{{ route('supermercado') }}">Supermercado</a></li>
                                <li><a href="">Tecnologia</a></li>
                                <li><a href="">Casa e Móveis</a></li>
                                <li><a href="">Eletrodomésticos</a></li>
                                <li><a href="">Esportes e Fitness</a></li>
                                <li><a href="">Ferramentas</a></li>
                                <li><a href="">Construção</a></li>
                                <li><a href="">Saúde</a></li>
                                <li><a href="">Acessórios para Veículos</a></li>
                                <li><a href="">Beleza e Cuidado Pessoal</a></li>
                                <li><a href="">Moda</a></li>
                                <li><a href="">Bebês</a></li>
                                <li><a href="">Brinquedos</a></li>
                                <li><a href="">Imóveis</a></li>
                                <li><a href="">Compra Internacional</a></li>
                                <li><a href="">Produtos Sustentaveis</a></li>
                                <li><a href="">Mais vendidos</a></li>
                                <li><a href="{{ route('lojasOficiais') }}">Lojas Oficiais</a></li>
                                <li><a href="">Ver mais categorias</a></li>

                            </ul>

                        </div>
                    </li>
                    <li class="p-21 px-4"><a class="text-white" href="">Pages <i class="bi pt-2 bi-chevron-down"></i></a>
                        <div class="inner-div">
                            <ul class="">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About US</a></li>
                                <li><a href="contact.html">Contact US</a></li>
                                <li><a href="product.html">Product Listing</a></li>
                                <li><a href="detail.blade.php">Product Detail</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="signup.html">Sing Up</a></li>
                                <li><a href="cart.html">Cart</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="p-21 px-4"><a class="text-white" href="">Anniversary <i class="bi pt-2 bi-chevron-down"></i></a></li>
                    <li class="p-21 px-4"><a class="text-white" href="">Birthday <i class="bi pt-2 bi-chevron-down"></i></a></li>
                    <li class="p-21 px-4"><a class="text-white" href="">Personal <i class="bi pt-2 bi-chevron-down"></i></a></li>
                    <li class="p-21 px-4"><a class="text-white" href="">Reception <i class="bi pt-2 bi-chevron-down"></i></a></li>
                    <li class="p-21 px-4"><a class="text-white" href="">Occasions </a></li>

                    <li class="p-21 px-4"><a class="text-white" href="">Surprise </a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider/propaganda2.webp" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                    <img src="images/slider/propaganda1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slider/propaganda3.webp" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="card-container">
        <div class="cardStatus" onclick="openModal('modal1')">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="{{ asset('images/lojasLogo/Xiaomi_logo.svg') }}" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="{{ asset('images/product/headset.webp') }}" alt="Marca 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/adidas.jpg" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/adidas.png" alt="Marca 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/puma.jpg" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/puma.avif" alt="Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/nike.jpg" alt=" avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/nike.jpg" alt=" Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/marisa.png" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/camisa.webp" alt=" Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/riachuelo.png" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/friachuelo.avif" alt="Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/purple.avif" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/pc.jpg" alt="Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/gubolin.png" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/play5.jpg" alt=" Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardStatus">
            <div class="cardStatus2">
                <div class="avatar">
                    <img src="images/lojasLogo/nitro.jpg" alt="avatar">
                </div>
                <div class="carousel-storie">
                    <div class="carousel-wrapper-storie">
                        <div class="carousel-item-storie">
                            <img src="images/product/headset.webp" alt="Marca 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="latest-products pt-5 pb-0">
        <div class="container-xl">
            <div class="section-tile row">
                <div class="col-md-10 text-center mx-auto">
                    <h2>Featured Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet est sit amet sem malesuada bibendum. Nulla eget mauris at dolor fermentum blandit. Maecenas</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="{{ route('detalhes') }}">
                                <img src="images/product/play5.jpg" alt="">
                            </a>
                        </div>
                        <div class=" detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Console PlayStation 5</h4>
                            <b class="fs-4 text-danger">R$ 3.7050</b>
                            <s class="fs-5 ps-3">3.9050</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="{{ route('detalhes') }}">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>


                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/tv.jpg" alt="">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/bicicleta.webp" alt="">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/furadeira.png" alt="">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/projetor.jpg" alt="">
                            </a>
                        </div>
                        <div class=" detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/celular.jpg" alt="">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <a href="detail.html">
                                <img src="images/product/pc.webp" alt="">
                            </a>
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <a href="detail.html">
                                        <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="bg-white p-2 shadow-md">
                        <div class="text-center">
                            <img src="images/product/ventilador.jpg" alt="">
                        </div>
                        <div class="detail p-2">
                            <h4 class="mb-1 fs-5 fw-bold">Personalised Birthday Easel</h4>
                            <b class="fs-4 text-danger">$44.00</b>
                            <s class="fs-5 ps-3">60.00</s>

                            <ul class="mt-0 vgth">
                                <li class="fs-8">
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi text-warning bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </li>
                                <li class="float-end gvi">
                                    <i class="bi text-danger bi-heart-fill"></i>
                                </li>
                            </ul>
                            <div class="row pt-2">
                                <div class="col-md-6">
                                    <button class="btn mb-2 fw-bold w-100 btn-danger">Buy Now</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn fw-bold w-100 btn-outline-danger">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="ad-cover container-fluid pb-4">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4">
                    <img class="bg-white shadow-md p-2" src="images/ads/1.webp" alt="">
                </div>
                <div class="col-md-4">
                    <img class="bg-white shadow-md p-2" src="images/ads/a2.webp" alt="">
                </div>
                <div class="col-md-4">
                    <img class="bg-white shadow-md p-2" src="images/ads/a3.webp" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <div class="popular-brands big-padding bg-white container-fluid">
        <div class="container">
            <div class="section-tile row">
                <div class="col-md-10 text-center mx-auto">
                    <h2>Popular Brands</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet est sit amet sem malesuada bibendum. Nulla eget mauris at dolor fermentum blandit. Maecenas</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/1.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-02.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-03.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-04.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-05.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-06.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-04.jpeg" alt="">
                    </div>
                </div>


                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-03.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-05.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/1.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-02.jpeg" alt="">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="brand-cover">
                        <img src="images/brand/client-02.jpeg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 foot-about">
                        <h4>About US</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit libero pellentesque libero interdum, id mattis felis dictum. Praesent eget lacus tempor justo efficitur malesuada. Cras ut suscipit nisi.</p>

                        <ul>
                            <li>23 Rose Stren Melbourn</li>
                            <li>sales@smarteyeapps.com</li>
                            <li>+91 876 766 554</li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-post">
                        <h4>Latest Posts</h4>

                        <div class="post-row">
                            <div class="image">
                                <img src="images/blog/1.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="images/blog/7.jpg" alt="">
                            </div>
                            <div class="detail p-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>

                        <div class="post-row">
                            <div class="image">
                                <img src="images/blog/6.jpg" alt="">
                            </div>
                            <div class="detail ps-2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 foot-services">
                        <h4>Top Category</h4>

                        <ul>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Web Analytics</a></li>
                            <li><a href="">Page Monitering</a></li>
                            <li><a href="">Page Optimization</a></li>
                            <li><a href="">Target Statergy</a></li>
                            <li><a href="">Email Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 foot-news">
                        <h4>News Letter</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, vehicula eget eros. </p>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text bg-danger" id="basic-addon2"><i class="bi text-white bi-send"></i></span>
                            </div>
                        </div>

                        <ul>
                            <li><i class="bi bi-facebook"></i></li>
                            <li><i class="bi bi-twitter"></i></li>
                            <li><i class="bi bi-instagram"></i></li>
                            <li><i class="bi bi-linkedin"></i></li>
                            <li><i class="bi bi-pinterest"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2022 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps.com</a>

            <span>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href="https://in.pinterest.com/prabnr/pins/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://twitter.com/prabinraja89"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/freewebtemplatesbysmarteye"><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>

</bod>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="plugins/testimonial/js/owl.carousel.min.js"></script>


</html>
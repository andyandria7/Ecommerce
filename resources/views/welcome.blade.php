@extends('layouts.master')
@section('title')
    accueil
@endsection
@section('content')
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">

        <!-- Indicators -->
        <ol class="carousel-indicators">

            <li data-target="#bootstrap-touch-slider" data-slide-to=" 0 active"></li>

        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image:url({{ asset('assets/uploads/slider-1.png') }});">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Welcome to Ecommerce PHP</h1>
                            <p data-animation="animated fadeInDown">Shop Online for Latest Women Accessories</p>
                            <a href="" target="_blank" class="btn btn-primary"
                                data-animation="animated fadeInRight">View Women Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item active" style="background-image:url({{ asset('assets/uploads/slider-1.png') }});">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">50% Discount on All Products</h1>
                            <p data-animation="animated fadeInDown">Lorem ipsum dolor sit amet, an labores explicari qui, eu
                                nostrum copiosae argumentum has.</p>
                            <a href="" target="_blank" class="btn btn-primary"
                                data-animation="animated fadeInRight">View Women Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item " style="background-image:url(assets/uploads/slider-3.png);">
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text">
                            <h1 data-animation="animated ">24 Hours Customer Support</h1>
                            <p data-animation="animated ">Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum
                                copiosae argumentum has.</p>
                            <a href="" target="_blank" class="btn btn-primary" data-animation="animated ">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Slider Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>


    <div class="service bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-5.png" width="150px" alt=""></div>
                        <h3>Easy Returns</h3>
                        <p>
                            Return any item before 15 days!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-6.png" width="150px" alt=""></div>
                        <h3>Free Shipping</h3>
                        <p>
                            Enjoy free shipping inside US.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-7.png" width="150px" alt=""></div>
                        <h3>Fast Shipping</h3>
                        <p>
                            Items are shipped within 24 hours.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-8.png" width="150px" alt=""></div>
                        <h3>Satisfaction Guarantee</h3>
                        <p>
                            We guarantee you with our quality satisfaction.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-9.png" width="150px" alt=""></div>
                        <h3>Secure Checkout</h3>
                        <p>
                            Providing Secure Checkout Options for all
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="photo"><img src="assets/uploads/service-10.png" width="150px" alt=""></div>
                        <h3>Money Back Guarantee
                        </h3>
                        <p>
                            Offer money back guarantee on our products
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>FEATURED PRODUCTS </h2>
                        <h3>Our list on Top Featured Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">
                        @foreach ($products as $post)
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo"
                                        style="background-image:url({{ asset('assets/uploads/' . $post->p_featured_photo) }});">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="">{{ $post->p_name }}</a></h3>
                                    <h4>
                                        ${{ $post->p_current_price }}
                                        <del>
                                            ${{ $post->p_old_price }}
                                        </del>

                                    </h4>
                                    <div class="rating">
                                    </div>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            En rupture de stock
                                        </div>
                                    </div>
                                    <p><a href="{{ route('product', $post->p_id) }}"><i class="fa fa-shopping-cart"></i> Ajouter au
                                            panier</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="product bg-gray pt_70 pb_30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>titre du produit</h2>
                        <h3>sous titre du produit</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="product-carousel">
                        @foreach ($products as $post)
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo"
                                        style="background-image:url({{ asset('assets/uploads/' . $post->p_featured_photo) }});">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="">{{ $post->p_name }}</a></h3>
                                    <h4>
                                        ${{ $post->p_current_price }}
                                        <del>
                                            ${{ $post->p_old_price }}
                                        </del>

                                    </h4>
                                    <div class="rating">
                                    </div>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            En rupture de stock
                                        </div>
                                    </div>
                                    <p><a href="{{ route('product', $post->p_id) }}"><i class="fa fa-shopping-cart"></i> Ajouter au
                                        panier</a></p>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="product pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>titre</h2>
                        <h3>sous titre</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-carousel">
                        @foreach ($products as $post)
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo"
                                        style="background-image:url({{ asset('assets/uploads/' . $post->p_featured_photo) }});">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="">{{ $post->p_name }}</a></h3>
                                    <h4>
                                        ${{ $post->p_current_price }}
                                        <del>
                                            ${{ $post->p_old_price }}
                                        </del>

                                    </h4>
                                    <div class="rating">
                                    </div>
                                    <div class="out-of-stock">
                                        <div class="inner">
                                            En rupture de stock
                                        </div>
                                    </div>
                                    
                                    <p><a href="{{ route('product', $post->p_id) }}"><i class="fa fa-shopping-cart"></i> Ajouter au
                                        panier</a></p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection

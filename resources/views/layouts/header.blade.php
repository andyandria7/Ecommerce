<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="left">
                        <ul>
                            <li><i class="fa fa-phone"></i> +001 10 101 0010 </li>
                            <li><i class="fa fa-envelope-o"></i> support@ecommercephp.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="right">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row inner">
                <div class="col-md-4 logo">
                    <a href="index.php"><img src="{{ asset('assets/uploads/logo.png') }}" alt="logo image"></a>
                </div>
                <div class="col-md-5 right">
                    <ul>
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>login </a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Register</a></li>

                        <li><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i>Cart  ($0.00
                        )</a></li>
                    </ul>
                </div>
                <div class="col-md-3 search-area">
                    <form class="navbar-form navbar-left" role="search" action="search-result.php" method="get">
                        
                        <div class="form-group">
                            <input type="text" class="form-control search-top" placeholder="Search Product" name="search_text">
                        </div>
                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pl_0 pr_0">
                    <div class="menu-container">
                        <div class="menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                @foreach ($category as $cat)
                                <li><a href="">{{ $cat->tcat_name }}</a>
                                    <ul>
                                        @foreach ($cat->mid_category as $categorie)
                                        <li><a href="">{{ $categorie->mcat_name }}</a>
                                            <ul>
                                                @foreach ($categorie->endCategory as $mcat)
                                                    <li><a href="">{{ $mcat->ecat_name }}</a></li>
                                                    
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </li>
                                    
                                @endforeach
                                    
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
    
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@extends('layouts.master')
@section('title')
    Product
@endsection
@section('content')
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb mb_30">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li>></li>
                            <li><a href=""></a></li>
                            <li>></li>
                            <li><a href=""></a></li>
                            <li>></li>
                            <li><a href=""></a></li>
                            <li>></li>
                            <li></li>
                        </ul>
                    </div>

                    <div class="product">
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="prod-slider">
                                    <li
                                        style="background-image: url({{ asset('assets/uploads/' . $product->p_featured_photo) }});">
                                        <a class="popup" href="assets/uploads/"></a>
                                    </li>
                                    @foreach ($product->product_photo as $photo)

                                    <li style="background-image: url({{ asset('assets/uploads/product_photos/' . $photo->photo) }});">
                                        <a class="popup" href="{{ asset('assets/uploads/product_photos/' . $photo->photo) }}"></a>
                                    </li>
                                    @endforeach

                                </ul>
                                <div id="prod-pager">
                                    {{-- <div class="prod-pager-thumb"
                                    style="background-image: url({{ asset('assets/uploads/' . $product->p_featured_photo) }}">
                                </div> --}}
                                <a data-slide-index="0" href="">
                                    <div class="prod-pager-thumb"
                                        style="background-image: url({{ asset('assets/uploads/' . $product->p_featured_photo) }}">
                                    </div>
                                </a>
                                    @foreach ($product->product_photo as $photo)
                                        <a data-slide-index="0" href="">
                                            <div class="prod-pager-thumb"
                                                style="background-image: url({{ asset('assets/uploads/product_photos/' . $photo->photo) }}">
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="p-title">
                                    <h2>{{ $product->p_name }}</h2>
                                </div>
                                <div class="p-review">
                                    
                                </div>
                                <div class="p-short-des">
                                    <p>
                                        <div class="rating">
                                            {!! $product->p_short_description !!}
                                        </div>
                                    </p>
                                </div>
                                <form action="" method="post">
                                    <div class="p-quantity">
                                        <div class="row">
                                            <div class="col-md-12 mb_20">
                                                Select Size <br>
                                                <select name="size_id" class="form-control select2" style="width:auto;" >
                                                    <option value="27">One Size for All</option>
                                                </select>
                                            </div>

                                        
                                            <div class="col-md-12">
                                                Select Color <br>
                                                <select name="color_id" class="form-control select2" style="width:auto;" >
                                                    <option value="27">Black</option>

                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="p-price">
                                        <span style="font-size:14px;"></span><br>
                                        <span>
                                            <del>${{ $product->p_old_price }}</del>
                                            ${{ $product->p_current_price }}
                                        </span>
                                    </div>
                                    <input type="hidden" name="p_current_price" value="">
                                    <input type="hidden" name="p_name" value="">
                                    <input type="hidden" name="p_featured_photo" value="">
                                    <div class="p-quantity">
                                        Quality
                                        <br>
                                        <input type="number" class="input-text qty" step="1" min="1"
                                            max="" name="p_qty" value="1" title="Qty" size="4"
                                            pattern="[0-9]*" inputmode="numeric">
                                    </div>
                                    <div class="btn-cart btn-cart1">
                                        <input type="submit" value="Add card" name="form_add_to_cart">
                                    </div>
                                </form>
                                <div class="share">
                                    <br>
                                    <div class="sharethis-inline-share-buttons"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#description"
                                            aria-controls="description" role="tab" data-toggle="tab">Product Desciptioin</a></li>
                                    <li role="presentation"><a href="#feature" aria-controls="feature" role="tab"
                                            data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#condition" aria-controls="condition" role="tab"
                                            data-toggle="tab">Conditions</a></li>
                                    <li role="presentation"><a href="#return_policy" aria-controls="return_policy"
                                            role="tab" data-toggle="tab">Return Policy</a></li>
                                    <!-- <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab"></a></li> -->
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description"
                                        style="margin-top: -30px;">
                                        <p>
                                            {!! $product->p_description !!}
                                            
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="feature" style="margin-top: -30px;">
                                        <p>
                                            {!! $product->p_feature !!}
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="condition" style="margin-top: -30px;">
                                        <p>
                                            {!! $product->p_condition !!}

                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="return_policy" style="margin-top: -30px;">
                                        <p>
                                            {!! $product->p_return_policy !!}

                                        </p>
                                    </div>
                                    {{-- <div role="tabpanel" class="tab-pane" id="review" style="margin-top: -30px;">

                                        <div class="review-form">

                                            <h2>xqqx</h2>

                                            <div class="mb_10"><b><u>qxqxq</u></b></div>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="width:170px;">xqxqxq</th>
                                                    <td>xqx</td>
                                                </tr>
                                                <tr>
                                                    <th>xqqqx</th>
                                                    <td>xqxqx</td>
                                                </tr>
                                                <tr>
                                                    <th>xqqxxq</th>
                                                    <td>
                                                        <div class="rating">
                                                            xqx
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                            <h2>aaaa</h2>

                                            <form action="" method="post">
                                                <div class="rating-section">
                                                    <input type="radio" name="rating" class="rating" value="1"
                                                        checked>
                                                    <input type="radio" name="rating" class="rating" value="2"
                                                        checked>
                                                    <input type="radio" name="rating" class="rating" value="3"
                                                        checked>
                                                    <input type="radio" name="rating" class="rating" value="4"
                                                        checked>
                                                    <input type="radio" name="rating" class="rating" value="5"
                                                        checked>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="comment" class="form-control" cols="30" rows="10"
                                                        placeholder="Write your comment (optional)" style="height:100px;"></textarea>
                                                </div>
                                                <input type="submit" class="btn btn-default" name="form_review"
                                                    value="">
                                            </form>
                                            <span style="color:red;">xqxq</span>



                                        </div>

                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="product bg-gray pt_70 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>RELATED PRODUCTS</h2>
                        <h3>See all the related products from below</h3>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
    
                    <div class="product-carousel">
    
                        
                            <div class="item">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/q);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id="></a></h3>
                                    <h4>
                                        <del>
                                            q
                                        </del>
                                    </h4>
                                    <div class="rating">
                                        $
                                    </div>
                                    <p><a href="product.php?id=">
                                        </a></p>
                                </div>
                            </div>
                            <?php
                        ?>
    
                    </div>
    
                </div>
            </div> --}}
        </div>
    </div>
@endsection

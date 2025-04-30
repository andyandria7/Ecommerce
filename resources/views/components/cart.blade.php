@extends('layouts.master')
@section('title')
    Cart
@endsection
@section('content')
<div class="page-banner" style="background-image: url(assets/uploads/banner.jpg)">
    <div class="overlay"></div>
    <div class="page-banner-inner">
        <h1>Cart</h1>
    </div>
</div>

<div class="page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <form action="" method="post">
				<div class="cart">
                    <table class="table table-responsive table-hover table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Qantity</th>
                            <th class="text-right">Total</th>
                            <th class="text-center" style="width: 100px;">Action</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="assets/uploads/banner.jpg" alt="">
                            </td>
                            <td>Test</td>
                            <td>hbf</td>
                            <td>456</td>
                            <td>fdg</td>
                            <td>
                                <input type="hidden" name="product_id[]" value="">
                                <input type="hidden" name="product_name[]" value="">
                                <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity[]" value="" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                            </td>
                            <td class="text-right">
                            </td>
                            <td class="text-center">
                                {{-- <a onclick="return confirmDelete();" href="cart-item-delete.php?id=<?php echo $arr_cart_p_id[$i]; ?>&size=<?php echo $arr_cart_size_id[$i]; ?>&color=<?php echo $arr_cart_color_id[$i]; ?>" class="trash"><i class="fa fa-trash" style="color:red;"></i></a> --}}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="7" class="total-text">Total</th>
                            <th class="total-amount"></th>
                            <th>dsgsdg</th>
                        </tr>
                    </table> 
                </div>

                <div class="cart-buttons">
                    <ul>
                        {{-- <li><input type="submit" value="" class="btn btn-primary" name="form1"></li> --}}
                        <li><a href="index.php" class="btn btn-primary">Update Cart</a></li>
                        <li><a href="index.php" class="btn btn-primary">Continue the shopping</a></li>
                        <li><a href="checkout.php" class="btn btn-primary">Procced to Checkout</a></li>
                    </ul>
                </div>
                </form>
			</div>
		</div>
	</div>
</div>

@endsection
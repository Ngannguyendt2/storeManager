<!DOCTYPE html>
<html lang="zxx">
@include('layouts.head')
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
@include('layouts.header')
<!-- Header section end -->


<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp">
                        <table>

                            <thead>
                            <tr>
                                <th class="product-th">Product</th>
                                <th class="quy-th">Quantity</th>
                                <th class="total-th">Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(\Illuminate\Support\Facades\Session::has('cart'))
                                @foreach($cart->items as $product)
                                    <tr>
                                        <td class="product-col">
                                            <img src="{{asset('storage/'.$product['item']->image)}}" alt="">
                                            <div class="pc-title">
                                                <h4>{{$product['item']->name}}</h4>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <input type="number" style="text-align: center"
                                                       value="{{$product['qty']}}">
                                            </div>
                                        </td>
                                        <td class="total-col"><h4>{{number_format($product['price'])}} VND</h4></td>
                                        <td><a href="{{route('shop.destroy',['id'=>$product['item']->id])}}"
                                               class="btn btn-danger"
                                               onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <div class="total-cost">
                                <h6>Total <span>{{$cart->totalPrice}}</span></h6>
                            </div>
                            @else
                                <tr>
                                    <td colspan="4" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                                </tr>
                            @endif
                        </table>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Enter promo code">
                    <button>Submit</button>
                </form>
                <a href="" class="site-btn">Proceed to checkout</a>
                <a href="{{route('products.home')}}" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->


<!-- Footer section -->
@include('layouts.footer')
<!-- Footer section end -->


<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

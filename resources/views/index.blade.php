<!DOCTYPE html>
<html lang="zxx">
<!-- head tad -->
@include('layouts.head')
<!-- end head-->
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
@include('layouts.header')
<!-- Header section end -->

<!-- Hero section -->
@include('layouts.slogan')
<!-- Hero section end -->

<!-- Features section -->
@include('layouts.features')
<!-- Features section end -->

<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>LATEST PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <div class="product-item">
                <div class="pi-pic">
                    <img src="img/product/1.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <div class="tag-new">New</div>
                    <img src="img/product/2.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Black and White Stripes Dress</p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="img/product/3.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="img/product/4.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="img/product/6.jpg" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>$35,00</h6>
                    <p>Flamboyant Pink Top </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- letest product section end -->

<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>BROWSE TOP SELLING PRODUCTS</h2>
        </div>
        <ul class="product-filter-menu">
            <li><a href="#">IPhone</a></li>
            <li><a href="#">SamSung</a></li>
            <li><a href="#">Oppo</a></li>
            <li><a href="#">Nokia</a></li>
            <li><a href="#">Vivo</a></li>
            <li><a href="#">Xiaomi</a></li>
            <li><a href="#">Huawei</a></li>
            <li><a href="#">BlackBerry</a></li>
        </ul>
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">

                        <div class="pi-pic">
                            <img src="{{asset('storage/'.$product->image)}}" alt="" style="width: 250px">
                            <div class="pi-links">
                                <a href="{{route('shop.addToCart',['id'=>$product->id])}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>{{number_format($product->price)}} VND</h6>
                            <p>{{$product->name}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">LOAD MORE</button>
        </div>
    </div>
</section>
<!-- Product filter section end -->
<!-- Banner section -->

<!-- Banner section end  -->

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

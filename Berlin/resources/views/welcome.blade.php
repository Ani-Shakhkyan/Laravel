@extends('layouts.app')

@section('content')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>Best quality
                            pillow</h1>
                        <p>Seamlessly empower fully researched
                            growth strategies and interoperable internal</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_img">
        <img src="  {{ ('img/banner.png')}}  " alt="#" class="img-fluid">
        <img src="  {{ ('img/banner_pattern.png ')}}  " alt="#" class="pattern_img img-fluid">
    </div>
</section>
<!-- banner part start-->

<!-- product list start-->
<section class="single_product_list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="  {{ (' img/single_product_1.png')}} " class="img-fluid" alt="#">
                                <img src="  {{ (' img/product_overlay.png')}} " alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $10</h5>
                                <h2> <a href="single-product.html">Printed memory foam
                                        brief modern throw
                                        pillow case</a> </h2>
                                <a href="product_list.html" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="  {{ (' img/single_product_2.png')}} " class="img-fluid" alt="#">
                                <img src="  {{ ('img/product_overlay.png')}}  " alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $10</h5>
                                <h2> <a href="single-product.html">Printed memory foam
                                        brief modern throw
                                        pillow case</a> </h2>
                                <a href="product_list.html" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_product_iner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_img">
                                <img src="  {{ ('img/single_product_3.png')}} " class="img-fluid" alt="#">
                                <img src="  {{ ('img/product_overlay.png')}}" alt="#" class="product_overlay img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_product_content">
                                <h5>Started from $10</h5>
                                <h2> <a href="single-product.html">Printed memory foam
                                        brief modern throw
                                        pillow case</a> </h2>
                                <a href="product_list.html" class="btn_3">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list end-->

<!-- trending item start-->
<section class="trending_items">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Trending Items</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <div class="single_product_item_thumb">
                        <img src=" {{ ('img/tranding_item/tranding_item_1.png')}}" class="img-fluid">
                    </div>
                    <h3> <a href="single-product.html">Cervical pillow for airplane
                            car office nap pillow</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src=" {{(' img/tranding_item/tranding_item_2.png')}}" alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src=" {{ ('img/tranding_item/tranding_item_3.png')}} " alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src=" {{ ('img/tranding_item/tranding_item_4.png')}} " alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">Cervical pillow for airplane
                            car office nap pillow</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src=" {{('img/tranding_item/tranding_item_5.png')}} " alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">Foam filling cotton slow rebound pillows</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_product_item">
                    <img src="{{(' img/tranding_item/tranding_item_6.png')}} " alt="#" class="img-fluid">
                    <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                    <p>From $5</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- trending item end-->



<script src=" {{ asset ('js/js/jquery-1.12.1.min.js') }} "></script>
<!-- popper js -->
<script src=" {{ asset ('js/js/popper.min.js') }} "></script>
<!-- bootstra {{ asset ('js/js/jquery-1.12.1.min.js') }} p js -->
<script src=" {{ asset ('js/js/bootstrap.min.js') }} "></script>
<!-- easing j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
<script src=" {{ asset ('js/js/jquery.magnific-popup.js') }} "></script>
<!-- swiper j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
<script src=" {{ asset ('js/js/swiper.min.js') }} "></script>
<!-- swiper j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
<script src=" {{ asset ('js/js/mixitup.min.js') }} "></script>
<!-- particle {{ asset ('js/js/jquery-1.12.1.min.js') }} s js -->
<script src=" {{ asset ('js/js/owl.carousel.min.js') }} "></script>
<script src=" {{ asset ('js/js/jquery.nice-select.min.js') }} "></script>
<!-- slick js {{ asset ('js/js/jquery-1.12.1.min.js') }}  -->
<script src=" {{ asset ('js/js/slick.min.js') }} "></script>
<script src=" {{ asset ('js/js/jquery.counterup.min.js') }} "></script>
<script src=" {{ asset ('js/js/waypoints.min.js') }} "></script>
<script src=" {{ asset ('js/js/contact.js') }} "></script>
<script src=" {{ asset ('js/js/jquery.ajaxchimp.min.js') }} "></script>
<script src=" {{ asset ('js/js/jquery.form.js') }} "></script>
<script src=" {{ asset ('js/js/jquery.validate.min.js') }} "></script>
<script src=" {{ asset ('js/js/mail-script.js') }} "></script>
<!-- custom js -->
<script src=" {{ asset ('js/js/custom.js') }} "></script>
</body>
@include('footer')

</html>
@endsection
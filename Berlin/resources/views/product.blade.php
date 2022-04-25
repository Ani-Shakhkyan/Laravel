@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=" {{ asset ('css/linearicons.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/font-awesome.min.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/bootstrap.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/magnific-popup.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/nice-select.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/animate.min.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/owl.carousel.css')}} ">
<link rel="stylesheet" href=" {{ asset ('css/main.css')}} ">
<style>
    #image_dim {
        height: 4in;
        width: 5in;
    }

    article {
        width: 8in;
        height: 10in;
    }

    hr {
        height: 10px;
        color: #B08EAD;

    }
</style>

<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>Scroll to see our products!</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<?php foreach ($products as $key => $value) {
?>

    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" id="image_dim" src="{{ asset ('images') }}/<?php echo $value['image'] ?>" alt="">

                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><?php echo $value['name'] ?></h2>
                                </a>
                                <p><?php echo $value['description'] ?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> <?php echo $value['price'] ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
                </article>

                <hr>
            </div>
        </div>
    </section>
<?php } ?>


@include('footer')


<script src=" {{ asset ('')}} js/vendor/jquery-2.2.4.min.js"></script>
<script src=" {{ asset ('')}}  https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src=" {{ asset ('js/vendor/bootstrap.min.js')}} "></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src=" js/easing.min.js"></script>
<script src="  {{ asset ('js/hoverIntent.js')}}  "></script>
<script src="  {{ asset ('js/superfish.min.js')}}  "></script>
<script src="  {{ asset (' js/jquery.ajaxchimp.min.js')}} "></script>
<script src="  {{ asset (' js/jquery.magnific-popup.min.js')}} "></script>
<script src="  {{ asset ('js/owl.carousel.min.js')}}  "></script>
<script src="  {{ asset ('js/jquery.tabs.min.js')}}  "></script>
<script src="  {{ asset ('js/jquery.nice-select.min.js')}}  "></script>
<script src="  {{ asset (' js/waypoints.min.js')}} "></script>
<script src="  {{ asset ('js/mail-script.js')}}  "></script>
<script src="  {{ asset (' js/main.js')}} "></script>

</body>

</html>
@endsection
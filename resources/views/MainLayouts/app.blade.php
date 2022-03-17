<!doctype html>
<html lang="zxx">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="/assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="/assets/css/animate.min.css">

<link rel="stylesheet" href="/assets/css/boxicons.min.css">

<link rel="stylesheet" href="/assets/css/flaticon.css">

<link rel="stylesheet" href="/assets/css/meanmenu.min.css">

<link rel="stylesheet" href="/assets/css/nice-select.min.css">

<link rel="stylesheet" href="/assets/css/odometer.min.css">

<link rel="stylesheet" href="/assets/css/style.css">

<link rel="stylesheet" href="/assets/css/responsive.css">

<link rel="icon" type="image/png" href="/assets/img/favicon.png">
<style type="text/css">
	.hovers {
    background-color: #FFBD59 !important;
}

.hovers:hover {
    background-color: #fff !important;
    color: #000 !important;
}

.hovers:hover a{
    color: #000 !important;
}

	.links {
    color: #fff !important;
}

.links:hover {
   
    color: #000 !important;
}
</style>

<title>{{ config('app.name', 'GILBRALTAR') }}</title>
</head>
<body>

<div class="loader-wrapper">
<div class="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>


@include('MainInc.header')
  @yield('content')
@include('MainInc.footer')




<div class="go-top">
<i class='bx bx-chevrons-up'></i>
<i class='bx bx-chevrons-up'></i>
</div>


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/jquery.min.js"></script>

<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/js/meanmenu.min.js"></script>

<script src="/assets/js/owl.carousel.min.js"></script>

<script src="/assets/js/carousel-thumbs.min.js"></script>

<script src="/assets/js/wow.min.js"></script>

<script src="/assets/js/nice-select.min.js"></script>

<script src="/assets/js/magnific-popup.min.js"></script>

<script src="/assets/js/ofi.min.js"></script>

<script src="/assets/js/jarallax.min.js"></script>

<script src="/assets/js/appear.min.js"></script>

<script src="/assets/js/odometer.min.js"></script>

<script src="/assets/js/form-validator.min.js"></script>

<script src="/assets/js/contact-form-script.js"></script>

<script src="/assets/js/ajaxchimp.min.js"></script>

<script src="/assets/js/custom.js"></script>
</body>


</html>
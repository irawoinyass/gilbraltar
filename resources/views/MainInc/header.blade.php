<header class="header-area fixed-top">
<div class="top-header-area" style="background: #FF8C00;">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-8">
<ul class="header-content-left">
<li>
<a href="javascript::void(0);" style="color: #fff;">
<i class="bx bx-envelope" style="color: #fff;"></i>
Email: <span>info@gilbraltartechnologies.co.uk</span>
</a>
</li>
<li>
<a href="tel:Phone:+892-569-756" style="color: #fff;">
<i class="bx bx-phone-call" style="color: #fff;"></i>
<span>Hotline:</span>
Phone: +44 (0) 118 328 7118
</a>
</li>
</ul>
</div>
<div class="col-lg-6 col-sm-4">
<ul class="header-content-right" style="color: #fff;">
<li>
<a href="https://find-and-update.company-information.service.gov.uk/company/07758930" target="_blank">
<i class="bx bx-crown" style="color: #fff;"></i> 
</a>
</li>
<!-- <li>
<a href="#" target="_blank">
<i class="bx bxl-twitter" style="color: #fff;"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-linkedin" style="color: #fff;"></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class="bx bxl-instagram" style="color: #fff;"></i>
</a>
</li> -->
</ul>
</div>
</div>
</div>
</div>

<div class="nav-area">
<div class="navbar-area">

<div class="mobile-nav">
<a href="/" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
</div>

<div class="main-nav">
<nav class="navbar navbar-expand-md">
<div class="container-fluid">
<a class="navbar-brand" href="/">
<img src="assets/img/logo.png" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu">
<ul class="navbar-nav m-auto">



@if($title == 'Home')
<li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
@else
<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
@endif


@if($title == 'About Us')
<li class="nav-item"><a href="{{route('main.aboutus')}}" class="nav-link active">About Us</a></li>

@else
<li class="nav-item"><a href="{{route('main.aboutus')}}" class="nav-link">About Us</a></li>

@endif


<li class="nav-item">
<a href="#" class="nav-link">
Services
<i class="bx bx-chevron-right"></i>
</a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="{{route('main.IT')}}" class="nav-link">IT Support and Service Management</a>
</li>
<li class="nav-item">
<a href="{{route('main.network')}}" class="nav-link">Network Engineering</a>
</li>
<li class="nav-item">
<a href="{{route('main.consult')}}" class="nav-link">Business Consulting</a>
</li>
<li class="nav-item">
<a href="{{route('main.operations')}}" class="nav-link">Cybersecurity Operations and Support</a>
</li>
<li class="nav-item">
<a href="{{route('main.cloud')}}" class="nav-link">Cloud Solutions</a>
</li>

</ul>
</li>


@if($title == 'Careers')
<li class="nav-item"><a href="{{route('main.careers')}}" class="nav-link active">Careers</a></li>

@else
<li class="nav-item"><a href="{{route('main.careers')}}" class="nav-link">Careers</a></li>

@endif

@if($title == 'Contact Us')
<li class="nav-item"><a href="{{route('main.contactus')}}" class="nav-link active">Contact Us</a></li>

@else
<li class="nav-item"><a href="{{route('main.contactus')}}" class="nav-link">Contact Us</a></li>

@endif




</ul>
<!-- <div class="others-option">
<div class="get-quote">
<a href="#" class="default-btn">
Get A Quote
</a>
</div>
</div> -->

</div>
</div>
</nav>
</div>
</div>
</div>

</header>

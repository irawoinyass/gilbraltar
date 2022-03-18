@extends('MainLayouts.app')
@section('content')

<section class="hero-slider-area">
<div class="hero-slider-wrap owl-carousel owl-theme">

	@foreach($slides as $slide)

<div class="slider-item" style="background-image :url({{$slide->image}})">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-9">
<div class="slider-text one">
	<div style="background: #000;">
<h1>{{$slide->title}}</h1>
<p>{{$slide->desc}}</p>
</div>
<div class="slider-btn">
@if($slide->button_url != '')

<a class="default-btn active" href="{{$slide->button_url}}">
{{$slide->button_name}}
</a>
@endif

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

	@endforeach

</div>
</section>





<!-- <div class="partner-area ptb-100">
<div class="container">
<div class="row">
<div class="partner-wrap owl-carousel owl-theme">
<div class="partner-item">
<img src="/assets/img/partner-logo/1.png" alt="Image">
<a class="partner-overly" href="#">
<img src="/assets/img/partner-logo/6.png" alt="Image">
</a>
</div>
<div class="partner-item">
<img src="/assets/img/partner-logo/2.png" alt="Image">
<a class="partner-overly" href="#">
<img src="/assets/img/partner-logo/7.png" alt="Image">
</a>
</div>
<div class="partner-item">
<img src="/assets/img/partner-logo/3.png" alt="Image">
<a class="partner-overly" href="#">
<img src="/assets/img/partner-logo/8.png" alt="Image">
</a>
</div>
<div class="partner-item">
<img src="/assets/img/partner-logo/4.png" alt="Image">
<a class="partner-overly" href="#">
<img src="/assets/img/partner-logo/9.png" alt="Image">
</a>
</div>
<div class="partner-item">
<img src="/assets/img/partner-logo/5.png" alt="Image">
<a class="partner-overly" href="#">
<img src="/assets/img/partner-logo/10.png" alt="Image">
</a>
</div>
</div>
</div>
</div>
</div> -->







<section class="performance-area bg-none pb-70" style="margin-top: 50px;">
<div class="container">
<!-- <div class="section-title">
<h2 style="color: #FF4500;">High-Performance Solutions</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quam neque quibusdam corrupti aspernatur corporis alias nisi dolorum expedita veritatis voluptates minima.</p>
</div> -->
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="single-security hovers">
<i class="flaticon-website" style="background: #FF4500; color: #fff;"></i>
<h3>IT Support and Service Management</h3>
<p>We understand that the IT infrastructure of a business is at the core of your efficiency so we take the time to understand your exact requirements and tailor a solution around that.</p>
<a href="{{route('main.IT')}}" class="read-more links">
Read More
</a>
<img src="/assets/img/shape/6.png" alt="Image">
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-security hovers">
<i class="flaticon-profile" style="background: #FF4500; color: #fff;"></i>
<h3>Cloud Solutions</h3>
<p>Whether you are at the beginning of your cloud migration journey or an existing cloud consumer looking to optimise and automate your cloud security, Gilbraltar Cloud Security team can help.</p>
<a href="{{route('main.cloud')}}" class="read-more links">
Read More
</a>
<img src="/assets/img/shape/6.png" alt="Image">
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-security hovers">
<i class="flaticon-content" style="background: #FF4500; color: #fff;"></i>
<h3>Network Engineering</h3>
<p>The modern world runs on vast connected computer networks built, configured and maintained by network engineers. These behind-the-scenes tech experts play a critical part ....</p>
<a href="#" class="read-more links">
Read More
</a>
<img src="/assets/img/shape/6.png" alt="Image">
</div>
</div>



</div>
</div>
</section>











<section class="transform-area-five pb-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="transform-img">
<img src="assets/img/we.jpg" alt="Image">
</div>
</div>
<div class="col-lg-6">
<div class="transform-content  transform-content-five">
<h2 style="color: #000;">What We Exist For</h2>
<p>We believe it is good to be different, which is why the service to our clients is second-to-none. Our business efficient and pro-active approach to IT solutions, support and managed services sets us apart from the rest.</p>
<p>Our focus is to simplify the use of technology for businesses of different sizes, and to provide expert services to our esteem clients.</p>
<p>We are a team of highly technical and strategic professionals with experience cutting across several industries and Big4 firms</p>



</div>
</div>
</div>
</div>
</section>








<section class="choose-area-four ptb-100" style="margin-bottom: 90px;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="choose-img">
<img src="assets/img/manual-img.png" alt="Image">
</div>
</div>
<div class="col-lg-6">
<div class="choose-wrap p-0">
<h2>Why Our Clients Choose Us</h2>
<p>A deep understanding of the latest technologies, together with a comprehensive in-house skill set ensures all clients receive the best service.  No question is too big, or too small. </p>
<ul class="mt-30">
<li>
<i class="bx bx-check"></i>
Highest quality expertise
</li>
<li>
<i class="bx bx-check"></i>
Personal service
</li>
<li>
<i class="bx bx-check"></i>
Efficient outsource model
</li>
<li>
<i class="bx bx-check"></i>
24/7 monitoring
</li>
<li>
<i class="bx bx-check"></i>
A smooth transition of IT services
</li>
</ul>
<a href="/aboutus" class="default-btn active mt-30" style="color: #000;">
Know Details
</a>
</div>
</div>
</div>
</div>
</section>










<!-- <section class="client-area ptb-100" style="margin-bottom: 90px;">
<div class="container">
<div class="section-title white-title">
<h2>What Client’s Say About Us</h2>

</div>
<div class="client-wrap owl-carousel owl-theme">

	@foreach($testimony as $tes)

<div class="single-client">
<i class="quotes bx bxs-quote-alt-left"></i>
<p>{{$tes->comment}}</p>
<div class="client-img">
<img src="/assets/img/testimony/{{$tes->image}}" alt="Image" style="width: 100px;">
<h3>{{$tes->name}}</h3>
<span>{{$tes->job}}</span>
</div>
</div>

	@endforeach




</div>
</div>
</section> -->






@endsection
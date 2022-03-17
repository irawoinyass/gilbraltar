@extends('MainLayouts.app')
@section('content')


<div class="page-title-area bg-22">
<div class="container">
<div class="page-title-content">
<h2>Contact</h2>
<ul>
<li>
<a href="/">
Home
</a>
</li>
<li class="active" style="color: #FF8C00;">Contact</li>
</ul>
</div>
</div>
</div>




<section class="contact-info-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 p-0">
<div class="single-contact-info">
<i class="bx bx-location-plus"></i>
<h3>Office address</h3>
<p>12 Devonshire Park 12 Devonshire Park, Reading, England, RG2 7DX</p>
</br>
</div>
</div>
<div class="col-lg-3 p-0">
<div class="single-contact-info">
<i class="bx bx-message"></i>
<h3>Email Us</h3>
<p><a href="mailto:info@gilbraltartechnologies.co.uk">info@gilbraltartechnologies.co.uk</a></p>
</br></br>
<p></p>
</div>
</div>
<div class="col-lg-3 p-0">
<div class="single-contact-info">
<i class="bx bx-phone"></i>
<h3>Call Us</h3>
<p><a href="tel:+44 (0) 118 328 7118">+44 (0) 118 328 7118</a></p>
</br></br>
<p></p>

</div>
</div>
<div class="col-lg-3 p-0">
<div class="single-contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.4022716759087!2d-0.9471235846947152!3d51.432405824005414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48769b54b32d88e9%3A0xe1ef14f68f149708!2s12%20Devonshire%20Park%2C%20Reading%20RG2%207DX%2C%20UK!5e0!3m2!1sen!2sng!4v1647539714460!5m2!1sen!2sng" style="border:0;"></iframe>
</div>
</div>
</div>
</div>
</section>






<!-- <section class="faq-contact-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="contact-wrap">
<div class="contact-form">
<div class="section-title">

<h2>Contact Us</h2>

</div>
<form id="contactForm">
	<div class="alert alert-success" id="alert_success" style="display: none;"></div>
              <div class="alert alert-danger" id="alert_danger" style="display: none;"></div>
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">

</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">

</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="phone_no" id="phone_no" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">

</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">

</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="msg" class="form-control" id="msg" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>

</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn page-btn" id="submit_btn">
Send Message
</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section> -->

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#submit_btn').click(function(event){

  event.preventDefault();


  var name = $('#name').val();
  var email = $('#email').val();
  var phone_no = $('#phone_no').val();
  var msg = $('#msg').val();
  var msg_subject = $('#msg_subject').val();



  if (name == '') {
    $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Name.');
//alert('oka');
  }else if (email == '') {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Email Address.');

  }else if (validateEmail(email) == false) {

$('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Valid Email Address.');


        }else if (phone_no == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Your Phone Number.');

  }else if (msg_subject == '') {

       $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Enter Mail Subject.');

  }else if (msg == '') {

   $('#alert_danger').show();
$('#alert_danger').html('Please, Kindly Leave Your Comment.');
  }else{
$('#alert_danger').hide();
$('#alert_success').show();
$('#alert_success').html('<i>Processing......</i>');



    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('main.contact')}}",
        method:"POST",
        data:{msg_subject:msg_subject,name:name,phone_no:phone_no,email:email,msg:msg,_tokens:_tokens},
        success:function(data){

    //console.log(data);

  if (data == 'success') {

    $('#alert_success').show();
$('#alert_success').html('<i>Sent, You will get a relpy from us ASAP.</i>');
  $('#name').val('');
  $('#phone_no').val('');
$('#email').val('');
  $('#msg').val('');
  $('#msg_subject').val('');
  

    }else{

  $('#alert_danger').show();
$('#alert_danger').html(data);

    }


          }
        
         })



  }










});
	});
</script>


@endsection
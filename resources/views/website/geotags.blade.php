@extends('layouts.website_layout')
@section('title','Waste Management')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Geotag Details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center" style="text-align: justify;">

        <!-- About Us Thumbnail -->
        <div class="col-12 col-lg-6">
          <div class="about-us-thumbnail">
            <img src="{{asset('img/geotag.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
          </div>
        </div>

        <!-- About Us Content -->
        <div class="col-12 col-lg-6">
          <div class="about-us-content content">
            <!-- Section Heading -->
            <div class="section-heading mb-15">
              <p>Tree Details</p>
              <h2> Tree Name : <span>Mango Tree</span></h2>
              <img src="{{asset('img/core-img/decor.png')}}" alt="">
            </div>
            <p>Mango trees are deep-rooted, symmetrical evergreens that attain heights of 90 feet and widths of 80 feet. Mango trees have simple alternate lanceolate leaves that are 12 to 16 inches in length and yellow-green, purple, or copper in color when young. Mature leaves are leathery, glossy, and deep green in color.</p>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### FAQ Area Start ##### -->
  <section class="famie-faq-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <h2><span>Tree Plantation Details</span></h2>
            <img src="{{ asset('img/core-img/decor2.png') }}" alt="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tree Plantation Drive Details
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="collapseOne" class="accordion-content collapse show">
                <p class="ml-30">This tree is planted in tree plantation drive 2024.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Tree Plantation Site Details
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseTwo" class="accordion-content collapse">
                <p class="ml-30">Tree plantation site address is nilaje</p>
              </div>
            </div>
            
          </div>
            </br>  
          <div class="col-lg-12">
          <div class="contact-maps mb-50">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6187253792546!2d73.0867511144799!3d19.21184838701009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79589cd02f93d%3A0x1b809ed224efb4be!2sVivekanand+Seva+Mandal!5e0!3m2!1sen!2sin!4v1562511482723!5m2!1sen!2sin" allowfullscreen></iframe>
          </div>
        </div>  

        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->
@endsection
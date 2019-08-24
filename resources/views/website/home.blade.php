@extends('layouts.website_layout')
@push('styles')
<style type="text/css">
	.sponsor-area {
		margin: auto;
		text-align: center;
	}
	.sponsor-area span{
		font-family: "Times New Roman", Times, serif;
		font-size: 36px;
		letter-spacing: 2px;
		word-spacing: 2px;
		color: #FF5900;
		font-weight: 700;
		text-decoration: none;
		text-transform: none;
	}
	.sponsor-area p{
		font-size: 20px;
	}
</style>
@endpush
@section('title','Home')
@section('page_content')
  <!-- ##### Hero Area Start ##### -->
  <div class="hero-area">
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/slide1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInUp" data-delay="200ms">Installation of information booth</h2>
                <p data-animation="fadeInUp" data-delay="400ms">The Information Booth provides information about the projects and segregation of waste, waste management (household and society level), collection of related information from the people and all other help needed by the residents.</p>
                <!-- <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact Us</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Welcome Slides -->
      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/slide2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">Plantation Drive</h2>
                <p data-animation="fadeInDown" data-delay="400ms">As the name itself suggests, team SDA try and plan to build green belts within the City which will act as lungs for the City. The team has been conducting a plantation drive every year within the city and the nearby cities.</p>
                <!-- <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact Us</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/slide2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">Cleanliness Drive</h2>
                <p data-animation="fadeInDown" data-delay="400ms">As a step towards creating awareness and engaging the resident of the city, the team focused on cleaning the dirtiest and important roads of Dombivli.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/slide2.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-10">
              <div class="welcome-content">
                <h2 data-animation="fadeInDown" data-delay="200ms">Conducting seminars</h2>
                <p data-animation="fadeInDown" data-delay="400ms">A series of awareness program has been commenced by the Team since last year, which provides citizens of the City with basic tools and information on various aspects of environment, pollution, measures to control them</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area section-padding-40-0">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>About us</p>
              <h2><span>Let Us</span> Tell You Our Story</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
            <p>Dombivli, a developing city in the Thane District of Maharashtra state, is also known for its cultural values and active youth participation. Although the city is benchmarked for its values and cultural activities, it is also known as one of the dirtiest and second most polluted city (2016) of Maharashtra.</p>
            <p>Understanding the gravity of the problem of pollution and cleanliness in the city and taking the responsibility, few youths of Dombivli joined hands together to fight against it and make Dombivli a clean and Green place to live. Inspired by the "Seva" (service) philosophy propagated by the great warrior monk Swami Vivekananda (1863-1902), the team has commenced with the Swachha Dombivli Abhiyan (SDA) in April, 2018.  SDA was formed as step towards cleaning our area and preserving our mother nature ultimately benefitting the society.</p>
            <a href="{{ route('about') }}" class="btn famie-btn mt-30">Read More</a>
          </div>
        </div>

        <!-- Famie Video Play -->
        <div class="col-12 col-md-4">
          <!--  
          <div class="famie-video-play mb-100">
            <img src="website/img/bg-img/6.jpg" alt="">
            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
          -->
          <a class="twitter-timeline" data-height="450" data-chrome="nofooter" href="https://twitter.com/SwachhaDombivli">Tweets by SDA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### Services Area Start ##### -->
  <section class="services-area d-flex flex-wrap">
    <!-- Service Thumbnail -->
    <div class="services-thumbnail bg-img jarallax" style="background-image: url('img/bg-img/7.jpg');"></div>

    <!-- Service Content -->
    <div class="services-content section-padding-40-0 px-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Area</span> of Work</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 mb-50">
            <p>Understanding the problems and requirements of the city the team derived at the key cause of pollution – NO PROPER WASTE MANAGEMENT.  In order to create awareness among the people and provide different solutions to them the team focused on main two categories of waste management.</p>
          </div>

          <!-- Single Service Area -->
          <div class="col-12 col-lg-6">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <!-- Service Title -->
              <div class="service-title mb-3 d-flex align-items-center">
                <h5>Wet Waste Management</h5>
              </div>
              <p>Wet waste can be easily broken down and eliminated at its formation itself. Team SDA, strives to provide guidance through its seminars and individual consulting at different levels of the society. </p>
            </div>
          </div>

          <!-- Single Service Area -->
          <div class="col-12 col-lg-6">
            <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="300ms">
              <!-- Service Title -->
              <div class="service-title mb-3 d-flex align-items-center">
                <h5>Dry waste management</h5>
              </div>
              <p>The team conduct seminars that provide easy solutions for segregation of different types of dry household waste and its proper management. A key step towards dry waste manage is forming a chain of Scrap collector/ recyclers (Bhangarwala).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Services Area End ##### -->

  @include('includes.quotes')

<section class="bg-img section-padding-40-0">
	<div class="container">
		<div class="row">
			<div class="col-12 sponsor-area">
				<p>An initiative by</p><a href="http://vsmandal.org/" target="_new"><img src="{{asset('img/vsmlogo.png')}}" alt=""><span>Vivekanand Seva Mandal, Dombivli</span></a>
			</div>
		</div>
	</div>
</section>

  @include('includes.contact_form')
@endsection
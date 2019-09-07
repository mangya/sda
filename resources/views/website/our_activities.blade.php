@extends('layouts.website_layout')
@section('title','Our Activities')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Our Activities</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-12 col-lg-8">
          <div class="about-us-content content">
            <!-- Section Heading -->
            <div class="section-heading mb-15">
              <p>Our Activities</p>
              <h2><span>Our</span> Activities</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center mb-30">
        <div class="col-12 col-lg-6">
          <div class="about-us-thumbnail mb-15">
            <img src="{{asset('img/bg-img/seminars_collage.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="about-us-content content">
            <h4><strong>Awareness Program</strong></h4>
            <p>A series of awareness program has been commenced by the Team since last year, which provides citizens of the City with basic tools and information on various aspects of environment, pollution, measures to control them.  The program was conducted for the different groups of people.</p>
            <ul>
              <li>Seminar on Wet Waste and Dry Waste management</li>
              <li>Installation of information booths</li>
              <li>Conducting Cleanliness Drive</li>
            </ul>
          </div>
        </div>
      </div>


      <div class="row align-items-center">
        
        <div class="col-12 col-lg-6">
          <div class="about-us-content content">
            <h4><strong>Greening programme</strong></h4>
            <p>Understanding the seriousness of the problems arising out of the climate change and deforestation, the team has been trying to contribute towards the government’s National Mission for A Green India. The National Mission for A Green India or Green India Mission (GIM) is one of the eight missions India’s action plans to address the challenge of climate change. The mission recognises the influence forests on environmental amelioration through climate change mitigation, water security, food security, biodiversity conservation and livelihood security of forest living as well as dependent communities.</p>

            <p>SDA commenced its work in July, 2018 towards making the City green by involving the residence in a tree plantation drive along with creating awareness regarding the climate change.</p>

            <p><strong>Seedball Trainings:</strong> The team conducted seed ball training workshops for the resident of the society. Seed balls are a planting method that protects the seeds until the time is right for them to grow.</p>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="about-us-thumbnail mb-15">
            <img src="{{asset('img/bg-img/seedball_collage.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->
@endsection
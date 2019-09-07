@extends('layouts.website_layout')
@section('title','Role Model')
@push('styles')
<style type="text/css">
  @media only screen and (min-width: 767px) {
    .zig-zag {
      padding-top: 60px;
    }
  }
</style>
@endpush
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Role Model</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-8">
          <div class="about-us-content">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Sarvoday </span> Nagar</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">

        <div class="col-12 col-lg-12">
          <center><img src="{{asset('img/bg-img/sarvoday1.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt=""></center>
          <div class="about-us-content mb-30">
            <p>While conducting various activities around the city are, the team came across a group of people who not only showed their willingness to join the initiative but also enthusiastically started with the activities at their household level. Looking at their motivation and passion towards this initiative, the team came up with a plan to start a project at their locality “Sarvoday Nagar, Patharli road, Dombivli East”. The residents have initiated various programs within the premises. The key initiatives taken by 290 flats across 10 buildings in the complex of Sarvoday Nagar:</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Seminars:</strong> SDA conducted a cleanliness seminar for ten residential societies in Sarvoday Nagar complex, for which we received a positive response.</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/seminar.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/seedball_training.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Seed ball Training:</strong> SDA team organised a Seed ball Training for the society members. Seed balls are an easy way for planting plants as they eliminate labours of ploughing or digging holes for seeds and require no machinery. This was an attractive and effective measure to promote tree plantation in the area.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Tree plantation drive:</strong> The residents decided to conduct a plantation drive within Sarvoday Nagar complex premises inside “Bhau Kaka Udyan”.  Team received a pragmatic response for this drive. With no age limit, members from kids to senior citizen eagerly participated in this drive.</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/tree_plantation.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/throw_plastic.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Our way, not to throw plastic away :</strong>  the residents of the society every month collects all the household plastics and together deposit the plastic waste to the “Urja Foundation” drive conducted at the nearby areas. Apart from these the remaining waste – paper, E-waste, Metals and glass has bene consistently given to the nearest Bhangarwala.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Installation of Sanitary Napkins Disposal Units:</strong> Our city faces with a biggest and unspoken problem of disposal of this biohazard waste. Understanding this, the society members took initiative to install a sanitary napkin disposal unit in their premises. Although the installation has not yet placed, the members are in midst of finalising the required disposal units.</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/sanitory_disposal.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/door_to_door.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div>
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Door to door communication:</strong> The team also visited and provided guidance to individual flats within the complex. This proved to be an essential and effective step towards involving the residents in the cause</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Magazine :</strong>a powerful tool to influence the society, the residents of the society commenced with a monthly magazine discussing initiative taken, do’s and don’t and other valuable information.</p>
              </div>
              <div class="col-12 col-lg-6">
                <a href="{{ asset('img/bg-img/role-model/magzine_sarvoday.pdf') }}" download="magzine_sarvoday"><img src="{{asset('img/bg-img/role-model/magzine.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt=""></a>
              </div>
            </div>
            
            <div class="row">
              <div class="col-12 col-lg-6">
                <a href="{{ asset('img/bg-img/role-model/ganeshotsav_pamphlet.pdf') }}" download="ganeshotsav_pamphlet"><img src="{{asset('img/bg-img/role-model/ganeshotsav_pamphlet.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt=""></a>
              </div>
              <div class="col-12 col-lg-6">
                <p class="zig-zag"><strong>Promotion of Eco-friendly Ganesh Utsav:</strong> The residents proactively participated and promoted celebration of Eco-friendly Ganesh Utsav this year.</p>
              </div>
            </div>
            
            <div class="row">
              <div class="col-12 col-lg-12">
                <p><strong>Weekly meeting:</strong>The team and the residents of the society conducts weekly meetings wherein they discuss the activities conducted during the week, improvements required, ideas and proposed projects.</p>
              </div>
              <!-- <div class="col-12 col-lg-6">
                <img src="{{asset('img/bg-img/role-model/door_to_door.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
              </div> -->
            </div>
            <p>Team SDA, has consistently involved with the residents, provide guidance and support the residents’ initiative of Clean way of Living. The team and the residents combinedly are striving to work and create a sustainable and eco-friendly model “Zero waste Role Model” for the other societies.</p>
            
          </div>
        </div>

      </div>
    </div>
  </section>

  @endsection
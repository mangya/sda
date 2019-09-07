@extends('layouts.website_layout')
@section('title','Bhangarwala Association')
@push('styles')
<style type="text/css">
  .content img {
    float: left; padding: 20px
  }
  @media only screen and (min-width: 767px) {
    .content img {
      max-width: 50%;
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
          <li class="breadcrumb-item active" aria-current="page">Bhangarwala Association</li>
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
              <h2><span>Bhangarwala </span> Association</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-lg-12">
          <div class="about-us-content content mb-100">
            <img src="{{asset('img/bg-img/bhangarwala_sammelan.jpg')}}" class="img-responsive" style="" alt="">
            <p>We, humans, have a basic notion that unless we find a solution for environmental problems we will not achieve sustainable growth in the coming years. While conducting different activities relating to SDA, the team realised that an east and accessible solution is required for managing the segregated dry waste. An answer to this problem was an already existing facility which has been a catalyst in managing all types of household dry waste was nearby Bhangarwala.</p>
            <p>Bhangarwala is one-stop solution who accepts and channelises the waste properly to the recyclers.</p>
            <p>To create awareness regarding the importance of this channel and helping the society to acknowledge this convenient way of managing dry waste, the team organised a “Bhangarwala Samelan (association)” on 31 Mar, 2019. Around 32 bhangarwalas from Dombivli actively participated in the meet. They were felicitated with Shawls, a flower and Coconut as a token of respect. They were also provided with a board of SDA, stating their willingness to accept each and every type of dry waste – Plastic, Paper, Glass and E-waste. They were also introduced to different avenues available for recycling along with different established recyclers nearby. The Bhangarwalas not only demonstrated their readiness to accept all type of dry waste arising from the household, but also enthusiastically showcased their support to the cause and SDA. All of them have put the SDA provided to them outside the shops enabling people to identify and also promote usage of these channels towards proper waste management.</p>
            <p>The team also opened a communication channel wherein they also discussed their problems and restriction faced in the normal course of their business. The main problems conferred was regarding the space restrictions they have to accommodate large quantity of waste and consideration they received from the recycler – especially for Plastic, which stands very low. Considering all the factor put forward by them, the team is now trying to promote “No cost Plastic” – not expecting any return for the plastics deposited at the Bhangarwalas. This has now been followed by many resident of the city.</p>
            <p>Although such grand event was organised once, the team has not stopped. Timely meeting with the Bhangrawala are taken in order to understand their problems, guidance required and discuss innovative ideas for proper waste management.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  @endsection
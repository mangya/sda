@extends('layouts.website_layout')
@section('title','Success Stories')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('show.website')}}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <section class="about-us-area">
    <div class="container">
      
      <div class="row align-items-center">
        <div class="col-12 col-lg-8">
          <div class="about-us-content">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Success </span> Stories</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center" style="text-align: justify;">
       <div class="row"  style="margin-bottom: 5px;">
          <!-- Image -->
            <div class="col-12 col-lg-3">
              <div class="about-us-thumbnail">
                <img src="{{asset('website/img/success_stories/rsz_surekha-joshi.jpg')}}" alt="">
              </div>
            </div>

            <!-- Description -->
            <div class="col-12 col-lg-9">
              <div class="about-us-content content">
                <!-- Section Heading -->
                <div class="section-heading mb-15">
                  <h2><span>Mrs. Surekha Joshi</span></h2>
                  <img src="{{asset('img/core-img/decor.png')}}" alt="">
                </div>
                <b>“Initiative is doing the right thing without being told.”</b></p>
                <p>Amid increasing pollution in the city and society blaming the government authorities for it, a Samaritan was actively working towards cleaning our city. She is not only herself involved in the cleaning of the town but also inspired the neighbourhood, making them understand the importance of self-involvement rather than playing the blame game.</p> 
                <p><b>The team SDA (Swachha Dombivli Abhiyan) got an excellent opportunity to meet such a great partisan – Mrs Surekha Joshi [resident of MIDC, Dombivli East]. Her work truly justifies the aforementioned quote.</b></p>
                <a href="{{route('success_stories_mrs_surekha_joshi')}}"  target="_blank" class="text-primary">
                      Read More
                </a>
              </div>
              
            </div>
      
      </div>


      <div class="row" style="margin-bottom: 5px;">
          <!-- Image -->
            <div class="col-12 col-lg-3">
              <div class="about-us-thumbnail">
                <img src="{{asset('website/img/success_stories/rsz_surekha-joshi.jpg')}}" alt="">
              </div>
            </div>

            <!-- Description -->
            <div class="col-12 col-lg-9">
              <div class="about-us-content content">
                <!-- Section Heading -->
                <div class="section-heading mb-15">
                  <h2><span>Mrs. Aparna Bhalchandra Kavi</span></h2>
                  <img src="{{asset('img/core-img/decor.png')}}" alt="">
                </div>
                <p><b>This is a story of a young and charming housewife and her passion for cleanliness drive and her voyage from a housewife to an authorised Swacchata Doot of Kalyan Dombivli Municipal corporation (KDMC).</b> The voyage still continues. This story will be an inspiration to all the citizens and specially to the house wives and it has proven that though a housewife is on duty for 24 hrs 365 days taking care of house and her family members but simultaneously she can efficiently and effectively take care of her premises, her city.  Once she decides to do this then ‘sky is the limit’ for her.</p>
                <a href="{{route('success_stories_mrs_aparna_kavi')}}"  target="_blank" class="text-primary">
                      Read More
                </a>
              </div>
            </div>
      
      </div>




      </div>
    </div>
  </section>


  @endsection
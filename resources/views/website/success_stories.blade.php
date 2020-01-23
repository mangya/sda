@extends('layouts.website_layout')
@section('title','Success Stories')
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
          <li class="breadcrumb-item active" aria-current="page">Success Stories</li>
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
              <h2><span>Mrs. Surekha Joshi</span></h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">

        <div class="col-12 col-lg-12">
          <div class="about-us-content content mb-100" style="text-align: justify;">
            <img src="{{asset('website/img/success_stories/surekha-joshi.jpeg')}}" class="img-responsive" style="" alt="">
            <p><b>“Initiative is doing the right thing without being told.”</b></p>

            <p>Amid increasing pollution in the city and society blaming the government authorities for it, a Samaritan was actively working towards cleaning our city. She is not only herself involved in the cleaning of the town but also inspired the neighbourhood, making them understand the importance of self-involvement rather than playing the blame game.</p> 
            
            <p><b>The team SDA (Swachha Dombivli Abhiyan) got an excellent opportunity to meet such a great partisan – Mrs Surekha Joshi [resident of MIDC, Dombivli East].</b> Her work truly justifies the aforementioned quote.</p>
            
            <p>While interviewing her regarding her marvellous work, she told us that she was deeply concerned regarding the growing waste escalating height of the dumping grounds in the city, which has now started taking a toll over the quality of the life of the residents. As per her, this is not a war only the authorities can fight; it requires everyone’s involvement and responsibility towards the waste they create. She has a simple and clear rule “every individual should be responsible for the waste they create. Once they take the responsibility of their waste, they will find correct ways to discard it, and we will ourselves see the difference”.</p> 
            
            <p>She commenced her work through a simple change in her habit and the most straightforward way - Segregation of Waste. She has installed a DIY compost unit at her place for the wet waste. The wet waste unit has two compartments, wherein she uses both alternatively, whenever one of the units is full and rest for composting, she uses the other one. Everyday kitchen waste from her house is cleaned and chopped into small pieces which then go in the compost bins installed in her veranda. The compost once ready is a useful fertilizer for the green bushy plants in her house and the nearby places. It takes around two months for her unit to complete one set of composting. She has been using it for the past five years and has never seen it full or overflowing.</p>
            
            <p>The remarkable factor about Mrs Surekha is not only her approach towards her waste but her willingness and urge to spread this among the resident. She started taking seminars, provided guidance on proper segregation of waste at promoted to live “Zero Waste”- no waste should go out of your house and be a part of the landfills. Taking seminar in societies, approaching people with fun Cartoons denoting Do’s and Dont’s and continuous follow-up with the KDMC authorities gradually became her routine. <b>She has been successful in persuading people of her area [Sudarshan Nagar, Dombivli east] to follow this sustainable and eco-friendly way of living. Appreciating her community-minded work and enthusiasm, in the year 2017, KDMC has granted her a tile of “Swachchata Doot” [messenger of cleanliness]. She was also supported by her husband Mr Madhav Joshi, VP Nagari Abhivadan Nyas, Dombivli and ex-chairman Institute of Company Secretaries of India.</b></p> 
            
            <p>Swachha Dombivli Abhiyan salutes such public-spirited influencer for their commendable work. We welcome such people to join us and provide their valuable guidance in our mission towards cleaning our city.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  @endsection
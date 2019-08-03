@extends('layouts.website_layout')
@section('title','About us')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Content -->
        <div class="col-12 col-md-8">
          <div class="about-us-content content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Let Us</span> Tell You Our Story</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>


            <p>Dombivli, a developing city in the Thane District of Maharashtra state, is also known for its cultural values and active youth participation. The City is known for preserving their culture and celebrating it with enthusiasm. It is also one of the 98 cities shortlisted to be developed as a ‘Smart City’ under the Smart Cities Mission of the Government of India. The City has been growing at a tremendous rate, and therefore the problem arising out of it! Although the city is benchmarked for its values and cultural activities, it is also known as one of the dirtiest and second most polluted city (2016) of Maharashtra. </p>
            <p>Understanding the gravity of the of problem of pollution and cleanliness in the city and taking the responsibility of the mess created directly and indirectly, few youths of Dombivli joined hands together to fight against pollution and making Dombivli a clean and Green place to live. Inspired by the "Seva" (service) philosophy propagated by the great warrior monk Swami Vivekanand (1863-1902), the team has commenced with the Swachha Dombivli Abhiyan in April, 2018.  SDA was formed as step towards cleaning our area and preserving our mother nature ultimately benefitting the society. Starting from understanding the problems and focusing on the most dirtiest and important areas, the team initially commenced their activity with a cleanliness drive which has now further expanded to waste management, awareness programme, Greening programme.</p>

            <h4><strong>Visions and objectives of SDA</strong></h4>
            <h6>Vision</h6>
            <p>Imbibe the idea of cleanliness in each and every resident of the City and try and make our city green and pollution free </p>

            <h6><strong>Objective</strong></h6>
            <ul>
              <li>Create awareness among the citizens</li>
              <li>Habituating people with the clean way of living</li>
              <li>Providing information about alternative resources/measures</li>
              <li>Educating the younger generation about cleanliness</li>
              <li>Motivating and igniting the social responsibility within the people</li>
            </ul>
          </div>
        </div>

        <!-- Famie Video Play -->
        <div class="col-12 col-md-4">
          <div class="famie-video-play mb-100">
            <img src="img/bg-img/6.jpg" alt="">
            <!-- Play Icon -->
            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  @include('includes.testimonials')
  @if(count($team) > 0)
  <!-- ##### Team Member Area Start ##### -->
  <section class="team-member-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>MEET OUR TEAM</p>
            <h2><span>The Great Team</span> Will Always Help You</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">

        @foreach($team as $member)
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="{{ getImage($member->avatar, 100, 100) }}" alt="">
            </div>
            <div class="post-author-description">
              <h5>{{ $member->name }}</h5>
              <p>{{ $member->info }}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->
  @endif
@endsection
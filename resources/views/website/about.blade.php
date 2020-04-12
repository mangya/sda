@extends('layouts.website_layout')
@section('title','About us')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
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
        <div class="col-12 col-md-12">
          <div class="about-us-content content mb-100" style="text-align: justify;">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Let Us</span> Tell You Our Story</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <p><span class="fs-18">Dombivli</span>, a developing city in the Thane District of Maharashtra state, is also known for its cultural values and active youth participation. The City is known for preserving their culture and celebrating it with enthusiasm. It is also one of the 98 cities shortlisted to be developed as a ‘Smart City’ under the Smart Cities Mission of the Government of India. The City has been growing at a tremendous rate, and therefore the problem arising out of it! Although the city is benchmarked for its values and cultural activities, it is also known as one of the <span class="fs-18">dirtiest and second most polluted city</span> (2016) of Maharashtra. </p>
            <p>Understanding the gravity of the of problem of pollution and cleanliness in the city and taking the responsibility of the mess created directly and indirectly, few youths of Dombivli joined hands together to fight against pollution and making Dombivli a clean and Green place to live. Inspired by the <span class="italic">"Seva" (service) philosophy propagated by the great warrior monk Swami Vivekananda (1863-1902), the team has commenced with the Swachha Dombivli Abhiyan (SDA)</span> in April, 2018.  SDA was formed as step towards cleaning our area and preserving our mother nature ultimately benefitting the society. Starting from understanding the problems and focusing on the most dirtiest and important areas, the team initially commenced their activity with a cleanliness drive which has now further expanded to <strong>waste management, awareness programme, Greening programme.</strong></p>

            <p>Swachha Dombivli Abhiyan is an initiative by Vivekanand Sewa Mandal (VSM/ Mandal), an apolitical organisation which has been involved in various society welfare activities since 1991.  As a corollary to the principle of "service to poor is service to god," we at Mandal engage students in welfare activities of tribal -- the most neglected people of our society. Mandal caters to students living in other northern suburbs of Mumbai-Thane region through an 8,000-book-strong library that has been serving professional students of engineering, management and other streams since 1991. It also provides education to underprivileged students for Municipality Schools across Dombivli.</p>

            <h4><strong>Visions and objectives of SDA</strong></h4>
            <h6>Vision</h6>
            <p><span class="fs-18">Imbibe the idea of cleanliness and make our city green and pollution free.</span></p>
            <h6>Mission</h6>
            <p><span class="italic">Our mission is to propel clean and eco-friendly way of living and improve the environmental quality of the city by working together with the people by educating and providing them with appropriate and sustainable solutions.</span></p>

            <h6><strong>Objective</strong></h6>
            <ul>
              <li>Create awareness among the people, motivate and ignite the social responsibility within the people.</li>
              <li>Enhancing the way of living by sustainable and eco-friendly measures.</li>
              <li>Fostering Bhangarwala network for effective and efficient way of dry waste management.</li>
              <li>Increase participation of social groups and individuals with an opportunity to be actively involved in cleaning our city.</li>
            </ul>
            @if (!Auth::check())
              <div class="col-12 col-md-12 mt-30">
                <a class="btn famie-btn" href="{{ route('register') }}">Join Us</a>
                <a class="btn famie-btn" href="{{ route('login') }}">Login</a>
              </div>
            @endif
          </div>
        </div>
        <!-- Famie Video Play -->
        <!-- 
        <div class="col-12 col-md-4">
          <div class="famie-video-play mb-100">
            <img src="img/bg-img/6.jpg" alt="">
            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>
        -->
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
  @include('includes.vsm_banner')
@endsection
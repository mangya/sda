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

        <!-- Single Team Member -->
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="https://media.licdn.com/dms/image/C4E03AQEkyXegJTEHQg/profile-displayphoto-shrink_800_800/0?e=1568246400&v=beta&t=4UskLuyje-7ykHIAweJhEBDaxTRnVZFCfWbqpbvOk9U" alt="">
            </div>
            <div class="post-author-description">
              <h5>Nandakumar Palkar</h5>
              <p>A very enthusiastic and result driven person, Nandakumar Palkar, is the mastermind of the project. He has been involved in various projects of VSM since the inception in 1989. A Regional Head of Quality Assurance by profession, he not only provides guidance to the team but also is actively involved working with the team on-field.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="img/bg-img/anilmokal.jpg" alt="">
            </div>
            <div class="post-author-description">
              <h5>Anil Mokal</h5>
              <p>Anil Sir, the most senior member of the team, who has very well proved that “age is just a number”.He is not only an inspiration to the team but also the most energetic member and solution oriented member of the team. A retired employee from the Vigilance department of Air India, he has been the most active member of SDA, who joined us through our cleanliness drive in Oct, 2018.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="img/bg-img/smit.jpeg" alt="">
            </div>
            <div class="post-author-description">
                <h5>Smit Prabhukhanolkar</h5>
              <p>An IT engineer by profession, Smit is a dynamic, energetic and the creative brain of SDA. From handling campaigning of the project till implementation of ideas, he has been a key contributor in the overall management of the project. Initially, involved within different activities of VSM, Smit has joined SDA since its initiation in 2018.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="https://media.licdn.com/dms/image/C4E03AQHUL9pEgKTeBQ/profile-displayphoto-shrink_800_800/0?e=1568246400&v=beta&t=oNMX_OGFkqxWJKazjTpeO4Kos9SYrh62wUuATA_bYqg" alt="">
            </div>
            <div class="post-author-description">
              <h5>Chinmay Pimpalkhare</h5>
              <p>Chinmay, a software engineer by profession, is a powerful speaker who is also known for his quick wittedness. He joined SDA during tree plantation drive in Aug, 2018, and has now become a key member of the team.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="img/bg-img/swaroop.jpg" alt="">
            </div>
            <div class="post-author-description">
              <h5>Swaroop Bhagwat</h5>
              <p>Swaroop is a high spirited and a passionate member of SDA. A computer engineer by profession, he has been with the team since tree plantation drive in July, 2018.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="img/bg-img/pranita.jpg" alt="">
            </div>
            <div class="post-author-description">
              <h5>Pranita Bauskar</h5>
              <p>An articulate person, Pranita, is known for her creative writing skills and documentation has been with VSM since 2015. A Risk management professional, she was initially working for education of underprivileged children, she joined SDA since its commencement in April, 2018. </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-6">
          <div class="post-author-area d-flex align-items-center">
            <div class="post-author-img">
              <img src="https://media.licdn.com/dms/image/C5103AQHM2Yh7SSyEGw/profile-displayphoto-shrink_200_200/0?e=1568246400&v=beta&t=c62Nl-Rxb081AukculbHugzzvpXS5K7jRQ5phZJf_uI" alt="">
            </div>
            <div class="post-author-description">
              <h5>Mangesh Ghadigaonkar</h5>
              <p>A tea lover, reserved yet strong player of the team, Mangesh, is an IT engineer who looks after the website and IT related activities of SDA. He has been actively involved in the project since the formation of SDA. </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### Team Member Area End ##### -->
@endsection
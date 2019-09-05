@extends('layouts.website_layout')
@section('title','Teachers Association')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Teachers Association</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-8">
          <div class="about-us-content content">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2><span>Teachers </span> Association</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">

        <div class="col-12 col-lg-12">
          <div class="about-us-content mb-100">
            <p>A major and important step towards sustainable solutions was involving the younger generation, making them understand the seriousness of the problem and guiding them with simple solutions. The crucial channel through which children can be approached are their Teachers.</p>
            <p>As it is rightly said” the influence of a good teacher can never be erased.”SDA organised a “Teachers association” on 27 July, 2019.</p>
            <p>Commencing with the problems and impact of increasing pollution problem in Dombivli, the teachers were informed about the different activities of SDA. The meet focused on explaining type of waste, segregating them and ways to dispose these household wastes. The teachers were aslo provided information about options available for managing both dry and wet waste at both home and society level. Even importance of bhangarwala channel was discussed during the meet. The teachers were also shown videos providing an easy explanation of the environmental problems along with some innovative solutions to them.</p>
            <p>A question and answer round was also conducted discussing and understands the problems, solution and dear for better management of waste and carrying such seminars in their respective schools. An overwhelming response was received from the teachers. The teachers not only appreciated the team’s efforts but also invited the team members to conduct such seminars in their schools.</p>
            <p>A kit with PPT providing information about waste management, segregation of those, solutions along with interactive videos was provided to the teachers. It is expected that the teacher will conduct seminars for their respective students and motivate them to follow these sustainable was ultimately promoting a healthy and clean way of living. </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  @endsection
@extends('layouts.website_layout')
@section('title','Login')
@section('page_content')
  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-40-0">
    <div class="container">
      <div class="row justify-content-between">
        <!-- Contact Content -->
        <div class="col-12 col-lg-12">
          <div class="contact-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <center>
                <h2><span>Thank You.</h2>
                <h2><span>You Have Registered Successfully.</h2>  
                <img src="website/img/core-img/decor.png" alt="">
              </center>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col-12 col-lg-12">
          <center>
            <a class="btn famie-btn mb-50" href="{{ route('show.blog_list') }}">Read our blogs</a>
            <a class="btn famie-btn mb-50" href="{{ route('show.website') }}">Go To Home</a>
          </center>
        </div>
      </div>
    </div>
  </section>
  @include('includes.quotes')
  @endsection
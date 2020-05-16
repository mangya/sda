@extends('layouts.website_layout')
@section('title',$content->title)
@push('styles')
<style type="text/css">
  .content img {
    float: right; padding: 20px
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
          <li class="breadcrumb-item active" aria-current="page">{{ $content->title }}</li>
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
            <div class="section-heading mb-15">
              @if(isset($content->content))
              <h2><span>{{ $content->title }}</span></h2>
              @endif
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
          @if(isset($content->content))
          {!! $content->content !!}
          @endif
        </div>
      </div>
      <div class="share-tags d-flex flex-wrap align-items-center justify-content-between mb-30">
        <div class="share-post d-flex align-items-center">
          <span>Share This page:</span>
          <div class="share-icons">
            <!-- <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a> -->
            <a href="https://api.whatsapp.com/send?text={{ url('/info').'/'.$content->slug }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
            <div class="fb-share-button" 
              data-href="{{ route('show_page',['code' => $content->slug]) }}" 
              data-layout="button">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  @push('scripts')
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
@endpush
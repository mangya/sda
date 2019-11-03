@extends('layouts.website_layout')
@section('description', $blog->author->full_name)
@push('meta')
<meta property="og:url"           content="{{ route('show.blog',['code' => $blog->code]) }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Swachha Dombivli Abhiyan" />
    <meta property="og:description"   content="{{$blog->title}}" />
@endpush
@section('title', $blog->title)
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <!-- ##### Blog Area Start ##### -->
  <section class="news-details-area section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="news-details-content" style="text-align: justify">
            <h6>Post on {{ date('d M Y', strtotime($blog->created_at)) }} / {{ $blog->author->full_name }}</h6>
            <h2 class="post-title">{{ $blog->title }}</h2>
            <!-- <img src="img/bg-img/26.jpg" alt="" class="post-thumb"> -->
            <p class="post-excerpt">
              {!! $blog->content !!}
            </p>
            <div class="share-tags d-flex flex-wrap align-items-center justify-content-between">
              <div class="share-post d-flex align-items-center">
                <span>Share This post:</span>
                <div class="share-icons">
                  <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a> -->
                  <a href="https://api.whatsapp.com/send?text={{ url('/blog').'/'.$blog->code }}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                  <div class="fb-share-button" 
                    data-href="{{ route('show.blog',['code' => $blog->code]) }}" 
                    data-layout="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->
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
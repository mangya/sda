@extends('layouts.website_layout')
@section('title','About us')
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
  <section class="famie-blog-area">
    <div class="container">
      <div class="row">
        <!-- Posts Area -->
        <div class="col-12 col-md-12">
          <div class="posts-area">
            @foreach($blogs as $blog)
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <h6>Post on {{ date('d M Y', strtotime($blog->created_at)) }} / {{ $blog->author->full_name }}</h6>
              <a href="{{ route('show.blog',['code' => $blog->code]) }}" class="post-title">{{ $blog->title }}</a>
              <!-- <img src="img/bg-img/26.jpg" alt="" class="post-thumb"> -->
              <p class="post-excerpt">
                {{ substr(strip_tags($blog->content),0,400).'...' }}
              </p>
            </div>
            @endforeach
          </div>
          <!-- pagination -->
          <nav>
            <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->
@endsection
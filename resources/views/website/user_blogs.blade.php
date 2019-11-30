@extends('layouts.website_layout')
@section('title','My Blogs')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('show.blog_list') }}">Blogs</a></li>
          <li class="breadcrumb-item active" aria-current="page"> My Blogs</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <!-- ##### Blog Area Start ##### -->
  <section class="famie-blog-area">
    <div class="container">
      <div class="row">
      @if (Auth::check())
      @if(auth()->user()->role == "Author")
        <div class="col-12 col-md-12 mb-15">
          <a class="btn famie-btn" href="{{ route('show.blog_form') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
  Write Blog</a>
        </div>
      @endif
      @endif
        <!-- Posts Area -->
        <div class="col-12 col-md-12">
          <div class="posts-area">
            @foreach($blogs as $blog)
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <p>Status : @if($blog->is_approved)<span style="color: #77b122"><i class="fa fa-check-circle" aria-hidden="true"></i> Approved</span> @if($blog->is_active)<span style="color: #77b122"><i class="fa fa-check-circle" aria-hidden="true"></i> Active</span> @else <span style="color: #ab140f"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Inactive</span>@endif @else <span style="color: #707070"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Approval pending</span>@endif</p>
              @if($blog->is_approved)
                <a href="{{ route('show.blog',['code' => $blog->code]) }}" class="post-title">{{ $blog->title }}</a>
              @else
                <a href="{{ route('show.blog_edit_form',['code' => $blog->code]) }}" class="post-title">{{ $blog->title }}</a>
              @endif
              <!-- <img src="img/bg-img/26.jpg" alt="" class="post-thumb"> -->
              <p class="post-excerpt">
                {{ mb_substr(strip_tags($blog->content),0,400).'...' }}
              </p>
            </div>
            @endforeach
          </div>
          <!-- pagination -->
          <!-- <nav>
            <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav> -->
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->
@endsection
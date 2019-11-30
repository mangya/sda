@extends('layouts.website_layout')
@section('title','New Blog')
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
        <div class="col-12 col-md-12 mb-15">
          <a class="btn famie-btn" href="{{ route('show.user_blogs') }}"><i class="fa fa-folder-open" aria-hidden="true"></i>
 My Blogs</a>
        </div>
        <!-- Posts Area -->
        <div class="col-12 col-md-12">
          <form action="{{ route('update.blog',['code' => $blog->code]) }}" method="post" id="blogForm" class="novalidate mb-30">
            <div class="row">
              <div class="col-lg-12">
                <input type="text" class="form-control" name="title" id="blogTitle" placeholder="Blog Title" value="{{ $blog->title }}">
                {{ csrf_field() }}
              </div>
              <div class="col-lg-12">
                <textarea name="content" id="blogContent" class="text-editor">{{ $blog->content }}</textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn famie-btn" id="blogSave">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->
@endsection
@push('scripts')
<script type="text/javascript">
  $('.text-editor').trumbowyg({
    btns: [
      'btnGrp-design',
      ['image'],
      'btnGrp-justify'
    ]
  }).on('tbwchange', function(){ 
    
  });
  $(document).ready(function() {
    $('.text-editor').trumbowyg('html', $('#blogContent').text());
  });
</script>
@endpush
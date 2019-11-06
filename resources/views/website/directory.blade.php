@extends('layouts.website_layout')
@section('title','Directory')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Directory</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="#" method="post">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="col-lg-2">
                <button type="submit" class="btn famie-btn">Search</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-md-12">
            <!-- Single Widget Area -->
            <div class="single-widget-area">
              @foreach($directory_items as $item)
              <!-- Title -->
              <h5 class="widget-title">{{$item->name}}</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="{{asset($item->image)}}" alt="">
                </div>
                <div class="post-content">
                  <div class="post-title">{!!$item->short_info!!}</div>
                  <div class="post-date">{{$item->address}}</div>
                  <div class="post-date">{{$item->contact_person}}</div>
                  <div class="post-date">{{$item->contact_no}}</div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
      </div>
  </div>
  @endsection
@extends('layouts.website_layout')
@section('title','Eco-Friendly Products')
@push('styles')
<style type="text/css">
  .product-thumbnail img { 
    display: block;
    max-width:300px;
    max-height:300px;
    width: 100%;
    height: auto;
  }
</style>
@endpush
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('show.website')}}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Eco-Friendly Products</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->
  <div class="container">
    <!--
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
      </div>
    -->
      <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="product-thumbnail mb-100">
                <img src="{{ getImage($product->image, 160) }}" alt="{{ $product->title }}">
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <div class="about-us-content mb-100">
                <div class="section-heading mb-15">
                  <h2><span>{{ $product->title }}</h2>
                </div>
                {!! $product->description !!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  </div>
  @endsection
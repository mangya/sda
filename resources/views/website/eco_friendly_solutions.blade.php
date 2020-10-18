@extends('layouts.website_layout')
@section('title','Directory')
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
          <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Eco-Friendly Solutions</li>
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
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="product-thumbnail mb-100">
                <img src="https://www.ethicaonline.com/wp-content/uploads/2020/04/Bamboo-Jug-designer-2_1-600x600.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <div class="about-us-content mb-100">
                <div class="section-heading mb-15">
                  <h2><span>Bamboo Jug</h2>
                </div>
                <p>Price: &#x20B9;165</p>
                <p>Size : 9''</p>
                <p>Contact No: 91-9284017619</p>
                <p>Email: TeamEthica@gmail.com</p>
                <p>Web link: <a href="https://www.ethicaonline.com/contact-us-page">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="product-thumbnail mb-100">
                <img src="https://www.bambooindia.com/wp-content/uploads/2019/03/bamboo_soap_1-1.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <div class="about-us-content mb-100">
                <div class="section-heading mb-15">
                  <h2><span>Bamboo Soap Case</h2>
                </div>
                <p>Price: &#x20B9;220</p>
                <p>Size : approx. 11.6*8*1.3cm</p>
                <p>Material: Bamboo</p>
                <p>Web link: <a href="https://www.bambooindia.com/product/bamboo-soap-case/">Click here</a></p>
                <p>100% Brand new and high quality! After waterproof outer layer paint process plant, easy to clean, no deformation. Unique design that allows Soap Soap keep dry, more conducive Handmade soap persisted. Natural Bamboo material. Easy to clean, no deformation.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="product-thumbnail mb-100">
                <img src="https://www.ethicaonline.com/wp-content/uploads/2020/03/WhatsApp-Image-2020-04-01-at-11.23.08-AM-600x584.jpeg" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <div class="about-us-content mb-100">
                <div class="section-heading mb-15">
                  <h2><span>Bamboo Container</h2>
                </div>
                <p>Price: &#x20B9;180</p>
                <p>Size : 6” x 4”</p>
                <p>Material: Bamboo</p>
                <p>Web link: <a href="https://www.ethicaonline.com/product/bamboo-container-round-plain/">Click here</a></p>
                <p>Decorative bamboo boxes are perfect for craft use. Elegant design and master craftsmanship make it a great package for Gifting too.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-lg-4">
              <div class="product-thumbnail mb-100">
                <img src="https://www.ethicaonline.com/wp-content/uploads/2020/04/images-18.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-lg-8">
              <div class="about-us-content mb-100">
                <div class="section-heading mb-15">
                  <h2><span>Duffle sling Bag</h2>
                </div>
                <p>Price: &#x20B9;945.00</p>
                <p>Size : 5.5”</p>
                <p>Material: Bamboo</p>
                <p>Web link: <a href="https://www.ethicaonline.com/product/duffle-sling-bag/">Click here</a></p>
                <p>Perfectly Crafted By Expert Artisans From Kauna .Durable And Sturdy. A Great Fashion Accessory For Your Daily Use. It Is Very Easy To Carry With Ample Space And Will Definitely Boost Your Look And Personality.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  @endsection
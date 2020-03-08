@extends('layouts.website_layout')
@section('title','Dry Waste')
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
          <li class="breadcrumb-item active" aria-current="page">Dry Waste</li>
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
              <h2><span>Dry </span>Waste</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
          <div class="about-us-content table-responsive">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Plastic, Thermocol</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Paper, Card Board / कागद, पुठ्ठा</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Metal / लोखंड, धातू</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Glass / काच</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Clothes / कपडे</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Footwears / चप्पल</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Bags, Leather / चामडं</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Wooden waste / लाकूड </td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Pens, Pencils</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Threads / दोरा</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Brooms / झाडू</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
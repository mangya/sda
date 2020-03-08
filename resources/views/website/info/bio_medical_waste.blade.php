@extends('layouts.website_layout')
@section('title','Bio Medical Waste')
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
          <li class="breadcrumb-item active" aria-current="page">Bio Medical Waste</li>
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
              <h2><span>Bio </span>Medical Waste</h2>
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
                  <td>Pathology Waste</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Hospital Medical Waste</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Medical Equipments</td>
                </tr>
                <tr>
                  <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                  <td>Tube, Pot, Water Bed</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
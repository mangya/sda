@extends('layouts.website_layout')
@section('title','Waste Classification')
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
          <li class="breadcrumb-item active" aria-current="page">Waste Classification</li>
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
              <h2><span>Waste </span>Classification</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
            <!-- Wet Waste -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="wetWaste" data-toggle="collapse" data-parent="#accordion" href="#wetWaste">Wet Waste / ओला कचरा
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="wetWaste" class="accordion-content collapse">
                <div class="row">
                  <div class="col-6 col-lg-6">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Kitchen Waste / उरलेले अन्न</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Coconut Waste / नारळाच्या करवंट्या / शेंडी / शहाळं</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Vegetable Waste / भाजीपाला</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Tea / Coffee remainants / चहा / कॉफीचा गाळ</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Fruits / फळे</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Dust / घरातील धूळ </td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Nails, Hairs / नखे, केस </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-6 col-lg-6">
                    <img src="{{ asset('website/img/core-img/wet_waste.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- Dry Waste -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="dryWaste" data-toggle="collapse" data-parent="#accordion" href="#dryWaste">Dry Waste / सुका कचरा
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="dryWaste" class="accordion-content collapse">
                <div class="row">
                  <div class="col-6 col-lg-6">
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
                  <div class="col-6 col-lg-6">
                    <img src="{{ asset('website/img/core-img/dry_waste.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- Dry Hazardous -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="dryHazardous" data-toggle="collapse" data-parent="#accordion" href="#dryHazardous">Dry Hazardous / सुका घातक
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="dryHazardous" class="accordion-content collapse">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Sanitory Pads</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Diapers</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Damaged / Used Medical waste </td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Ciggarate Filters</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Wet Hazardous -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="wetHazardous" data-toggle="collapse" data-parent="#accordion" href="#wetHazardous">Wet Hazardous / ओला घातक
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="wetHazardous" class="accordion-content collapse">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>थुंकी</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>उकिरड्यावर पडलेले मेलेले प्राणी</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>उघड्यावर शौच / लघवी</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>उघड्यावर फार काळ पडलेले अन्न</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>सोसायटीमधील / सार्वजनिक शौचाच्या टाक्या</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Bio Medical -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="bioMedical" data-toggle="collapse" data-parent="#accordion" href="#bioMedical">Bio Medical / जैव वैद्यकीय
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="bioMedical" class="accordion-content collapse">
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
            <!-- E-Waste -->
            <div class="panel single-accordion">
              <h6>
                  <a role="button" class="collapsed" aria-expanded="false" aria-controls="eWaste" data-toggle="collapse" data-parent="#accordion" href="#eWaste">E-Waste
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span></a>
              </h6>
              <div id="eWaste" class="accordion-content collapse">
                <div class="row">
                  <div class="col-6 col-lg-6">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Old Phones</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Batteries </td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Chargers </td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Electronic kits </td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Washing Machine </td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>TV</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Refrigerator</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Mixer</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Iron</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Wire</td>
                        </tr>
                        <tr>
                          <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                          <td>Tubelights/Bulbs</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-6 col-lg-6">
                    <img src="{{ asset('website/img/core-img/e_waste.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <!-- Oil Waste -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="oilWaste" data-toggle="collapse" data-parent="#accordion" href="#oilWaste">Oil Waste/ तेल कचरा
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="oilWaste" class="accordion-content collapse">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Edible Oil / खाद्य तेल</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Paint, Colors</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Grease</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Petroleum</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Industrial Waste -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="IndustrialWaste" data-toggle="collapse" data-parent="#accordion" href="#IndustrialWaste">Industrial Waste/ औद्योगिक कचरा
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="IndustrialWaste" class="accordion-content collapse">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Oil</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Smoke</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Waste Water</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Metal</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Paper</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Glass</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Packaging material</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Industrial Boxes Carton</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Cement Bags</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Jute Bags / गोणी</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--  -->
            <div class="panel single-accordion">
              <h6><a role="button" class="collapsed" aria-expanded="false" aria-controls="holisticWaste" data-toggle="collapse" data-parent="#accordion" href="#holisticWaste">Holistic Waste
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="holisticWaste" class="accordion-content collapse">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Old God Idols / खराब झालेल्या देवतांच्या मुर्त्या</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>खराब झालेल्या Plaster of Parisच्या मुर्त्या</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Laminated Photo frames</td>
                    </tr>
                    <tr>
                      <td width="5px"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                      <td>Frames</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
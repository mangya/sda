@extends('layouts.website_layout')
@section('title','Waste Management Campaign')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Waste Management</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Thumbnail -->
        <div class="col-12 col-lg-6">
          <div class="about-us-thumbnail mb-100">
            <img src="{{asset('img/bg-img/24.jpg')}}" alt="">
          </div>
        </div>

        <!-- About Us Content -->
        <div class="col-12 col-lg-6">
          <div class="about-us-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Waste Management</p>
              <h2><span>Waste Management</span> &amp; Campaign</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna veloci, fermentum malesuda mina. Donec auctor nislec neque sagittis, sit amet dapibus pellentesque donal feugiat. Nulla mollis magna non
              sanaliquet, volutpat do zutum, ultrices consectetur, ultrices at purus.</p>
            <p>Sed nec urna quis arcu elementum pretium at id diam. Praesent dapibus dui ac finibus congue. Donec elementum, felis tincidunt luctus elementum, ante magna faucibus dolor, quis hendrerit enim purus aliquet turpis. Aliquam eleifend scelerisque ipsum vitae vehicula. Integer vulputate leo at metus rutrum, nec convallis lorem tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus turpis non aliquam eleifend. Nullam facilisis bibendum libero sit amet sodales. Donec sollicitudin felis in ultricies porta. Praesent sed feugiat sem. Fusce a lobortis odio. Ut porttitor eget nisi id auctor. Nunc ligula est, porta a risus ut, ultricies ornare neque. Praesent hendrerit sodales lacus vel mollis.</p>
            <p>Morbi at condimentum mi, id congue odio. Vestibulum eleifend augue quam, ut pretium tellus pellentesque eget. Donec egestas et enim eget fermentum. Ut ornare massa sed elit eleifend laoreet. Donec ex lacus, aliquam sed leo ac, scelerisque rhoncus erat. Praesent blandit est quis nisl rutrum blandit. Nunc nec suscipit nibh. Vivamus elementum viverra mi ac consequat. Curabitur ut diam at nisi venenatis varius. Curabitur eu pretium metus. Etiam hendrerit, neque in imperdiet sodales, augue magna sodales mi, et auctor urna turpis at nisi. Mauris sit amet felis dolor. Vivamus id bibendum felis. Proin laoreet in metus sed dignissim.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### FAQ Area Start ##### -->
  <section class="famie-faq-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>HAVE A QUESTION?</p>
            <h2><span>Get answers</span> to FAQs about the service</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Are organic products of the same quality as other food and drink ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="collapseOne" class="accordion-content collapse show">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Do organic products taste different from other food and drink ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseTwo" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Are all of your poultry, meat and fish products raised humanely ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseThree" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">Does FAMIE contain any ingredients from China or outside of North America ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFour" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Are you a retailer interested in bringing in FARMIE products ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFive" class="accordion-content collapse">
                <p>Organic production methods differ from conventional ones – but the aim is nonetheless to produce top-quality food and drink. Organic produce has to meet the same safety standards as other foods and complies with EU General Food
                  law. The difference is that instead of using chemical compounds to combat pests or weeds, organic farmers use multi-annual crop rotations and resistant varieties to prevent such problems from occurring in the first place.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->
@endsection
@extends('layouts.website_layout')
@section('title','Magic Bucket')
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
          <li class="breadcrumb-item active" aria-current="page">Magic Bucket</li>
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
            <div class="section-heading">
              <h2><span>Magic </span>Bucket</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
          <div class="about-us-content content mb-30">
            <p>Many families living near the dumping ground in Kalyan have been facing problems due to the foul smell. As a solution to these problems, the team has promoted use of Magic Bucket (courtesy of Paryavaran Dakshata Mancha), a small compost bucket that can be used at home to dispose wet waste. This bucket converts kitchen waste/wet waste into useful biocompost which can be used as organic fertilizer for plants. The Magic Bucket is a simple bucket with a lid. One can easily convert any bucket into a magic bucket at your home itself.</p>
            <img src="{{asset('img/bg-img/magic_bucket.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
            <p>DIY (Do it yourself) Magic bucket is as follows:</p>
            
            <p><strong>Material required:</strong></p>
            <ul>
              <li>Pieces of Bricks</li>
              <li>Bagasse or coconut husk</li>
              <li>Dry leaves</li>
              <li>Soil conditioner (Compost soil)</li>
              <li>Cow dung (if available)</li>
              <li>Bucket/ container/ Pot – 1.5 ft. X 2 ft.</li>
              <li>Mesh (steel or Nylon)</li>
            </ul>
            <br/>
            <p><strong>Process:</strong></p>
            <ul>
              <li>Locate a sealable clean container you can use as a kitchen compost bin. Coffee containers, metal tins, plastic ice cream containers and small buckets all make great options.</li>
              <li>Use your drill and ¼-inch drill bit to create a series of holes in the lid of the container to allow air to circulate.</li>
              <li>Place a netted cloth at the bottom, followed by 2 inches of material in the sequence noted below:
                <ul>
                  <li>First Layer - Pieces of Bricks</li>
                  <li>Second Layer - Bagasse or coconut husk</li>
                  <li>Third Layer - Dry leaves</li>
                  <li>Fourth Layer - Soil conditioner (Compost soil) with cow dung (if available)</li>
                </ul>
                <p>Note: Soil conditioner aids in creation of bacteria which helps in decomposing the waste.</p>
              </li>
              <li>Add the wet waste on the top layer and mix it with the soil conditioner. Make sure the wet waste is properly cleaned and has no spices or oil in them. Spices/oil prevents bacteria creation and kills available bacteria.</li>
            </ul>
            <br/>
            <p><strong>Some precautions and rule to be followed:</strong></p>
            <p>Make sure you collect all the wet waste, clean it properly and set a time and put all the waste during the set period. This will help in habituating the bacteria in the bin to start composting the waste.</p>
            <p>If possible, make small pieces of waste, especially fruits or vegetable remains. This will make easy for the bacteria to eat the waste ultimately speeding up the composting process.</p>
            <p>Once the bucket is 2/3rd full remove the compost. Make sure the bucket is 1/3 empty to aid proper ventilation. Add handful water to the upper layer.</p>
            <p>The holes at the bottom of the bucket allow water to drip, so a tray at the bottom is recommended. The water collected in the try can be mixed with normal water in a ratio of 1:10, this will act as pesticide. The degraded waste will have a texture of powdered coffee which is the COMPOST. The bucket never fills up completely and so its is called a “MAGIC BUCKET”. Ensure there is no plastic or glass shreds in the waste and the box should not come under extreme temperature.</p>
            <p>For a family of three members, 1ft. X 1ft. magic bucket takes around three to four months to fill. Do not add water and waste prior to the removing the ready compost form the bucket. A black residual in the bin is the compost which can be utilised as fertilisers. While removing the compost form the bucket remove only the upper layer of compost and wait for some time. If not removing at one time, one can also remove small portions of compost as and when required.</p>
            <p>Almost anything that will break down can be used for compost, but exceptions include meat, fish, dairy and cooked foods. Items like coffee grounds, grass clippings and fruit and vegetable scraps will decompose faster.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
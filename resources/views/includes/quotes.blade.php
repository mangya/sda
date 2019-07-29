  <!-- ##### Testimonial Area Start ##### -->
  @if(count($quotes) > 0)
  <section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax" style="background-image: url('img/bg-img/quotes_bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonial Slides -->
          <div class="testimonial-slides owl-carousel">

            @foreach($quotes as $quote)
            <div class="single-slide">
              <!-- Testimonial Text -->
              <div class="testi-text d-flex">
                <div class="quote-icon">
                  <img src="website/img/core-img/quote.png" alt="">
                </div>
                <h5>"{{ $quote->quote }}"</h5>
              </div>
              <!-- Testimonial Thumbnail Name -->
              <div class="testimonial-thumbnail-name d-flex align-items-center">
                <div class="testimonial-name">
                  <h5>{{ $quote->name }}</h5>
                  <h6>{{ $quote->info }}</h6>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
  <!-- ##### Testimonial Area End ##### -->
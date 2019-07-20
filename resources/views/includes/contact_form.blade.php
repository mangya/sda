  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-40-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Contact Content -->
        <div class="col-12 col-lg-5">
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contact now</p>
              <h2><span>Get In Touch</span> With Us</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="{{ route('send_mail') }}" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" class="form-control" name="name" required placeholder="Your Name">
                    {{ csrf_field() }}
                  </div>
                  <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" required placeholder="Your Email">
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Your Contact no">
                  </div>
                  <div class="col-12">
                    <textarea name="message" class="form-control" cols="30" rows="5" required maxlength="300" required placeholder="Your Message"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn famie-btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Contact Maps -->
        <div class="col-lg-6">
          <div class="contact-maps mb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6187253792546!2d73.0867511144799!3d19.21184838701009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79589cd02f93d%3A0x1b809ed224efb4be!2sVivekanand+Seva+Mandal!5e0!3m2!1sen!2sin!4v1562511482723!5m2!1sen!2sin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->
  @push('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  @endpush
  @push('styles')
    <style type="text/css">
      .has-error input, .has-error textarea{
        border: red solid 1px;
        margin-bottom: 0px
      }
      .has-error input:focus, .has-error textarea:focus{
        border: red solid 1px;
      }
      .has-error {
        color: red;
      }
    </style>
  @endpush
  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-40-0">
    <div class="container">
      <div class="row justify-content-between">
        <!-- Contact Content -->
        <div class="col-12 col-lg-5">
          <div class="contact-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contact now</p>
              <h2><span>Get In Touch</span> With Us</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->

            <div id="errors-div"> </div>

            
            <div class="contact-form-area">
              <form action="{{ route('send_mail') }}" method="post" id="contactForm" class="novalidate">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" class="form-control" name="name" id="cntName" placeholder="Your Name">
                  </div>
                  <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" id="cntEmail" placeholder="Your Email">
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control txt-only-number" name="contact_no" id="cntContactNo" maxlength="10" placeholder="Your Contact no">
                  </div>
                  <div class="col-12">
                    <textarea name="message" class="form-control txt-message" cols="30" rows="5" id="txtMessage" maxlength="300" placeholder="Your Message"></textarea>
                  </div>
                  <div class="captcha col-12" style="margin-bottom: 10px">
                    <span>{!! captcha_img('flat') !!}</span>
                    <button type="button" class="btn btn-success"><i class="fa fa-refresh" id="refresh"></i></button>
                  </div>
                  <div class="col-12">
                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                  </div>  
                  <div class="col-12">
                    <button type="button" class="btn famie-btn" id="sendMsg">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Contact Maps -->
        <div class="col-lg-6">
          <div class="contact-maps mb-50">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6187253792546!2d73.0867511144799!3d19.21184838701009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79589cd02f93d%3A0x1b809ed224efb4be!2sVivekanand+Seva+Mandal!5e0!3m2!1sen!2sin!4v1562511482723!5m2!1sen!2sin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->
  @push('scripts')
  <script async defer src="{{url(mix('js/common.js'))}}"></script>
  <script type="text/javascript">
    $('#contactForm input').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    $('#contactForm textarea').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    
    $('#sendMsg').on('click',function(){
        var is_valid = true;
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
        if($('#cntName').val() == '') {
            $('#cntName').parent().addClass('has-error');
            $('#cntName').focus();
            $('#cntName').parent().append('<span class="help-txt">Name is required</span>')
            is_valid = false;
        }
        if($('#cntEmail').val() == '') {
            $('#cntEmail').parent().addClass('has-error');
            $('#cntEmail').focus();
            $('#cntEmail').parent().append('<span class="help-txt">Email is required</span>')
            is_valid = false;
        } else if(isEmail($('#cntEmail').val()) == false) {
            $('#cntEmail').parent().addClass('has-error');
            $('#cntEmail').focus();
            $('#cntEmail').parent().append('<span class="help-txt"> Please enter a valid email</span>')
            is_valid = false;
        }
        
        if($('#cntContactNo').val() == '') {
            $('#cntContactNo').parent().addClass('has-error');
            $('#cntContactNo').focus();
            $('#cntContactNo').parent().append('<span class="help-txt">Contact no is required</span>')
            is_valid = false;
        }
        if($('#txtMessage').val() == '') {
            $('#txtMessage').parent().addClass('has-error');
            $('#txtMessage').focus();
            $('#txtMessage').parent().append('<span class="help-txt">Please write a message</span>')
            is_valid = false;
        }
        if($('#captcha').val() == '') {
            $('#captcha').parent().addClass('has-error');
            $('#captcha').focus();
            $('#captcha').parent().append('<span class="help-txt">Please Enter Captcha</span>')
            is_valid = false;
        }
        if(is_valid) {
            var form = $('#contactForm');
            var url = form.attr('action');
            $(this).html('Sending...');
            $(this).attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $("#errors-div").empty();
                    $('.contact-form-area').html('<h4>Thank you we will get back to you soon!</h4>')
                },
                error: function(data) {
                var obj = $.parseJSON(JSON.stringify(data));
                var errors = obj.responseJSON.errors;
                //console.log(obj.responseJSON.errors);
                  $("#errors-div").empty();
                  $("#errors-div").append('<h3>Please Correct The Following</h3>');
                  $.each(errors, function(key, value){
                      $("#errors-div").append('<span class="text-danger">'+ value +'</span> <br>');
                  });
                  $("#sendMsg").prop( "disabled", false );
                  $("#sendMsg").html('Send Message'); //enable it back
                }
            });
        } else {
            return false;
        }
    });

    $('#refresh').click(function(){
    $.ajax({
       type:'GET',
       url:'refreshcaptcha',
       success:function(data){
          $(".captcha span").html(data.captcha);
       }
    });
  });


  </script>

  @endpush
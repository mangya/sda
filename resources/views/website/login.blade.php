@extends('layouts.website_layout')
@section('title','Login')
@section('page_content')
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
        <div class="col-12 col-lg-12">
          <div class="contact-content mb-50">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contribute to the mission</p>
              <h2><span>Login</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="{{ route('send_mail') }}" method="post" id="loginForm" class="novalidate">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" id="lgnEmail" placeholder="Your Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <input type="password" class="form-control" name="password" id="lgnPassword" placeholder="Password">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn famie-btn" id="lgnSubmit">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('includes.quotes')
  <!-- ##### Contact Area End ##### -->
  @push('scripts')
  <script type="text/javascript">
    $('#loginForm input').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#lgnSubmit').on('click',function(){
        var is_valid = true;
        if($('#lgnEmail').val() == '') {
            $('#lgnEmail').parent().addClass('has-error');
            $('#lgnEmail').focus();
            $('#lgnEmail').parent().append('<span class="help-txt">Email is required</span>')
            is_valid = false;
        }
        if($('#lgnPassword').val() == '') {
            $('#lgnPassword').parent().addClass('has-error');
            $('#lgnPassword').focus();
            $('#lgnPassword').parent().append('<span class="help-txt">Password is required</span>')
            is_valid = false;
        }
        if(is_valid) {
            var form = $('#lgnSubmit');
            var url = form.attr('action');
            $(this).html('Please wait...');
            $(this).attr('disabled','disabled');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $('.contact-form-area').html('<h4>Thank you we will get back to you soon!</h4>')
                }
            });
        } else {
            return false;
        }
    })
  </script>
  @endpush
  @endsection
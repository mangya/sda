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
              <p>Join Us</p>
              <h2><span>Register</h2>
              <img src="website/img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="{{ route('submit.register') }}" method="post" id="registerForm" class="novalidate">
                <div class="row">
                  <div class="col-lg-6 @if ($errors->has('name')) has-error @endif">
                    <input type="text" class="form-control" name="name" id="regName" placeholder="Your Name" value="{{ old('name') }}" />
                    @if ($errors->has('name'))
                    <span class="help-txt">{{ $errors->first('name') }}</span>
                    @endif
                    {{ csrf_field() }}
                  </div>
                  <div class="col-lg-6 @if ($errors->has('email')) has-error @endif">
                    <input type="email" class="form-control" name="email" id="regEmail" placeholder="Your Email" value="{{ old('email') }}" />
                    @if ($errors->has('email'))
                    <span class="help-txt">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="col-lg-6 @if ($errors->has('password')) has-error @endif">
                    <input type="password" class="form-control" name="password" id="regPasword" placeholder="Password"/>
                    @if ($errors->has('password'))
                    <span class="help-txt">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="col-lg-6 @if ($errors->has('password_confirmation')) has-error @endif">
                    <input type="password" class="form-control" name="password_confirmation" id="regConfirmPasword" placeholder="Confirm Password"/>
                    @if ($errors->has('password_confirmation'))
                    <span class="help-txt">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <!-- <div class="col-12">
                    <textarea name="message" class="form-control" cols="30" rows="5" id="txtMessage" maxlength="300" placeholder="Your Message"></textarea>
                  </div> -->
                  <div class="col-12">
                    <button class="btn famie-btn mb-15" id="regSubmit">Sign up</button>
                    <p>By clicking “Sign up”, you acknowledge that you have read and agree to our <a href="{{ route('terms') }}" target="_blank">terms of use</a> and <a href="{{ route('privacy_policy') }}" target="_blank">privacy policy</a></p>
                  </div>
                </div>
              </form>
              <div class="row">
                  <div class="col-6">
                    <p>Already have an account? <a href="{{ route('login') }}">Click here</a> to log in</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('includes.quotes')
  <!-- ##### Contact Area End ##### -->
  @push('scripts')
  <script src="{{url(elixir('js/common.js'))}}"></script>
  <script type="text/javascript">
    $('#registerForm input').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    $('#regSubmit').on('click',function(){
        var is_valid = true;
        var inpName = $('#regName');
        var inpEmail = $('#regEmail');
        var inpPwd = $('#regPasword');
        var inpCnfPwd = $('#regConfirmPasword');
        $('#registerForm input').removeClass('has-error');
        $('.help-txt').remove();

        if(inpName.val() == '') {
            inpName.parent().addClass('has-error');
            inpName.focus();
            inpName.parent().append('<span class="help-txt">Name is required</span>');
            is_valid = false;
        }
        if(inpEmail.val() == '') {
            inpEmail.parent().addClass('has-error');
            inpEmail.focus();
            inpEmail.parent().append('<span class="help-txt">Email is required</span>');
            is_valid = false;
        } else if(isEmail(inpEmail.val()) == false) {
            inpEmail.parent().addClass('has-error');
            inpEmail.focus();
            inpEmail.parent().append('<span class="help-txt"> Please enter a valid email</span>');
            is_valid = false;
        }
        if(inpPwd.val() == '') {
            inpPwd.parent().addClass('has-error');
            inpPwd.focus();
            inpPwd.parent().append('<span class="help-txt">Password is required</span>');
            is_valid = false;
        } else if (inpPwd.val().length < 6 ){
            inpPwd.parent().addClass('has-error');
            inpPwd.focus();
            inpPwd.parent().append('<span class="help-txt">Password should be atleast 6 charachters</span>');
        }
        if(inpCnfPwd.val() == '') {
            inpCnfPwd.parent().addClass('has-error');
            inpCnfPwd.focus();
            inpCnfPwd.parent().append('<span class="help-txt">Please confirm your password</span>');
            is_valid = false;
        } else if (inpPwd.val() != inpCnfPwd.val() ){
            inpCnfPwd.parent().addClass('has-error');
            inpCnfPwd.focus();
            inpCnfPwd.parent().append('<span class="help-txt">Password do not match</span>');
        }
        if(is_valid) {
            var form = $('#registerForm');
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
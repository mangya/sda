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
              <form action="{{ route('login') }}" method="post" id="loginForm" class="novalidate mb-30">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="email" class="form-control" name="login_id" id="lgnEmail" placeholder="Your Email">
                    {{ csrf_field() }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="password" class="form-control" name="password" id="lgnPassword" placeholder="Password">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                        <span class="help-txt has-error">{{ $error }}</span>
                        @endforeach
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn famie-btn" id="lgnSubmit">Login</button>
                  </div>
                </div>
              </form>
              <div class="row">
                  <div class="col-6">
                    <p><a href="{{ route('password.request') }}">Forgot password</a></p>
                    <p>Don't have an account? <a href="{{ route('register') }}">Click here</a> to join us</p>
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
  <script src="{{url(mix('js/common.js'))}}"></script>
  <script type="text/javascript">
    $('#loginForm input').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    $('#lgnSubmit').on('click',function(){
        var is_valid = true;
        var inpEmail = $('#lgnEmail');
        var inpPwd = $('#lgnPassword');
        $('#loginForm input').removeClass('has-error');
        $('.help-txt').remove();
        
        if(inpEmail.val() == '') {
            inpEmail.parent().addClass('has-error');
            inpEmail.focus();
            inpEmail.parent().append('<span class="help-txt">Email is required</span>')
            is_valid = false;
        }
        if(inpPwd.val() == '') {
            inpPwd.parent().addClass('has-error');
            inpPwd.focus();
            inpPwd.parent().append('<span class="help-txt">Password is required</span>')
            is_valid = false;
        }
        if(is_valid) {
            var form = $('#loginForm');
            var url = form.attr('action');
            $(this).html('Please wait...');
            $(this).attr('disabled','disabled');
            form.submit();
        } else {
            return false;
        }
    })
  </script>
  @endpush
  @endsection
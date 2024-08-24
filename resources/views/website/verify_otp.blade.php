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
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      /* Firefox */
      input[type=number] {
        -moz-appearance:textfield;
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
              <h5>We have sent a OTP to your email. Please enter the OTP to verify your email.</h5>
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
              <form action="{{ route('verify.otp') }}" method="post" id="otpForm" class="novalidate mb-30">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="number" class="form-control txt-only-number @if (count($errors) > 0) has-error @endif" name="otp" id="lgnOtp" placeholder="OTP" value="{{ old('otp') }}">
                    {{ csrf_field() }}
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                        <span class="help-txt has-error">{{ $error }}</span>
                        @endforeach
                    @endif
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="button" class="btn famie-btn" id="lgnSubmit">Submit</button>
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
  <script src="{{url(mix('js/common.js'))}}"></script>
  <script type="text/javascript">
    $('#otpForm input').on('keypress', function(){
        $(this).parent().removeClass('has-error');
        $('.help-txt').remove();
    });
    $('#lgnSubmit').on('click',function(){
        var is_valid = true;
        var inpOTP = $('#lgnOtp');
        $('#otpForm input').removeClass('has-error');
        $('.help-txt').remove();
        
        if(inpOTP.val() == '') {
            inpOTP.parent().addClass('has-error');
            inpOTP.focus();
            inpOTP.parent().append('<span class="help-txt">OTP is required</span>')
            is_valid = false;
        }
        if(is_valid) {
            var form = $('#otpForm');
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
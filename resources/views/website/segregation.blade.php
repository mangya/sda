@extends('layouts.website_layout')
@section('title','Waste Segregation')
@push('styles')
<style type="text/css">
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html {
    --i: var(--wide, 1);
    --j: calc(1 - var(--i));
    background: #818286;
    background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/2017/kreator_rockharz_july_2018.jpg) 50%/cover;
    font: 400 1em/ 1.25 koho, trebuchet ms, verdana, century gothic, arial, sans-serif;
  }
  @media (max-width: 37.25rem) {
    html {
      --wide: 0;
    }
  }
  @media (max-width: 250px) {
    html {
      font-size: 0.75em;
    }
  }

  article {
    --p: var(--parity, 0);
    --q: calc(1 - var(--p));
    --s: calc(1 - 2*var(--p));
    display: grid;
    grid-template: calc(var(--i)*2.8125rem + var(--j)*15vw) calc(var(--i)*3.75rem + var(--j)*2.8125rem) calc(var(--j)*3.75rem)/ calc(var(--i)*calc(var(--q)*11.5rem + var(--p)*14rem) + var(--j)*calc(100% - 2.8125rem)) calc(var(--i)*calc(var(--q)*5rem + var(--p)*0.375rem) + var(--j)*2.8125rem) calc(var(--i)*calc(var(--q)*0.375rem + var(--p)*5rem)) calc(var(--i)*calc(var(--q)*14rem + var(--p)*11.5rem));
    grid-gap: 0 calc(var(--i)*1.5rem);
    margin: .5em auto;
    border: solid calc(var(--i)*0.1875rem) transparent;
    padding: calc(var(--i)*2.25rem + var(--j)*2vw) calc(var(--i)*var(--q)*1.5rem + var(--j)*2vw) calc(var(--i)*2.25rem + var(--j)*2vw) calc(var(--i)*var(--p)*1.5rem + var(--j)*2vw);
    max-width: 37.25rem;
    border-radius: calc(var(--i)*9px);
    background: Linear-gradient(calc(var(--s)*90deg), HSL(var(--hue0), calc(var(--p)*var(--sat0) + var(--q)*9%), calc(var(--p)*var(--lum0) + var(--q)*98%)) calc(var(--i)*11.5rem), HSL(var(--hue1), calc(var(--p)*var(--sat1) + var(--q)*9%), calc(var(--p)*var(--lum1) + var(--q)*83%))) padding-box, Linear-gradient(calc(var(--s)*90deg), HSL(var(--hue1), calc(var(--p)*var(--sat1) + var(--q)*9%), calc(var(--p)*var(--lum1) + var(--q)*83%)) 11.6875rem, HSL(var(--hue0), calc(var(--p)*var(--sat0) + var(--q)*9%), calc(var(--p)*var(--lum0) + var(--q)*98%))) border-box;
    color: HSL(var(--hue1), calc(var(--q)*var(--sat1) + var(--p)*9%), calc(var(--q)*var(--lum1) + var(--p)*98%));
    counter-increment: idx;
  }
  article:before {
    grid-column: calc((3*var(--q) + 2*var(--p)))/span 1;
    grid-row: 1/span 3;
    width: calc(var(--i)*0.375rem);
    border-radius: 0.375rem;
    box-shadow: inset 2px 0 5px rgba(0, 0, 0, 0.35), inset -1px 0 3px rgba(255, 255, 255, 0.25), 1px 0 1px rgba(255, 255, 255, 0.5);
    background: HSL(var(--hue1), var(--sat1), var(--lum1));
    content: "";
  }
  article:after {
    grid-column: calc(var(--i)*(2*var(--q) + 3*var(--p)) + 2*var(--j))/span 1;
    grid-row: calc(var(--i) + 2*var(--j))/span calc(3*var(--i) + var(--j));
    place-self: center;
    font-size: calc(var(--i)*4rem + var(--j)*2.25rem);
    filter: Grayscale(var(--p)) Brightness(calc(var(--q) + 1.25*var(--p)));
    content: attr(data-icon);
  }
  article:nth-child(2n) {
    --parity: 1;
  }

  h3 {
    display: grid;
    grid-template: repeat(calc(1 + 3*var(--i)), 1fr)/repeat(calc(1 + 2*var(--j)), 1fr);
    place-items: center;
    grid-column: calc(var(--i)*(var(--q) + 4*var(--p)) + var(--j))/span calc(var(--i) + 2*var(--j));
    grid-row: 1/span calc(3*var(--i) + var(--j));
    margin: calc(var(--i)*-2.4375rem + var(--j)*-2vw) calc(var(--i)*calc(var(--p)*-0.1875rem) + var(--j)*-2vw) calc(var(--i)*-2.4375rem) calc(var(--i)*calc(var(--q)*-0.1875rem) + var(--j)*-2vw);
    padding: calc(var(--i)*2.4375rem) 0;
    border-radius: inherit;
    background: Radial-gradient(circle at calc(var(--i)*calc(var(--p)*100% - var(--s)*22.0166rem) + var(--j)*50%) calc(var(--i)*50% + var(--j)*-277.68067vw), HSL(var(--hue0), calc(var(--q)*var(--sat0) + var(--p)*9%), calc(var(--q)*var(--lum1) + var(--p)*98%)) calc(var(--i)*22.0166rem + var(--j)*277.68067vw), HSL(var(--hue1), calc(var(--q)*var(--sat1) + var(--p)*9%), calc(var(--q)*var(--lum1) + var(--p)*83%)) calc(var(--i)*33.7041rem + var(--j)*294.68067vw));
    color: HSL(var(--hue1), var(--sat1), calc(var(--p)*var(--lum1) + var(--q)*98%));
    font-size: calc(var(--i)*1.64063rem + var(--j)*6.69789vw);
    font-weight: 600;
    line-height: calc(var(--i)*1 + var(--j)*1.75);
    text-align: center;
    text-transform: uppercase;
    clip-path: circle(calc(var(--i)*33.7041rem + var(--j)*294.68067vw) at calc(var(--i)*calc(var(--p)*100% - var(--s)*22.0166rem) + var(--j)*50%) calc(var(--i)*50% + var(--j)*-277.68067vw));
  }
  h3:before {
    grid-row: 1/span calc(1 + var(--j));
    font-size: calc(var(--i)*3em + var(--j)*1em);
    content: counter(idx,decimal-leading-zero);
  }

  h4 {
    grid-column: calc(var(--i)*(4*var(--q) + var(--p)) + var(--j))/span 1;
    grid-row: calc(var(--i) + 2*var(--j))/span 1;
    font-size: 2.25rem;
    font-weight: 500;
    text-transform: capitalize;
  }

  p {
    grid-column: calc(var(--i)*(4*var(--q) + var(--p)) + var(--j))/span calc(var(--i) + 2*var(--j));
    grid-row: calc(2*var(--i) + 3*var(--j))/span 1;
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
          <li class="breadcrumb-item active" aria-current="page">Waste Segregation</li>
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
              <h2><span>Waste </span>Segregation</h2>
              <img src="{{ asset('img/core-img/decor.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-lg-12">
          <div class="about-us-content content mb-30">
            <article data-icon="🍓" style="--hue0: 329; --sat0: 100%; --lum0: 70%; --hue1: 337; --sat1: 99%; --lum1: 58%; --idx: 0;">
              <h3>option</h3>
              <h4>gingerbread</h4>
              <p>Cake muffin donut chocolate cake jelly sesame wafer tart pie muffin.</p>
            </article>
            <article data-icon="🍋" style="--hue0: 48; --sat0: 99%; --lum0: 58%; --hue1: 33; --sat1: 94%; --lum1: 55%; --idx: 1;">
              <h3>option</h3>
              <h4>brownie</h4>
              <p>Cake cookie lemon muffin plum. Orange topping macaroon chocolate.</p>
            </article>
            <article data-icon="🍇" style="--hue0: 272; --sat0: 46%; --lum0: 54%; --hue1: 273; --sat1: 78%; --lum1: 48%; --idx: 2;">
              <h3>option</h3>
              <h4>ice cream</h4>
              <p>Cake muffin donut chocolate cake jelly sesame wafer tart pie muffin.</p>
            </article>
            <article data-icon="🍐" style="--hue0: 174; --sat0: 84%; --lum0: 34%; --hue1: 193; --sat1: 99%; --lum1: 27%; --idx: 3;">
              <h3>option</h3>
              <h4>lava cake</h4>
              <p>Cake cookie lemon muffin plum. Orange topping macaroon chocolate.</p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
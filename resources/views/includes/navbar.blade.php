<style type="text/css">
	body { 
	   overflow-x: hidden;
	}
	.brand-name {
	  font-size: 27px !important;
	  font-weight: 800 !important;
	  color: #77b122 !important;
	  font-family: Karla,sans-serif !important;
	  margin-left: 10px !important;
	}
	.sponsor-area {
		margin: auto;
		text-align: center;
	}
	.sponsor-area span{
		font-family: "Times New Roman", Times, serif;
		font-size: 32px;
		letter-spacing: 2px;
		word-spacing: 2px;
		color: #FF5900;
		font-weight: 700;
		text-decoration: none;
		text-transform: none;
	}
	.sponsor-area p{
		font-size: 20px;
	}
	.breakpoint-off .classynav ul li .dropdown {
		width: 235px !important;
	}
	@media only screen and (max-width: 767px) {
		.brand-name {
		  font-size: 16px !important;
		}
		.sponsor-area span{
			display: block;
			font-size: 21px;
		}
	}
</style>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
<!-- Navbar Area -->
<div class="famie-main-menu">
  <div class="classy-nav-container breakpoint-off">
	<div class="container">
	  <!-- Menu -->
	  <nav class="classy-navbar justify-content-between" id="famieNav">
		<!-- Nav Brand -->
		<a href="{{route('show.website')}}"><img src="{{asset('website/img/core-img/logo.jpg')}}" alt=""><span class="brand-name">Swachha Dombivli Abhiyan</span></a>
		<!-- Navbar Toggler -->
		<div class="classy-navbar-toggler">
		  <span class="navbarToggler"><span></span><span></span><span></span></span>
		</div>
		<!-- Menu -->
		<div class="classy-menu">
		  <!-- Close Button -->
		  <div class="classycloseIcon">
			<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
		  </div>
		  <!-- Navbar Start -->
		  <div class="classynav">
			<ul>
			  <li class="{{ Request::is('waste-classification') ? 'active' : '' }}"><a href="{{route('waste_classification')}}">Types of Waste</a></li>
			  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="#">About</a>
			  	<ul class="dropdown">
					  <li><a href="{{route('about')}}">About Us</a></li>
					  @if (!Auth::check())
					  <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{route('register')}}">Join us</a></li>
					  <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{route('login')}}">Login</a></li>
					  @endif
					</ul>
				</li>
			  <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{route('show.blog_list')}}">Blog</a></li>
			  <li class="{{ Request::is('campaigns/waste-management*') ? 'active' : '' }}"><a href="#">Campaign</a>
				<ul class="dropdown">
				  <li class="{{ Request::is('campaigns/waste-management') ? 'active' : '' }}"><a href="{{route('waste_management')}}">Waste Management</a></li>
				  <li class="{{ Request::is('info/plantation') ? 'active' : '' }}"><a href="{{route('show_page',['slug'=>'plantation'])}}">Plantation</a></li>
				  <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{route('activities')}}">Activities</a></li>
				  <li><a href="{{route('recycler_association')}}">Bhangarwala Association</a></li>
				  <li><a href="{{route('teachers_association')}}">Teachers Association</a></li>
				  <li class=""><a href="#">Role Model</a>
				  	<ul class="dropdownd">
				  		<li><a href="{{route('show_page',['slug'=>'sarvoday-nagar'])}}">Sarvoday Nagar</a></li>
				  		<li><a href="{{route('show_page',['slug'=>'sudama-vatika-society'])}}">Sudama Vatika Society</a></li>
				  	</ul>
				  </li>
				  <li><a href="{{route('success_stories_index')}}">Success Stories</a></li>
				  <li class="{{ Request::is('info/lectures-on-environment') ? 'active' : '' }}"><a href="{{route('show_page',['slug'=>'lectures-on-environment'])}}">Lectures on Environment</a></li>
				  <li class=""><a href="#">Be Cautious</a>
				  	<ul class="dropdownd">
				  		<li><a href="{{route('show_page',['slug'=>'biodegradable-plastic'])}}">Biodegradable Plastic</a></li>
				  	</ul>
				  </li>
				</ul>
			  </li>
			  <li class="{{ Request::is('solutions/*') ? 'active' : '' }}"><a href="#">Solutions</a>
				<ul class="dropdown">
				  <li class=""><a href="#">Domestic</a>
				  	<ul class="dropdownd">
					  <li class="{{ Request::is('info/magic-bucket') ? 'active' : '' }}"><a href="{{route('show_page',['slug'=>'magic-bucket'])}}">Magic Bucket</a></li>
					  <li class="{{ Request::is('info/other-wet-waste-solutions') ? 'active' : '' }}"><a href="{{route('show_page',['slug'=>'other-wet-waste-solutions'])}}">Wet Waste Solutions</a></li>
					  <li class="{{ Request::is('info/kitchen-kompost') ? 'active' : '' }}"><a href="{{route('show_page',['slug'=>'kitchen-kompost'])}}">Kitchen Kompost</a></li>
					</ul>
				  </li>
				  <li class=""><a href="{{route('show_page',['slug'=>'nappies-disposal'])}}">Nappies Disposal</a>
				  <li class=""><a href="{{route('show_page',['slug'=>'nirmalya-composting'])}}">Nirmalya Composting</a>
				  <li class="{{ Request::is('eco-friendly-products') ? 'active' : '' }}"><a href="{{route('eco_friendly_products')}}">Eco Friendly Products</a>
				</ul>
			  </li>
			  <!--<li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{route('contact_us')}}">Contact</a></li>-->
			  <li class="{{ Request::is('downloads') ? 'active' : '' }}"><a href="#">Downloads</a>
			  	<ul class="dropdown">
				  <li><a href="{{route('kdmc_downloads')}}">KDMC Documents</a></li>
				  <!--<li><a href="#">Other Useful Documents</a></li>-->
				</ul>
			  </li>
			  @if (Auth::check())
			  <li><a href="{{route('logout')}}">Logout</a></li>
			  @else
			  <!-- <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{route('register')}}">Join us</a></li>
			  <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{route('login')}}">Login</a></li> -->
			  @endif
			</ul>
			<!-- Search Icon -->
			<!-- 
			<div id="searchIcon">
			  <i class="icon_search" aria-hidden="true"></i>
			</div> 
			-->
		  </div>
		  <!-- Navbar End -->
		</div>
	  </nav>
	  <!-- Search Form -->
	  <div class="search-form">
		<form action="#" method="get">
		  <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
		  <button type="submit" class="d-none"></button>
		</form>
		<!-- Close Icon -->
		<div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
	  </div>
	</div>
  </div>
</div>
</header>
<!-- ##### Header Area End ##### -->
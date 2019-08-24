
<style type="text/css">
	  .brand-name {
	      font-size: 27px !important;
	      font-weight: 800 !important;
	      color: #77b122 !important;
	      font-family: Karla,sans-serif !important;
	      margin-left: 10px !important;
	  }
	  @media only screen and (max-width: 767px) {
	  	.brand-name {
	      font-size: 16px !important;
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
		<a href="{{route('home')}}"><img src="{{asset('website/img/core-img/logo.jpg')}}" alt=""><span class="brand-name">Swachha Dombivli Abhiyaan</span></a>
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
			  <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
			  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
			  <li class="{{ Request::is('projects/waste-management/*') ? 'active' : '' }}"><a href="#">Campaign</a>
				<ul class="dropdown">
				  <li class="{{ Request::is('projects/waste-management/awarness-program') ? 'active' : '' }}"><a href="{{route('waste_management_awareness')}}">Waste Management</a></li>
				  <li class="{{ Request::is('projects/waste-management/activities') ? 'active' : '' }}"><a href="{{route('waste_management_activities')}}">Activities</a></li>
				</ul>
			  </li>
			  <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{route('contact_us')}}">Contact</a></li>
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
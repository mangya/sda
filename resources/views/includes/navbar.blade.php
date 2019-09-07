<style type="text/css">
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
			  <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('show.website')}}">Home</a></li>
			  <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
			  <li class="{{ Request::is('campaigns/waste-management*') ? 'active' : '' }}"><a href="#">Campaign</a>
				<ul class="dropdown">
				  <li class="{{ Request::is('campaigns/waste-management') ? 'active' : '' }}"><a href="{{route('waste_management')}}">Waste Management</a></li>
				  <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{route('activities')}}">Activities</a></li>
				  <li><a href="{{route('recycler_association')}}">Bhangarwala Association</a></li>
				  <li><a href="{{route('teachers_association')}}">Teachers Association</a></li>
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
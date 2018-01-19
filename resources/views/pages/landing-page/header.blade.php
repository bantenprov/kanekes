<header class="landing-header" style="background-image: url({{ asset('assets/images/slides/1.jpg') }});">
    <div class="container">
        <h2 class="landing-header-title animated bounceIn">@yield('header-title')</h2>
        <p class="landing-header-description">@yield('header-description')</p>
        <p></p>
       	<div class="row col-md-12">
	    	<div class="col-md-3"></div>
				<div class="col-md-6 animated fadeInLeft">
		  			<form class="navbar-form" role="search">
		    		<div class="input-group">
		      		<input class="form-control bg-light" placeholder=" Cari Data, Tema dan Organisasi…" name="srch-term" id="srch-term" type="text">
		      		
		        	<button class="btn btn-primary" type="submit"><i class="fa fa-search fa-lg"></i></button>
		      		
		    		</div>
		  			</form>
				</div>
			<div class="col-md-3"></div>
   		 </div>
   	</div>

</header>

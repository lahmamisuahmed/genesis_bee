<!DOCTYPE HTML>
<html class="no-js">

<!-- Mirrored from html.imithemes.com/cameroll/archive-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 03:48:22 GMT -->
@include('contents.header')
<body class="gallery">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
  @include('contents.nav')
  <div class="clearfix"></div>
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
    		<ul class="grid-holder col2">
            	<li class="grid-item">
                	<a href="photography">
                    	<img src="{{ asset('images/slide5.jpg') }}" class="img-responsive" alt="">
                    	<span class="grid-hover">
                        	<span class="grid-hover-central">
                            <span class="grid-hover-inner">
                            		 
                            		<strong>Photography</strong>
                            		
                         		</span>
                        	</span>
                     	</span>
                     	<span class="action-port">
                        	<span class="gallery-permalink pull-right">view gallery <i class="fa fa-long-arrow-right"></i></span>
                        	
                     	</span>
                 	</a>
              	</li>

                    <li class="grid-item">
                        <a href="photography">
                            <img src="{{ asset('images/nslide6.jpg') }}" class="img-responsive" alt="">
                            <span class="grid-hover">
                                <span class="grid-hover-central">
                                <span class="grid-hover-inner">
                                         
                                        <strong>Videography</strong>
                                        
                                    </span>
                                </span>
                            </span>
                            <span class="action-port">
                                <span class="gallery-permalink pull-right">view gallery <i class="fa fa-long-arrow-right"></i></span>
                                
                            </span>
                        </a>
                    </li>
                    
          	</ul>
    </div>
  </div>
	@include('contents.footer')
</body>

</html>

	<!--What our client say -->
			<div class="col-md-12 padding-margin-none testimonial-sec">
		<div class="inner-wrapper">
			<h2>What  Our Clients Say</h2>
				<div class="inner-wrapper sm">
				<ul>
					<li>

						<p>The team at AgileBudi have been exceptional on all of the Projects we have worked on together . They respond quickly to any queries,report issues clearly and their communication with us and our development teams is excellent. I would highly....</p>
						<h2>Jean O'Connor</h2>
					</li>
				</ul>

				<span class="arrows"><a href="javascript:;"></a></span>
				<span class="arrows next"><a href="javascript:;"></a></span>
				</div>
		</div>
	</div>

	<!--footer -->
	<div class="col-md-12 padding-margin-none footer-sec">
		<div class="inner-wrapper">
			<ul>
				<li>
					<h4>About Us</h4>
						<ul>
							<li><a href="company_overview.php" >Company Overview</a></li>
							<li ><a href="whyus.php" >Why Us?</a></li>
							<li><a href="our_expertise.php" >Our Expertise</a></li>
							<li ><a href="how_we_work.php">How We Work</a></li>
							<li ><a href="cients_benefit.php">Benefit to Our Clients</a></li>
							<li ><a href="engagement_model.php">Engagement Model</a></li>
						</ul>
				</li>
				<li>
					<h4>Solutions</h4>
						<ul>
                    	<li><a href="web_development.php" class="active">Web Development</a></li>
						<li><a href="web_based_app.php">Web-based Applications</a></li>
						<li><a href="mobile_app.php">Mobile Apps</a></li>
						<li><a href="hybrid_app.php">Hybrid Applications & Systems</a></li>
						<li><a href="web_design.php">Web Designing</a></li>
                        <li><a href="quality_assurance.php">Quality Assurance</a></li>
                        <li><a href="testing.php">Testing</a></li>
<li><a href="code_review.php">Code Review</a></li>
                        
                    </ul>
				</li>
				<li>
					<h4>Services</h4>
						<ul>
								<li><a href="resource_identification.php">Resource Identification</a></li>
						<li><a href="placement_assimilation.php">Placement & Assimilation</a></li>
						<li><a href="oversight_resources.php">Oversight of Resources</a></li>
			
						</ul>
				</li>
			</ul>

			<div class="contact">
				<div><i><img src="assets/images/phone-icon.png"></i> +44 7827 012 437</div>
				<div><i><img src="assets/images/email-icon.png"></i> info@agilebudi.co.uk</div>
				<div>			
					<div class="request-btn bottom-btn">
				<div class="btn">
					<a href="request_call.php">Request a Call</a>
				</div>
			</div></div>
			</div>

		</div>
	</div>

	<!--contact btm -->
	<div class="col-md-12 padding-margin-none bottom-sec">
		<div class="inner-wrapper">
			<p>2015 AgileBudi | All rights reserved</p>

		</div>
	</div>
       <script src="assets/js/jquery-1.10.2.min.js"></script>
     <script src="assets/js/jquery.navgoco.js"></script>
   
    
    <script>
    $(document).ready(function(){												
       
       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      	$('#nav-close').on('click',function(e){
      		e.preventDefault();
      		$('body').removeClass('nav-expanded');
      	});
      	
      	
      	// Initialize navgoco with default options
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });
  
        	
      });
      </script>

</body>
</html>
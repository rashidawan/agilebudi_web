	<?php include('header.php'); ?>
	<!--banner -->
	<div class="col-md-12 padding-margin-none page_head ">
    	<div class="container">
		<div class="col-md-6 page-heading">
        	<h2>Contact Us</h2>
        </div>
       
        </div>
	</div>

	<div class="row">
    	<div class="container">
        	<div class="col-md-8 col-sm-8 pg_sec">
            	<p>Do you have any questions? Please contact us at the numbers listed below or feel free to send us a message using the form.<br><br>
                
        

<i class="fa fa-phone"></i><span class="cnt-dtl"> +44 7827 012 437</span><br>
<i class="fa fa-envelope"></i><span class="cnt-dtl">info@agilebudi.co.uk</span>
</p>
            </div>
            <div class="col-md-4 col-sm-4 padding-margin-none pg_sec_side">
            	<h2>Send us a Message</h2>
             
             
             <form id="form" class="contact" method="post" action="#">
                                <div class="form">
                                    <div class="name col-6 column">
                                        <input tabindex="1" name="name" id="name" type="text" placeholder="Name (*)"/>
                                    </div>
                                    <div class="email col-6 column">
                                        <input tabindex="2" name="email" id="email" type="text" placeholder="Email (*)"/>
                                    </div>
                                    <div>
                                        <textarea name="message" cols="10" rows="5" id="message" placeholder="Your message here..."></textarea>
                                    </div>
                                </div>
                                <div id="submit">
                                    <input id="send" class="btn" name="send" value="send" type="button" />
                                </div>
                            </form>
                            <div id="response"></div>
                            

            </div>
        </div>
    </div>

	


	
	 <script type="text/javascript">
$(function(){
	
		$("#send").on('click',function(){
					var valid = '';
                    var isr = ' is required!</p>';
                    var name = $("#name").val();
                    var mail = $("#email").val();
                    var messaggio = $("#message").val();
                
                    if (name.length<1) {
                        valid += '<p>*Valid name'+isr;
                    }
                    if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
                        valid += '<p>*Valid email address'+isr;
                    }
					
					if (valid!='') {
                        $("#response").fadeIn("slow");
                        $("#response").php(valid);

                        $('#send').removeClass('normal').addClass('error-button');
                       
                        setTimeout(function() {
                            $('#send').removeClass('error-button').addClass('normal');
                            $('#send').val('send');
                            $("#response").fadeOut("slow"); 
                        }, 3000);                         
                    }
                
                    else {
                        $('#send').val('wait...');
						$.ajax({    
							type: "POST",
							url: "mailer.php",
							data: $("#form").serialize(),
							cache: false,
							
						success: function(html){
							console.log(html);
							$("#response").php(html).show();
							$('#send').val('send');
							$("#name,#email,#message").val('');          
						}
						
						});
                    }
		});

 
	
	
});
	
</script>

		<?php include('footer.php'); ?>
      
     


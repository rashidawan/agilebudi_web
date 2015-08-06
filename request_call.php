
		<?php include('header.php'); ?>
	<!--banner -->
	<div class="col-md-12 padding-margin-none page_head ">
    	<div class="container">
		<div class="col-md-6 page-heading">
        	<h2>Request a Call</h2>
        </div>
       
        </div>
	</div>

	<div class="row">
    	<div class="container">
        	
            <div class="col-md-9 pg_sec">
             <p> <strong>Please fill out the form below to request a call</strong>.<br>
Thank you for your interest in AgileBudi. Please enter your contact informations below and a AgileBudi representative will call you within the next business day.
</p>
                
                
         
          
             
             
             <form id="form" class="contact" method="post" action="#">
                                <div class="form">
                                    <div class="name col-lg-6">
                                        <input tabindex="1" name="name" id="name" type="text" placeholder="Name (*)"/>
                                    </div>
                                    <br clear="all">
                                    <div class="email col-lg-6">
                                        <input tabindex="2" name="email" id="email" type="text" placeholder="Email (*)"/>
                                    </div>
                                      <br clear="all">
                                    <div class="email col-lg-6">
                                        <input tabindex="2" name="phone" id="phone" type="text" placeholder="Phone (*)"/>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" cols="10" rows="5" id="message" placeholder="Your message here..."></textarea>
                                    </div>
                                </div>
                                <div id="submit" class="col-lg-12">
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
					var phone = $("#phone").val();
                    var messaggio = $("#message").val();
                
                    if (name.length<1) {
                        valid += '<p>*Valid name'+isr;
                    }
					
                    if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
                        valid += '<p>*Valid email address'+isr;
                    }
					 if (phone.length<1) {
                        valid += '<p>*Valid Phone No'+isr;
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
							url: "mail_rqst.php",
							data: $("#form").serialize(),
							cache: false,
							
						success: function(html){
							console.log(html);
							$("#response").php(html).show();
							$('#send').val('send');
							$("#name,#email,#phone,#message").val('');          
						}
						
						});
                    }
		});

 
	
	
});
	
</script>
		<?php include('footer.php'); ?>
      
      

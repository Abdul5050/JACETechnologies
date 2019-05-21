// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
              name: {
		    required: true
			
			},
               phone_number: {
		    required: true
			
			},
               email_address: {
            required: true,
            email: true
            },
			user_name: {
		    required: true,
			minlength: 3
			},
						
	   },
       messages:
	   {
            name: "please enter your name",
            phone_number: "please enter phone number",
            email_address: "please enter a valid email address",
            user_name: "please enter user name"
            
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}else if(data==2){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry username already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
								$("#success").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Your registration is successfull and an email message has been sent\n\
                        to your email address.Please check your email address to get your login information</div>');
							$("#btn-submit").html('  Registered');					
										
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});
<html>
<body>
<?php
	
	


	
	//echo $GameName;
	//	echo $row->GameName;
?>
















<form name="sentMessage" id="contactForm" novalidate method="post" action='<?php echo base_url();?>index.php/Account/send_email'>
					
					
					
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." value="<?php echo set_value('name'); ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." value="<?php echo set_value('phone'); ?>">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." value="<?php echo set_value('email'); ?>">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" value="<?php echo set_value('message'); ?>"></textarea>
                        </div>
                    </div>
					
					
				
					
					<!--
					value="<//?php echo set_value('password'); ?>"
					
					
					<div id="success"></div>
					-->
            
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>

</body>

</html>
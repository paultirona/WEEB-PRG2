<html>
<body>
<?php
	
	


	
	//echo $GameName;
	//	echo $row->GameName;
?>



















	<form method="post" action='<?php echo base_url();?>index.php/Account/send_email_test' accept-charset="utf-8">
					
					
					
	
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>">
                           
                 
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">
           
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email"  value="<?php echo set_value('email'); ?>">
                
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" maxlength="999" style="resize:none" value="<?php echo set_value('message'); ?>"></textarea>
               
					
					
					
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
    </form>

</body>

</html>
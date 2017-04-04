<html>
<body>
<?php
	
	


	
	//echo $GameName;
	//	echo $row->GameName;
?>


<?php

					foreach($trans->result() as $row)
					{
						?><tr>
						<td><?php echo $row->TransacID;?></td>
						<td><?php echo $row->GameName;?></td>
						<td><?php echo $row->TransacDate;?></td>
						<td><?php echo $row->Price;?></td>
						</tr>
						<?php echo "<br>"?>
					
<?php 				}
?>

</body>

</html>
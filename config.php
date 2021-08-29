				<?php

				$hostname="35.184.83.131";
				$username= "root";
				$password= "vinayadmin";
				$database="db_evoting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>
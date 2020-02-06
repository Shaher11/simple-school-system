
				<?php	
				
						$index=0;
		    			foreach ($school as $key=>$value):
		    				
		    				foreach ($value as $add=>$values):
				?> 

		 				<table>
				 			<tr>
						        <td ><?php  echo "Key: $key / Value: $values<br />"; ?>  </td>


						        
					    	</tr>

				   	    </table>	

				<?php 
					 		endforeach;
					 		
						endforeach;


					// function transpose($values) {
					//     array_unshift($values, null);
					//     return call_user_func_array('array_map', $values);
					// }	
					
				?>
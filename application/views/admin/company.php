<div >
	<div class="thumbnail"><h1>PERUSAHAAN</H1></div>
<div class="thumbnail">	
   <?php echo validation_errors(); ?>
   <?php 
   		if($mode=='view'){
			echo form_open('company/update');
			$disabled='disable';
		} else {
			$disabled='';
   			echo form_open('company/add'); 
   		}
		
   ?> 
   
   <table>
	<tr>
		<td>Kode</td><td>
		<?php
		if($mode=='view'){
			echo $company_code;
			echo form_hidden('company_code',$company_code);
		} else { 
			echo form_input('company_code',$company_code);
		}		
		?></td>
		
		<td><input type="submit" value="Save"/></td>
		
	</tr>	 
       <tr>
            <td>Nama Perusahaan</td><td><?php echo form_input('company_name',$company_name,
            'style="width:200px"');?></td>

       </tr>
	<tr>	 
		<td>Alamat</td><td><?php echo form_input('street',
                        $street,'style="width:300px"');?></td>		 
	</tr>
	<tr><td>Kota</td><td><?php echo form_input('city_state_zip_code',
                        $city_state_zip_code,'style="width:300px"');?></td></tr>
	<tr><td>Telp</td><td><?php echo form_input('phone_number',
                        $phone_number);?></td></tr>
	<tr><td>Fax</td><td><?php echo form_input('fax_number',
                        $fax_number);?></td></tr>
	<tr><td>Email</td><td><?php echo form_input('email',
                        $email);?></td></tr>
      	
	 <tr><td>&nbsp;</td></tr>
   </table>
   </form>
 </div>
 </div>  
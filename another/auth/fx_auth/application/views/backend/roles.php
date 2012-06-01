<html>
	<head><title>Manage roles</title></head>
	<body>
	<?php  				
		$this->load->library('table');
		
		// Show error
		echo validation_errors();
		
		// Build drop down menu
		$options[0] = 'None';
		foreach ($roles as $role)
		{
			$options[$role->id] = $role->name;
		}
	
		// Build table
		//$this->table->set_heading('', 'ID', 'Name', 'Parent ID');
		
		
		{			
			//$this->table->add_row(form_checkbox('checkbox_'.$role->id, $role->id), $role->id, $role->name, $role->parent_id);
		}
		
		// Build form
		echo form_open($this->uri->uri_string());
		
		echo form_label('Role parent', 'role_parent_label');
		echo form_dropdown('role_parent', $options); 
				
		echo form_label('Role name', 'role_name_label');
		echo form_input('role_name', ''); 
		
		echo form_submit('add', 'Add role'); 
		echo form_submit('delete', 'Delete selected role');
				
		echo '<hr/>';

	?>
	<table border="1" cellpadding="5">
		<tr>
			<td>&nbsp;</td>
			<td>ID</td>
			<td>Name</td>
			<td>Parent ID</td>
		</tr>
		<?php foreach ($roles as $role) { ?>
		<tr>
			<td><input type="checkbox" name="checkbox_<?=$role->id?>" value="<?=$role->id?>"  /></td>
			<td><?=$role->id?></td>
			<td><?=$role->name?></td>
			<td><?=$role->parent_id?></td>
		</tr>
		<?php } ?>
	</table>
	<?php
		
		// Show table
		//echo $this->table->generate(); 
		
		echo form_close();
			
	?>

	</body>
</html>
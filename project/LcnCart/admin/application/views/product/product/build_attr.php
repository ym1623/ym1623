<?php foreach($attributes as $value) :  ?>
	  <div class="x-form-item  <?php echo 'attr_set_'.$value['attr_set_id'];?>"  >
	  <label  style="width: 85px;color:dimgray;" class="x-form-item-label"><?php echo $value['attr_name'] ?>:</label>
	  <div class="x-form-element"  style="padding-left: 80px;">
	  <?php
	  if($value['attr_type'] != 'checkbox'){	
		  echo  build_attr_html($value['attr_type'],
								$value['id'],
								$value['option_values_array'],
								$value['default_value']);
	  }else{
		  echo build_attr_html($value['attr_type'],
							   $value['id'],
							   $value['option_values_array'],
							   array($value['default_value']));
	  }	  
	  ?>			  
	  </div>
	  <div class="x-form-clear-left"></div>
	  </div>
<?php endforeach; ?>
<?php
	$site = new \OssnSite();
	$settings = $site->getSettings('AvailableLanguages.config');
	$settings = json_decode($settings, true);
	
	$langs = ossn_get_installed_translations(true);
	ksort($langs);
?>
<div class="avail-langs-admin-list">
    <div class="alert alert-info">
    	<?php echo ossn_print('availablelanguages:info');?>
    </div>
	<?php 
	foreach($langs  as $key => $item){
			$args = array(
						'name' => "langs[$key]",
						'label' => $item,
			);
			$args['value'] = false;
			if(in_array($key, $settings)){
				$args['value'] = true;
				$args['checked'] = 'checked';	
			}			
			echo ossn_plugin_view('input/checkbox', $args);
	}
	?>
</div>
<hr class="bg-default border-2 border-top border-default">
<div>
	<input type="submit" class="btn btn-success btn-sm" value="<?php echo ossn_print('save');?>" />
</div>
<style>
	.avail-langs-admin-list {
		
	}
	.avail-langs-admin-list .checkbox-block {
		margin-bottom:5px;
	}
	.avail-langs-admin-list .checkbox-block span {
		margin-left:10px;
	}
	.avail-langs-admin-list .ossn-checkbox-input {
   	 	width: 20px;
    	height: 20px;
		cursor:pointer;
    	float: left;		
	}
</style>
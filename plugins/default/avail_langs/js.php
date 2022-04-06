<?php
	$site = new \OssnSite();
	$settings_json = $site->getSettings('AvailableLanguages.config');
	$settings = json_decode($settings_json, true);
	if(isset($settings) && !empty($settings)){ ?>
<script>
	$(document).ready(function(){
			var $langs = <?php echo $settings_json;?>;		
			$(".ossn-dropdown-input[name='language'] option").each(function(){
					$key = this.value;
					if(!$langs.includes($key)){
						$(this).remove();	
					}
			});
	});
</script>
<?php } ?>
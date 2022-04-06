<?php
/**
 * Open Source Social Network
 *
 * @package   CDN Storage
 * @author    Engr.Syed Arsalan Hussain Shah
 * @copyright (C) Engr.Syed Arsalan Hussain Shah
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$langs = input('langs');
if(empty($langs)){
		ossn_trigger_message(ossn_print('availablelanguages:save:error'), 'error');
		redirect(REF);	
}
$options = json_encode(array_keys($langs));
$setting = new OssnSite();
if($setting->setSetting('AvailableLanguages.config', $options)) {
		ossn_trigger_message(ossn_print('settings:saved'), 'success');
		redirect(REF);
}
ossn_trigger_message(ossn_print('availablelanguages:save:error'), 'error');
redirect(REF);
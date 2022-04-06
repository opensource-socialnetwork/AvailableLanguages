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
define('__AvailableLanguages__', ossn_route()->com . 'AvailableLanguages/');
function avail_langauges_init(): void {
		ossn_register_com_panel('AvailableLanguages', 'settings');
		if(ossn_isAdminLoggedin()) {
				ossn_register_action('admin/avail_langs', __AvailableLanguages__ . 'actions/settings.php');
		}
		if(ossn_isLoggedin()){
			ossn_extend_view('forms/OssnProfile/edit', 'avail_langs/js');
		}
}
ossn_register_callback('ossn', 'init', 'avail_langauges_init');
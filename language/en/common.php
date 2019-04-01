<?php
/**
 *
 * Groups++. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'GROUPSPP_PAGE'			=> 'Groupspp Page',
	'GROUPSPP_HELLO'		=> 'Hello %s!',
	'GROUPSPP_GOODBYE'		=> 'Goodbye %s!',
	'GROUPSPP_EVENT'		=> 'Groupspp Event',

	'ACP_GROUPSPP_GOODBYE'			=> 'Should say goodbye?',
	'ACP_GROUPSPP_SETTING_SAVED'	=> 'Settings have been saved successfully!',

	'SENKY_GROUPSPP_NOTIFICATION'	=> 'Groups++ notification',

	'VIEWING_SENKY_GROUPSPP'			=> 'Viewing Groups++ page',
));

<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 saat',
	'30_MINS'		=> '30 dakika',
	'6_HOURS'		=> '6 saat',

	'ACP_BAN_EXPLAIN'	=> 'Burada kullanıcıların adına, IP adresine veya eposta adresine göre banlanmasını kontrol edebilirsiniz. Bu yöntemler kullanıcının panonun herhangi bir yerine ulaşmasını engeller. Dilerseniz yasağın nedenini kısa bir şekilde (maksimum 3000 karakter) belirtebilirsiniz. Bu yönetici günlüğünde gösterilecektir. Banlamanın süresi de belirtilebilir. If you want the ban to end on a specific date rather than after a set time period select <span style="text-decoration: underline;">Until -&gt;</span> for the ban length and enter a date in <kbd>YYYY-MM-DD</kbd> format.',

	'BAN_EXCLUDE'			=> 'Banlamadan hariç tut',
	'BAN_LENGTH'			=> 'Ban süresi',
	'BAN_REASON'			=> 'Ban sebebi',
	'BAN_GIVE_REASON'		=> 'Banlanana gösterilen sebep',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Ban listesi başarıyla güncellendi.',
	'BANNED_UNTIL_DATE'		=> '%s tarihine kadar', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (%2$s tarihine kadar)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Bir veya daha fazla eposta adresini banlayın',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Enable this to exclude the entered email address from all current bans.',
	'EMAIL_BAN_EXPLAIN'			=> 'To specify more than one email address enter each on a new line. To match partial addresses use * as the wildcard, e.g. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Banlı eposta adresi yok',
	'EMAIL_UNBAN'				=> 'Un-ban or un-exclude emails',
	'EMAIL_UNBAN_EXPLAIN'		=> 'You can unban (or un-exclude) multiple email addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded email addresses are emphasised.',

	'IP_BAN'					=> 'Bir veya daha fazla IP banla',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Enable this to exclude the entered IP from all current bans.',
	'IP_BAN_EXPLAIN'			=> 'To specify several different IPs or hostnames enter each on a new line. To specify a range of IP addresses separate the start and end with a hyphen (-), to specify a wildcard use “*”.',
	'IP_HOSTNAME'				=> 'IP addresses or hostnames',
	'IP_NO_BANNED'				=> 'Banlı IP adresi yok',
	'IP_UNBAN'					=> 'Un-ban or un-exclude IPs',
	'IP_UNBAN_EXPLAIN'			=> 'You can unban (or un-exclude) multiple IP addresses in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded IPs are emphasised.',

	'LENGTH_BAN_INVALID'		=> 'The date has to be formatted <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Banlandı',
	'OPTIONS_EXCLUDED'			=> 'Hariç tutuldu',

	'PERMANENT'		=> 'Kalıcı',

	'UNTIL'						=> 'Tarihine kadar',
	'USER_BAN'					=> 'Bir veya daha fazla kullanıcıyı kullanıcı adıyla banlayın',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Enable this to exclude the entered users from all current bans.',
	'USER_BAN_EXPLAIN'			=> 'You can ban multiple users in one go by entering each name on a new line. Use the <span style="text-decoration: underline;">Find a member</span> facility to look up and add one or more users automatically.',
	'USER_NO_BANNED'			=> 'Banlı kullanıcı adı yok',
	'USER_UNBAN'				=> 'Un-ban or un-exclude users by username',
	'USER_UNBAN_EXPLAIN'		=> 'You can unban (or un-exclude) multiple users in one go using the appropriate combination of mouse and keyboard for your computer and browser. Excluded users are emphasised.',
));

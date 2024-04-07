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

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> 'Seçilen grup zaten varsayılan grubunuz.',
	'ALREADY_IN_GROUP'		=> 'Seçilen grubun zaten bir üyesisiniz.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Seçilen gruba zaten katılma isteğinde bulundunuz.',

	'CANNOT_JOIN_GROUP'		=> 'Bu gruba katılamazsınız. Yalnızca açık ve serbestçe açık gruplara katılabilirsiniz.',
	'CANNOT_RESIGN_GROUP'		=> 'Bu gruptan ayrılamazsınız. Yalnızca açık ve serbestçe açık gruplardan ayrılabilirsiniz.',
	'CHANGED_DEFAULT_GROUP'		=> 'Varsayılan grup başarıyla değiştirildi.',

	'GROUP_AVATAR'				=> 'Grup avatarı',
	'GROUP_CHANGE_DEFAULT'			=> 'Varsayılan üyeliğinizi “%s” grubu olarak değiştirmek istediğinizden emin misiniz?',
	'GROUP_CLOSED'				=> 'Kapalı',
	'GROUP_DESC'				=> 'Grup açıklaması',
	'GROUP_HIDDEN'				=> 'Gizli',
	'GROUP_INFORMATION'			=> 'Kullanıcı grubu bilgisi',
	'GROUP_IS_CLOSED'			=> 'Bu kapalı bir gruptur, yeni üyeler sadece bir grup liderinin daveti üzerine katılabilir.',
	'GROUP_IS_FREE'				=> 'Bu serbestçe açık bir gruptur, herkes katılabilir.',
	'GROUP_IS_HIDDEN'			=> 'Bu gizli bir gruptur, sadece bu grubun üyeleri üyelikleri görüntüleyebilir.',
	'GROUP_IS_OPEN'				=> 'Bu açık bir gruptur, üyeler katılmak için başvurabilir.',
	'GROUP_IS_SPECIAL'			=> 'Bu özel bir gruptur, özel gruplar pano yöneticileri tarafından yönetilmektedir.',
	'GROUP_JOIN'				=> 'Gruba katıl',
	'GROUP_JOIN_CONFIRM'			=> 'Seçilen gruba katılmak istediğinizden emin misiniz?',
	'GROUP_JOIN_PENDING'			=> 'Gruba katılma isteği',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Seçilen gruba katılma isteğinde bulunmak istediğinizden emin misiniz?',
	'GROUP_JOINED'				=> 'Seçilen gruba başarıyla katıldınız.',
	'GROUP_JOINED_PENDING'			=> 'Başarılı bir şekilde grup üyeliği isteğinde bulunuldu. Lütfen bir grup liderinin üyeliğinizi onaylamasını bekleyin.',
	'GROUP_LIST'				=> 'Kullanıcıları yönet',
	'GROUP_MEMBERS'				=> 'Grup üyeleri',
	'GROUP_NAME'				=> 'Grup adı',
	'GROUP_OPEN'				=> 'Açık',
	'GROUP_RANK'				=> 'Grup rütbesi',
	'GROUP_RESIGN_MEMBERSHIP'		=> 'Grup üyeliğinden ayrıl',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Seçilen grup üyeliğinizden ayrılmak istediğinize emin misiniz?',
	'GROUP_RESIGN_PENDING'			=> 'Beklemedeki bir grup üyeliğinden ayrıl',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Seçilen grup için beklemedeki üyeliğinizden ayrılmak istediğinize emin misiniz?',
	'GROUP_RESIGNED_MEMBERSHIP'		=> 'Seçilen gruptan başarıyla ayrıldınız.',
	'GROUP_RESIGNED_PENDING'		=> 'Beklemedeki üyeliğiniz seçilen gruptan başarıyla kaldırıldı.',
	'GROUP_TYPE'				=> 'Grup türü',
	'GROUP_UNDISCLOSED'			=> 'Gizli grup',
	'FORUM_UNDISCLOSED'			=> 'Gizli forum(lar) yönetimi',

	'LOGIN_EXPLAIN_GROUP'			=> 'Grup ayrıntılarını görüntülemek için giriş yapmanız gerekmektedir.',

	'NO_LEADERS'				=> 'Hiçbir grubun lideri değilsiniz.',
	'NOT_LEADER_OF_GROUP'			=> 'Seçilen grubun lideri olmadığınız için istenilen işlem gerçekleştirilemiyor.',
	'NOT_MEMBER_OF_GROUP'			=> 'Seçilen gruba üye olmadığınız veya üyeliğiniz henüz onaylanmadığı için istenilen işlem gerçekleştirilemiyor.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'		=> 'Varsayılan grubunuzdan ayrılmanıza izin verilmiyor.',

	'PRIMARY_GROUP'			=> 'Birincil grup',

	'REMOVE_SELECTED'		=> 'Seçileni kaldır',

	'USER_GROUP_CHANGE'		=> '“%1$s” grubundan “%2$s” grubuna',
	'USER_GROUP_DEMOTE'		=> 'Liderliği düşür',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Seçilen grup için grup liderliğinden düşmek istediğinize emin misiniz?',
	'USER_GROUP_DEMOTED'		=> 'Liderliğiniz başarıyla düşürüldü.',
));

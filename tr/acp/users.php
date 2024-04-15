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
	'ADMIN_SIG_PREVIEW'		=> 'İmza ön izleme',
	'AT_LEAST_ONE_FOUNDER'		=> 'Bu kurucuyu normal bir kullanıcı olarak değiştiremezsiniz. Bu pano için en az bir kurucunun etkin olması gerekir. Bu kullanıcının kurucu statüsünü değiştirmek istiyorsanız, önce başka bir kullanıcıyı kurucu olarak atayın.',

	'BAN_ALREADY_ENTERED'		=> 'Yasaklama daha önce başarıyla girilmişti. Ban listesi güncellenmedi.',
	'BAN_SUCCESSFUL'		=> 'Ban başarıyla girildi.',

	'CANNOT_BAN_ANONYMOUS'		=> 'You are not allowed to ban the anonymous account. Permissions for anonymous users can be set under the Permissions tab.',
	'CANNOT_BAN_FOUNDER'		=> 'You are not allowed to ban founder accounts.',
	'CANNOT_BAN_YOURSELF'		=> 'You are not allowed to ban yourself.',
	'CANNOT_DEACTIVATE_BOT'		=> 'You are not allowed to deactivate bot accounts. Please deactivate the bot within the bots page instead.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'You are not allowed to deactivate founder accounts.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'You are not allowed to deactivate your own account.',
	'CANNOT_FORCE_REACT_BOT'	=> 'You are not allowed to force reactivation on bot accounts. Please reactivate the bot within the bots page instead.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'You are not allowed to force reactivation on founder accounts.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'You are not allowed to force reactivation of your own account.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'You are not able to remove the guest user account.',
	'CANNOT_REMOVE_FOUNDER'		=> 'You are not allowed to remove founder accounts.',
	'CANNOT_REMOVE_YOURSELF'	=> 'You are not allowed to remove your own user account.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'You are not able to promote ignored users to be founders.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'You need to activate users before you promote them to founders, only activated users are able to be promoted.',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'You only need to specify this if you are changing the users email address.',

	'DELETE_POSTS'			=> 'Mesajları sil',
	'DELETE_USER'			=> 'Kullanıcıyı sil',
	'DELETE_USER_EXPLAIN'		=> 'Please note that deleting a user is final, they cannot be recovered. Unread private messages sent by this user will be deleted and will not be available to their recipients.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Successfully forced reactivation.',
	'FOUNDER'			=> 'Kurucu',
	'FOUNDER_EXPLAIN'		=> 'Founders have all administrative permissions and can never be banned, deleted or altered by non-founder members.',

	'GROUP_APPROVE'			=> 'Üye onayla',
	'GROUP_DEFAULT'			=> 'Üye için grubu varsayılan yap',
	'GROUP_DELETE'			=> 'Üyeyi gruptan çıkart',
	'GROUP_DEMOTE'			=> 'Grup liderliğini düşür',
	'GROUP_PROMOTE'			=> 'Grup liderliğine yükselt',

	'IP_WHOIS_FOR'			=> 'IP whois for %s',

	'LAST_ACTIVE'			=> 'Son aktivite',

	'MOVE_POSTS_EXPLAIN'		=> 'Please select the forum to which you wish to move all the posts this user has made.',

	'NO_SPECIAL_RANK'		=> 'Özel bir rütbe atanmamış',
	'NO_WARNINGS'			=> 'Uyarı yok.',
	'NOT_MANAGE_FOUNDER'		=> 'Kurucu statüsündeki bir kullanıcıyı yönetmeye çalıştınız. Yalnızca kurucuların diğer kurucuları yönetmesine izin verilir.',

	'QUICK_TOOLS'			=> 'Hızlı araçlar',

	'REGISTERED'			=> 'Kayıtlı',
	'REGISTERED_IP'			=> 'Kayıttaki IP',
	'RETAIN_POSTS'			=> 'Mesajları sakla',

	'SELECT_FORM'			=> 'Form seç',
	'SELECT_USER'			=> 'Kullanıcı seç',

	'USER_ADMIN'			=> 'User administration',
	'USER_ADMIN_ACTIVATE'		=> 'Hesabı aktif et',
	'USER_ADMIN_ACTIVATED'		=> 'Kullanıcı başarıyla aktif edildi.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Kullanıcı hesabındaki avatar başarıyla kaldırıldı.',
	'USER_ADMIN_BAN_EMAIL'		=> 'Ban by email',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email address banned via user management',
	'USER_ADMIN_BAN_IP'		=> 'Ban by IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP banned via user management',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Username banned via user management',
	'USER_ADMIN_BAN_USER'		=> 'Ban by username',
	'USER_ADMIN_DEACTIVATE'		=> 'Hesabı deaktif et',
	'USER_ADMIN_DEACTIVED'		=> 'Kullanıcı başarıyla deaktif edildi.',
	'USER_ADMIN_DEL_ATTACH'		=> 'Tüm ekleri sil',
	'USER_ADMIN_DEL_AVATAR'		=> 'Avatarı sil',
	'USER_ADMIN_DEL_OUTBOX'		=> 'ÖM giden kutusunu boşalt',
	'USER_ADMIN_DEL_POSTS'		=> 'Tüm mesajları sil',
	'USER_ADMIN_DEL_SIG'		=> 'İmzayı sil',
	'USER_ADMIN_EXPLAIN'		=> 'Here you can change your users information and certain specific options.',
	'USER_ADMIN_FORCE'		=> 'Force reactivation',
	'USER_ADMIN_LEAVE_NR'		=> 'Yeni Kayıtlılardan kaldır',
	'USER_ADMIN_MOVE_POSTS'		=> 'Tüm mesajları taşı',
	'USER_ADMIN_SIG_REMOVED'	=> 'Kullanıcı hesabındaki imza başarıyla kaldırıldı.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Successfully removed all attachments made by this user.',
	'USER_AVATAR_NOT_ALLOWED'	=> 'The avatar cannot be displayed because avatars have been disallowed.',
	'USER_AVATAR_UPDATED'		=> 'Successfully updated user avatars details.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'The current avatar cannot be displayed because its type has been disallowed.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Özel profil alanları',
	'USER_DELETED'			=> 'Kullanıcı başarıyla silindi.',
	'USER_GROUP_ADD'		=> 'Gruba kullanıcı ekle',
	'USER_GROUP_NORMAL'		=> 'User defined groups user is a member of',
	'USER_GROUP_PENDING'		=> 'Groups user is in pending mode',
	'USER_GROUP_SPECIAL'		=> 'Pre-defined groups user is a member of',
	'USER_LIFTED_NR'		=> 'Successfully removed the user’s newly registered status.',
	'USER_NO_ATTACHMENTS'		=> 'There are no attached files to display.',
	'USER_NO_POSTS_TO_DELETE'	=> 'The user has no posts to retain or delete.',
	'USER_OUTBOX_EMPTIED'		=> 'Successfully emptied user’s private message outbox.',
	'USER_OUTBOX_EMPTY'		=> 'The user’s private message outbox was already empty.',
	'USER_OVERVIEW_UPDATED'		=> 'Kullanıcı ayrıntıları güncellendi.',
	'USER_POSTS_DELETED'		=> 'Successfully removed all posts made by this user.',
	'USER_POSTS_MOVED'		=> 'Successfully moved users posts to target forum.',
	'USER_PREFS_UPDATED'		=> 'Kullanıcı tercihleri güncellendi.',
	'USER_PROFILE'			=> 'Kullanıcı profili',
	'USER_PROFILE_UPDATED'		=> 'Kullanıcı profili güncellendi.',
	'USER_RANK'			=> 'Kullanıcı rütbesi',
	'USER_RANK_UPDATED'		=> 'Kullanıcı rütbesi güncellendi.',
	'USER_SIG_UPDATED'		=> 'Kullanıcı imzası başarıyla güncellendi.',
	'USER_WARNING_LOG_DELETED'	=> 'Bilgi bulunmamaktadır. Muhtemelen günlük girişi silinmiştir.',
	'USER_TOOLS'			=> 'Temel araçlar',
));

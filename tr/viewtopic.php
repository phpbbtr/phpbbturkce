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
	'APPROVE'								=> 'Onayla',
	'ATTACHMENT'						=> 'Dosya eki',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dosya eki özelliği devre dışı bırakıldı.',

	'BOOKMARK_ADDED'		=> 'Konu başarıyla yer imlerine eklendi.',
	'BOOKMARK_ERR'			=> 'Konunun yer imlerine eklenmesi başarısız oldu. Lütfen tekrar deneyin.',
	'BOOKMARK_REMOVED'		=> 'Konu başarıyla yer imlerinden kaldırıldı.',
	'BOOKMARK_TOPIC'		=> 'Yer imlerine ekle',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Yer imlerinden kaldır',
	'BUMPED_BY'				=> 'En son %1$s tarafından %2$s tarihinde öne çıkarıldı.',
	'BUMP_TOPIC'			=> 'Konuyu öne çıkar',

	'DELETE_TOPIC'			=> 'Konuyu sil',
	'DELETED_INFORMATION'	=> '%1$s tarafından %2$s tarihinde silindi',
	'DISAPPROVE'					=> 'Reddet',
	'DOWNLOAD_NOTICE'		=> 'Bu gönderiye eklenen dosyaları görüntülemek için gerekli izinlere sahip değilsiniz.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'En son %3$s tarihinde %2$s tarafından olmak üzere toplamda %1$d kere düzenlendi.',
		2	=> 'En son %3$s tarihinde %2$s tarafından olmak üzere toplamda %1$d kere düzenlendi.',
	),
	'EMAIL_TOPIC'			=> 'Konuyu e-postayla gönder',
	'ERROR_NO_ATTACHMENT'	=> 'Seçilen dosya eki artık mevcut değil.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> dosyası mevcut değil.',
	'FORK_TOPIC'			=> 'Konuyu kopyala',
	'FULL_EDITOR'			=> 'Full Editör &amp; Ön izleme',

	'LINKAGE_FORBIDDEN'		=> 'Bu siteyi görüntülemeye, indirmeye veya bu siteye bağlantı vermeye yetkili değilsiniz.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Bu konu hakkında bilgilendirildiniz, görüntülemek için lütfen giriş yapın.',
	'LOGIN_VIEWTOPIC'		=> 'Yönetim bu konuyu görüntülemeniz için kayıtlı ve giriş yapmış olmanızı gerektiriyor.',

	'MAKE_ANNOUNCE'				=> '“Duyuru” olarak değiştir',
	'MAKE_GLOBAL'				=> '“Genel Duyuru” olarak değiştir',
	'MAKE_NORMAL'				=> '“Normal Konu” olarak değiştir',
	'MAKE_STICKY'				=> '“Sabit” olarak değiştir',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong> seçenek seçebilirsiniz',
		2	=> '<strong>%d</strong> seçeneğe kadar seçebilirsiniz',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> eki artık kullanılamıyor',
	'MOVE_TOPIC'				=> 'Konuyu taşı',

	'NO_ATTACHMENT_SELECTED'=> 'İndirilecek ya da görüntülenecek bir ek seçmediniz.',
	'NO_NEWER_TOPICS'		=> 'Bu forumda daha yeni konu bulunmamaktadır.',
	'NO_OLDER_TOPICS'		=> 'Bu forumda daha eski konu bulunmamaktadır.',
	'NO_UNREAD_POSTS'		=> 'Bu konuya ilişkin okunmamış yeni mesaj bulunmamaktadır.',
	'NO_VOTE_OPTION'		=> 'Oy verirken bir seçenek belirtmelisiniz.',
	'NO_VOTES'				=> 'Oy yok',
	'NO_AUTH_PRINT_TOPIC'	=> 'Konuları yazdırma yetkisine sahip değilsiniz.',

	'POLL_ENDED_AT'			=> 'Anket %s tarihinde sona eriyor',
	'POLL_RUN_TILL'			=> 'Anket %s tarihine kadar sürecek',
	'POLL_VOTED_OPTION'		=> 'Bu seçeneğe oy verdiniz',
	'POST_DELETED_RESTORE'	=> 'Bu mesaj silindi. Geri getirilebilir.',
	'PRINT_TOPIC'			=> 'Yazdırma görünümü',

	'QUICK_MOD'				=> 'Hızlı mod araçları',
	'QUICKREPLY'			=> 'Hızlı Cevap',

	'REPLY_TO_TOPIC'		=> 'Konuya cevap yaz',
	'RESTORE'				=> 'Geri yükle',
	'RESTORE_TOPIC'			=> 'Konuyu geri yükle',
	'RETURN_POST'			=> '%sMesaja dön%s',

	'SUBMIT_VOTE'			=> 'Oy gönder',

	'TOPIC_TOOLS'			=> 'Konu araçları',
	'TOTAL_VOTES'			=> 'Toplam oy',

	'UNLOCK_TOPIC'			=> 'Konunun kilidini aç',

	'VIEW_INFO'				=> 'Mesaj ayrıntıları',
	'VIEW_NEXT_TOPIC'		=> 'Sonraki konu',
	'VIEW_PREVIOUS_TOPIC'	=> 'Önceki konu',
	'VIEW_RESULTS'			=> 'Sonuçları görüntüle',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d mesaj',
		2	=> '%d mesaj',
	),
	'VIEW_UNREAD_POST'		=> 'İlk okunmamış mesaj',
	'VOTE_SUBMITTED'		=> 'Oyunuz kullanıldı.',
	'VOTE_CONVERTED'		=> 'Dönüştürülen anketlerde oyların değiştirilmesi desteklenmiyor.',

));

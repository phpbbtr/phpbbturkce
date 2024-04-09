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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'En aktif forum',
	'ACTIVE_IN_TOPIC'		=> 'En aktif konu',
	'ADD_FOE'			=> 'Engellilere ekle',
	'ADD_FRIEND'			=> 'Arkadaş Ekle',
	'AFTER'				=> 'Sonra',

	'ALL'				=> 'Tümü',

	'BEFORE'			=> 'Önce',

	'CC_SENDER'			=> 'Bu e-postanın bir kopyasını kendinize gönderin.',
	'CONTACT_ADMIN'			=> 'Bir Pano Yöneticisiyle iletişime geçin',

	'DEST_LANG'			=> 'Dil',
	'DEST_LANG_EXPLAIN'		=> 'Bu mesajın alıcısı için uygun bir dil (varsa) seçin.',

	'EDIT_PROFILE'			=> 'Profili düzenle',

	'EMAIL_BODY_EXPLAIN'	=> 'Bu mesaj düz metin olarak gönderilecektir, herhangi bir HTML veya BBCode içermemektedir. Bu mesajın dönüş adresi e-posta adresiniz olarak ayarlanacaktır.',
	'EMAIL_DISABLED'	=> 'Üzgünüz ama epostayla ilgili tüm işlevler devre dışı bırakıldı.',
	'EMAIL_SENT'		=> 'E-posta gönderildi.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Bu mesaj düz metin olarak gönderilecektir, herhangi bir HTML veya BBCode içermemektedir. Lütfen konu bilgilerinin zaten mesajda yer aldığını unutmayın. Bu mesajın dönüş adresi eposta adresiniz olarak ayarlanacaktır.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Alıcı için geçerli bir eposta adresi belirtmelisiniz.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Epostayla gönderilecek bir mesaj girmelisiniz.',
	'EMPTY_MESSAGE_IM'	=> 'Gönderilmesi için bir mesaj girmelisiniz.',
	'EMPTY_NAME_EMAIL'	=> 'Alıcının gerçek adını girmelisiniz.',
	'EMPTY_SENDER_EMAIL'	=> 'Geçerli bir eposta adresi belirtmelisiniz.',
	'EMPTY_SENDER_NAME'	=> 'Bir ad belirtmelisiniz.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Eposta için bir başlık belirtmelisiniz.',
	'EQUAL_TO'		=> 'Eşit',

	'FIND_USERNAME_EXPLAIN'	=> 'Belirli üyeleri aramak için bu formu kullanın. Tüm alanları doldurmanız gerekmez. Kısmi verileri eşleştirmek için joker olarak * kullanın. Tarihleri girerken formatı <kbd>YYYY-AA-GG</kbd> kullanın, örneğin <samp>2004-02-29</samp>. Bir veya daha fazla kullanıcı adı seçmek için işaretle onay kutularını kullanın (formun kendisine bağlı olarak birkaç kullanıcı adı kabul edilebilir) ve önceki forma dönmek için İşaretliyi Seç düğmesini tıklayın.',
	'FLOOD_EMAIL_LIMIT'	=> 'Şu anda başka bir eposta gönderemezsiniz. Lütfen daha sonra tekrar deneyiniz.',

	'GROUP_LEADER'		=> 'Grup lideri',

	'HIDE_MEMBER_SEARCH'	=> 'Üye aramyı gizle',

	'IM_ADD_CONTACT'	=> 'İletişim Ekle',
	'IM_DOWNLOAD_APP'	=> 'Uygulamayı indir',
	'IM_JABBER'		=> 'Lütfen kullanıcıların istenmeyen anlık mesajları almamayı seçmiş olabileceğini unutmayın.',
	'IM_JABBER_SUBJECT'	=> 'Bu otomatik bir mesajdır lütfen cevap vermeyin! %1$s kullanıcısından %2$s tarihindeki mesaj.',
	'IM_MESSAGE'		=> 'Mesajınız',
	'IM_NAME'		=> 'Adınız',
	'IM_NO_DATA'		=> 'Bu kullanıcı için uygun iletişim bilgisi yok.',
	'IM_NO_JABBER'		=> 'Üzgünüz, Jabber kullanıcılarının doğrudan mesajlaşması bu panoda desteklenmiyor. Yukarıdaki alıcıyla iletişime geçmek için sisteminizde bir Jabber istemcisinin kurulu olması gerekir.',
	'IM_RECIPIENT'		=> 'Alıcı',
	'IM_SEND'		=> 'Mesaj gönder',
	'IM_SEND_MESSAGE'	=> 'Mesaj gönder',
	'IM_SENT_JABBER'	=> '%1$s kullanıcısına mesajınız başarıyla gönderildi.',
	'IM_USER'		=> 'Anlık bir mesaj gönder',

	'LAST_ACTIVE'		=> 'Son aktiflik',
	'LESS_THAN'		=> 'Bundan az',
	'LIST_USERS'		=> array(
		1	=> '%d kullanıcı',
		2	=> '%d kullanıcı',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Ekip listesini görüntüleyebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Üye listesine erişebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Kullanıcı arayabilmeniz için kayıtlı ve giriş yapmış olmanız gerekli.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Profilleri görüntüleyebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli.',

	'MANAGE_GROUP'			=> 'Grubu yönet',
	'MORE_THAN'			=> 'Bundan fazla',

	'NO_CONTACT_FORM'		=> 'Mesaj panosu yöneticisi iletişim formu devre dışı bırakıldı.',
	'NO_CONTACT_PAGE'		=> 'Mesaj panosu yöneticisi iletişim sayfası devre dışı bırakıldı.',
	'NO_EMAIL'			=> 'Bu kullanıcıya eposta göndermenize izin verilmiyor.',
	'NO_VIEW_USERS'			=> 'Üye listesini veya profilleri görüntüleme yetkiniz yok.',

	'ORDER'				=> 'Düzen',
	'OTHER'				=> 'Diğer',

	'POST_IP'			=> 'IP/domain üzerinden gönderilen',

	'REAL_NAME'			=> 'Alıcı Adı',
	'RECIPIENT'			=> 'Alıcı',
	'REMOVE_FOE'			=> 'Engellenenlerden kaldır',
	'REMOVE_FRIEND'			=> 'Arkadaş kaldır',

	'SELECT_MARKED'			=> 'İşaretlileri seç',
	'SELECT_SORT_METHOD'		=> 'Sıralama yöntemini seçin',
	'SENDER_EMAIL_ADDRESS'		=> 'Eposta adresiniz',
	'SENDER_NAME'			=> 'Adınız',
	'SEND_ICQ_MESSAGE'		=> 'ICQ mesajı gönder',
	'SEND_IM'			=> 'Anlık mesajlaşma',
	'SEND_JABBER_MESSAGE'		=> 'Jabber mesajı gönder',
	'SEND_MESSAGE'			=> 'Mesaj',
	'SEND_YIM_MESSAGE'		=> 'YIM mesajı gönder',
	'SORT_EMAIL'			=> 'Eposta',
	'SORT_LAST_ACTIVE'		=> 'Son aktiflik',
	'SORT_POST_COUNT'		=> 'Mesaj sayısı',

	'USERNAME_BEGINS_WITH'		=> 'Kullanıcı adı şununla başlar',
	'USER_ADMIN'			=> 'Kullanıcıyı yönet',
	'USER_BAN'			=> 'Banlama',
	'USER_FORUM'			=> 'Kullanıcı istatistikleri',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Şu anda herhangi bir hatırlatma gönderilmedi',
		1		=> '%1$d hatırlatma gönderildi<br />» %2$s',
		2		=> '%1$d hatırlatma gönderildi<br />» %2$s',
	),
	'USER_ONLINE'		=> 'Çevrimiçi',
	'USER_PRESENCE'		=> 'Pano varlığı',
	'USERS_PER_PAGE'	=> 'Sayfa başına kullanıcı',

	'VIEWING_PROFILE'	=> 'Profil görüntüleniyor - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Facebook Profilini gör',
	'VIEW_SKYPE_PROFILE'	=> 'Skype Profilini gör',
	'VIEW_TWITTER_PROFILE'	=> 'Twitter Profilini gör',
	'VIEW_YOUTUBE_PROFILE'	=> 'YouTube Profilini gör',
));

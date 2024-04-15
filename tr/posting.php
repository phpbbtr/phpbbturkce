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
	'ADD_ATTACHMENT'		=> 'Ek yükle',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Bir veya daha fazla dosya eklemek istiyorsanız aşağıdaki ayrıntıları girin.',
	'ADD_FILE'			=> 'Dosya ekle',
	'ADD_POLL'			=> 'Anket oluştur',
	'ADD_POLL_EXPLAIN'		=> 'Konunuza anket eklemek istemiyorsanız alanları boş bırakın.',
	'ALREADY_DELETED'		=> 'Üzgünüm ama bu mesaj zaten silinmiş.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'Ekteki yorum yasak karakterler içeriyor (Emoji).',
	'ATTACH_DISK_FULL'		=> 'Bu eki göndermek için yeterli boş disk alanı yok.',
	'ATTACH_QUOTA_REACHED'		=> 'Üzgünüz, panonun ekleme kotasına ulaşıldı.',
	'ATTACH_SIG'			=> 'Bir imza ekleyin (imzalar KKP aracılığıyla değiştirilebilir)',

	'BBCODE_A_HELP'				=> 'Satır içi yüklenen ek: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Kalın metin: [b]metin[/b]',
	'BBCODE_C_HELP'				=> 'Kod görünümü: [code]kod[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Font boyutu: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>KAPALI</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>AÇIK</em>',
	'BBCODE_I_HELP'				=> 'İtalik metint: [i]metin[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list][*]metin[/list]',
	'BBCODE_LISTITEM_HELP'			=> 'Liste öğesi: [*]metin',
	'BBCODE_O_HELP'				=> 'Sıralı Liste: örneğin [list=1][*]İlk öğe[/list] veya [list=a][*]Bir öğe[/list]',
	'BBCODE_P_HELP'				=> 'Resim ekle: [img]http://resim_url[/img]',
	'BBCODE_Q_HELP'				=> 'Alıntı metin: [quote]metin[/quote]',
	'BBCODE_S_HELP'				=> 'Font rengi: [color=red]metin[/color] veya [color=#FF0000]metin[/color]',
	'BBCODE_U_HELP'				=> 'Altı çizili metin: [u]metin[/u]',
	'BBCODE_W_HELP'				=> 'URL ekle: [url]http://url[/url] veya [url=http://url]URL metni[/url]',
	'BBCODE_Y_HELP'				=> 'Liste: Liste öğesi ekle',
	'BUMP_ERROR'				=> 'Son mesajınızdan bu kadar kısa süre sonra bu konuyu açamazsınız.',

	'CANNOT_DELETE_REPLIED'		=> 'Üzgünüz ancak yalnızca yanıtlanmayan gönderileri silebilirsiniz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Bu mesaj kilitlendi. Artık bu mesajı düzenleyemezsiniz.',
	'CANNOT_EDIT_TIME'		=> 'Artık bu mesajı düzenleyemez veya silemezsiniz.',
	'CANNOT_POST_ANNOUNCE'		=> 'Üzgünüz ama duyuru yayınlayamazsınız.',
	'CANNOT_POST_STICKY'		=> 'Üzgünüz ama sabit konular yayınlayamazsınız.',
	'CHANGE_TOPIC_TO'		=> 'Konu türünü şununla değiştirin:',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Mesajınız %1$d karakter içeriyor.',
		2	=> 'Mesajınız %1$d karakter içeriyor.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'İmzanız %1$d karakter içeriyor.',
		2	=> 'İmzanız %1$d karakter içeriyor.',
	),
	'CLOSE_TAGS'			=> 'Etiketleri kapat',
	'CURRENT_TOPIC'			=> 'Mevcut konu',

	'DELETE_FILE'				=> 'Dosyayı sil',
	'DELETE_MESSAGE'			=> 'Mesajı sil',
	'DELETE_MESSAGE_CONFIRM'		=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_OWN_POSTS'			=> 'Üzgünüm ama yalnızca kendi mesajlarınızı silebilirsiniz.',
	'DELETE_PERMANENTLY'			=> 'Kalıcı olarak sil',
	'DELETE_POST_CONFIRM'			=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Bu mesajı <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_POST_PERMANENTLY'		=> array(
		1	=> 'Bu mesaj kalıcı olarak silindiğinde tekrar geri getirilemez',
		2	=> '%1$d mesaj kalıcı olarak silindiğinde tekrar geri getirilemezler',
	),
	'DELETE_POSTS_CONFIRM'			=> 'Bu mesajları silmek istediğinize emin misiniz?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Bu mesajları <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_REASON'				=> 'Silinme sebebi',
	'DELETE_REASON_EXPLAIN'			=> 'Belirtilen silme nedeni moderatörler tarafından görülebilecektir.',
	'DELETE_POST_WARN'			=> 'Bu mesajı sil',
	'DELETE_TOPIC_CONFIRM'			=> 'Bu konuyu silmek istediğinize emin misiniz?',
	'DELETE_TOPIC_PERMANENTLY'		=> array(
		1	=> 'Bu konu kalıcı olarak silindiğinde tekrar geri getirilemez',
		2	=> '%1$d konu kalıcı olarak silindiğinde tekrar geri getirilemezler',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Bu konuyu <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_TOPICS_CONFIRM'			=> 'Bu konuları silmek istediğinize emin misiniz?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Bu konuları <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DISABLE_BBCODE'			=> 'BBCode devre dışı',
	'DISABLE_MAGIC_URL'			=> 'URL’ler otomatik olarak ayrıştırılmasın',
	'DISABLE_SMILIES'			=> 'İfadeler devre dışı',
	'DISALLOWED_CONTENT'			=> 'Yüklenen dosya olası bir saldırı vektörü olarak tanımlandığı için yükleme reddedildi.',
	'DISALLOWED_EXTENSION'			=> '%s uzantısına izin verilmiyor.',
	'DRAFT_LOADED'				=> 'Taslak gönderim alanına yüklendi, gönderinizi şimdi bitirmek isteyebilirsiniz.<br />Bu mesajı gönderdikten sonra taslağınız silinecek.',
	'DRAFT_LOADED_PM'			=> 'Taslak mesaj alanına yüklendi, özel mesajınızı şimdi bitirmek isteyebilirsiniz.<br />Bu özel mesajı gönderdikten sonra taslağınız silinecek.',
	'DRAFT_SAVED'				=> 'Taslak başarıyla kaydedildi.',
	'DRAFT_TITLE'				=> 'Taslak başlığı',

	'EDIT_REASON'				=> 'Bu yazının düzenlenme nedeni',
	'EMPTY_FILEUPLOAD'			=> 'Yüklenen dosya boş',
	'EMPTY_MESSAGE'				=> 'Gönderim yaparken bir mesaj girmelisiniz.',
	'EMPTY_REMOTE_DATA'			=> 'Dosya yüklenemedi, lütfen dosyayı manuel olarak yüklemeyi deneyin.',

	'FLASH_IS_OFF'				=> '[flash] <em>KAPALI</em>',
	'FLASH_IS_ON'				=> '[flash] <em>AÇIK</em>',
	'FLOOD_ERROR'				=> 'You cannot make another post so soon after your last.',
	'FONT_COLOR'				=> 'Font rengi',
	'FONT_COLOR_HIDE'			=> 'Font renklerini gizle',
	'FONT_HUGE'				=> 'Çok büyük',
	'FONT_LARGE'				=> 'Büyük',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'				=> 'Font boyutu',
	'FONT_SMALL'				=> 'Küçük',
	'FONT_TINY'				=> 'Çok küçük',

	'GENERAL_UPLOAD_ERROR'			=> 'Ek şuraya yüklenemedi: %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>KAPALI</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>AÇIK</em>',
	'INVALID_FILENAME'			=> '%s geçersiz bir dosya adıdır.',

	'LOAD'				=> 'Yükle',
	'LOAD_DRAFT'			=> 'Taslağı yükle',
	'LOAD_DRAFT_EXPLAIN'		=> 'Yazmaya devam etmek istediğiniz taslağı buradan seçebilirsiniz. Mevcut gönderiniz iptal edilecek, tüm mevcut gönderi içerikleri silinecektir. Taslakları Kullanıcı Kontrol Panelinizde görüntüleyin, düzenleyin ve silin.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Bu forumdaki konuları öne çıkarmak için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Bu forumdaki mesajları silmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Bu forumdaki gönderileri geçici olarak silmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_POST'		=> 'Bu foruma mesaj yazabilmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Bu forumdaki mesajlardan alıntı yapabilmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Bu forumdaki konulara cevap yazabilmek için giriş yapmalısınız.',

	'MAX_ATTACHMENT_FILESIZE'	=> 'Ek başına maksimum dosya boyutu: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Yalnızca %d boyutuna kadar yazı tiplerini kullanabilirsiniz.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash dosyalarınız yalnızca %d piksel yüksekliğinde olabilir.',
		2	=> 'Flash dosyalarınız yalnızca %d piksel yüksekliğinde olabilir.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash dosyalarınız en fazla %d piksel genişliğinde olabilir.',
		2	=> 'Flash dosyalarınız en fazla %d piksel genişliğinde olabilir.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Resimleriniz en fazla %1$d piksel yüksekliğinde olabilir.',
		2	=> 'Resimleriniz en fazla %1$d piksel yüksekliğinde olabilir.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Resimleriniz en fazla %1$d piksel genişliğinde olabilir.',
		2	=> 'Resimleriniz en fazla %1$d piksel genişliğinde olabilir.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Mesajınızı buraya girin, en fazla <strong>%d</strong> karakter içerebilir.',
		2	=> 'Mesajınızı buraya girin, en fazla <strong>%d</strong> karakter içerebilir.',
	),
	'MESSAGE_DELETED'		=> 'Bu mesaj başarıyla silindi.',
	'MORE_SMILIES'			=> 'Daha fazla ifade görüntüle',

	'NOTIFY_REPLY'			=> 'Bir cevap yazıldığında bana bildir',
	'NOT_UPLOADED'			=> 'Dosya yüklenemedi.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Mevcut anket seçeneklerini silemezsiniz.',
	'NO_PM_ICON'			=> 'ÖM ikonu yok',
	'NO_POLL_TITLE'			=> 'Bir anket başlığı girmelisiniz.',
	'NO_POST'			=> 'İstenilen mesaj mevcut değil.',
	'NO_POST_MODE'			=> 'Gönderi modu belirtilmedi.',
	'NO_TEMP_DIR'			=> 'Geçici klasör bulunamadı veya yazılabilir değil.',

	'PARTIAL_UPLOAD'		=> 'Yüklenen dosyanın yalnızca bir kısmı yüklendi.',
	'PHP_UPLOAD_STOPPED'		=> 'Bir PHP uzantısı dosya yüklemeyi durdurdu.',
	'PHP_SIZE_NA'			=> 'Ekin dosya boyutu çok büyük.<br />PHP tarafından php.ini dosyasında tanımlanan maksimum boyut belirlenemedi.',
	'PHP_SIZE_OVERRUN'		=> 'The attachment’s file size is too large, the maximum upload size is %1$d %2$s.<br />Please note this is set in php.ini and cannot be overridden.',
	'PLACE_INLINE'			=> 'Satır içine yerleştir',
	'POLL_DELETE'			=> 'Anketi sil',
	'POLL_FOR'			=> 'Anketi şu süreyle çalıştır',
	'POLL_FOR_EXPLAIN'		=> 'Hiç bitmeyen bir anket için 0 girin.',
	'POLL_MAX_OPTIONS'		=> 'Kullanıcı başı seçenek',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Bu, her kullanıcının oy verirken seçebileceği seçenek sayısıdır.',
	'POLL_OPTIONS'			=> 'Anket seçenekleri',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Her seçeneği yeni bir satıra yerleştirin. <strong>%d</strong> seçenek girebilirsiniz.',
		2	=> 'Her seçeneği yeni bir satıra yerleştirin. <strong>%d</strong> seçenek girebilirsiniz.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> array(
		1	=> 'Her seçeneği yeni bir satıra yerleştirin. <strong>%d</strong> seçenek girebilirsiniz. Seçenekleri kaldırır veya eklerseniz önceki oyların tümü sıfırlanacaktır.',
		2	=> 'Her seçeneği yeni bir satıra yerleştirin. <strong>%d</strong> seçenek girebilirsiniz. Seçenekleri kaldırır veya eklerseniz önceki oyların tümü sıfırlanacaktır.',
	),
	'POLL_QUESTION'			=> 'Anket Sorusu',
	'POLL_TITLE_TOO_LONG'		=> 'Anket başlığı 100 karakterden daha az olmalıdır.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Anket başlığınızın ayrıştırılmış boyutu çok büyük; BBC kodlarını veya ifadeleri kaldırmayı düşünün.',
	'POLL_VOTE_CHANGE'		=> 'Tekrar oylama izini',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Etkinleştirilirse kullanıcılar oylarını değiştirebilirler.',
	'POSTED_ATTACHMENTS'		=> 'Gönderilen ekler',
	'POST_APPROVAL_NOTIFY'		=> 'Mesajınız onaylandığında bilgilendirileceksiniz.',
	'POST_CONFIRMATION'		=> 'Confirmation of post',
	'POST_CONFIRM_EXPLAIN'		=> 'To prevent automated posts the board requires you to enter a confirmation code. The code is displayed in the image you should see below. If you are visually impaired or cannot otherwise read this code please contact the %sBoard Administrator%s.',
	'POST_DELETED'			=> 'Bu mesaj başarıyla silindi.',
	'POST_EDITED'			=> 'Bu mesaj başarıyla düzenlendi.',
	'POST_EDITED_MOD'		=> 'Bu mesaj başarıyla düzenlendi, ancak herkese açık olarak görüntülenebilmesi için bir moderatör tarafından onaylanması gerekiyor.',
	'POST_GLOBAL'			=> 'Genel',
	'POST_ICON'			=> 'Mesaj ikonu',
	'POST_NORMAL'			=> 'Normal',
	'POST_REVIEW'			=> 'Post review',
	'POST_REVIEW_EDIT'		=> 'Post review',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'This post has been altered by another user while you were editing it. You may wish to review the current version of this post and adjust your edits.',
	'POST_REVIEW_EXPLAIN'		=> 'At least one new post has been made to this topic. You may wish to review your post in light of this.',
	'POST_STORED'			=> 'This message has been posted successfully.',
	'POST_STORED_MOD'		=> 'This message has been submitted successfully, but it will need to be approved by a moderator before it is publicly viewable.',
	'POST_TOPIC_AS'			=> 'Post topic as',
	'PROGRESS_BAR'			=> 'Progress bar',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'You may embed only %d quote within each other.',
		2	=> 'You may embed only %d quotes within each other.',
	),
	'QUOTE_NO_NESTING'		=> 'You may not embed quotes within each other.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'The specified file could not be uploaded because the request timed out.',
	'SAVE'				=> 'Save',
	'SAVE_DATE'			=> 'Saved at',
	'SAVE_DRAFT'			=> 'Save draft',
	'SAVE_DRAFT_CONFIRM'		=> 'Please note that saved drafts only include the subject and the message, any other element will be removed. Do you want to save your draft now?',
	'SMILIES'			=> 'İfadeler',
	'SMILIES_ARE_OFF'		=> 'İfadeler <em>KAPALI</em>',
	'SMILIES_ARE_ON'		=> 'İfadeler <em>AÇIK</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Sticky/Announcement/Global time limit',
	'STICK_TOPIC_FOR'		=> 'Stick topic for',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Enter 0 for a never ending Sticky/Announcement/Global. Please note that this number is relative to the date of the post.',
	'STYLES_TIP'			=> 'Tip: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'			=> 'Your message contains too few characters.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'You need to enter at least %1$d character.',
		2	=> 'You need to enter at least %1$d characters.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'You must enter at least two poll options.',
	'TOO_MANY_ATTACHMENTS'		=> 'Cannot add another attachment, %d is the maximum.',
	'TOO_MANY_CHARS'		=> 'Your message contains too many characters.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'The maximum number of allowed characters is %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'		=> 'Your message contains too many smilies. The maximum number of smilies allowed is %d.',
	'TOO_MANY_URLS'			=> 'Your message contains too many URLs. The maximum number of URLs allowed is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'			=> 'Topic has been bumped successfully.',

	'UNAUTHORISED_BBCODE'			=> 'You cannot use certain BBCodes: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Your message contains the following unsupported characters:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Your subject contains the following unsupported characters:<br />%s',
	'UPDATE_COMMENT'			=> 'Update comment',
	'URL_INVALID'				=> 'The URL you specified is invalid.',
	'URL_NOT_FOUND'				=> 'The file specified could not be found.',
	'URL_IS_OFF'				=> '[url] <em>KAPALI</em>',
	'URL_IS_ON'				=> '[url] <em>AÇIK</em>',
	'USER_CANNOT_BUMP'			=> 'You cannot bump topics in this forum.',
	'USER_CANNOT_DELETE'			=> 'You cannot delete posts in this forum.',
	'USER_CANNOT_EDIT'			=> 'You cannot edit posts in this forum.',
	'USER_CANNOT_REPLY'			=> 'You cannot reply in this forum.',
	'USER_CANNOT_FORUM_POST'		=> 'You are not able to do posting operations on this forum due to the forum type not supporting it.',

	'VIEW_MESSAGE'				=> '%sGönderdiğiniz mesajı görüntüleyin%s',
	'VIEW_PRIVATE_MESSAGE'			=> '%sGönderdiğiniz özel mesajı görüntüleyin%s',

	'WRONG_FILESIZE'			=> 'The file is too big, maximum allowed size is %1$d %2$s.',
	'WRONG_SIZE'				=> 'The image must be at least %1$s wide, %2$s high and at most %3$s wide and %4$s high. The submitted image is %5$s wide and %6$s high.',
));

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
	'ALL_AVAILABLE'			=> 'Mevcut tümü',
	'ALL_RESULTS'			=> 'Tüm sonuçlar',

	'DISPLAY_RESULTS'		=> 'Sonuçları şu şekilde göster:',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Aramada %d eşleşme bulundu',
		2	=> 'Aramada %d eşleşme bulundu',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Aramada %d eşleşmeden fazlası bulundu',
		2	=> 'Aramada %d eşleşmeden fazlası bulundu',
	),

	'GLOBAL'			=> 'Genel Duyuru',

	'IGNORED_TERMS'			=> 'göz ardı edildi',
	'IGNORED_TERMS_EXPLAIN'		=> 'Arama sorgunuzdaki şu kelimeler çok yaygın kelimeler olduklarından göz ardı edildi: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Mesaja geç',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Panoda kendi mesajlarınızı görüntüleyebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli tutuluyor.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Panoda okunmamış mesajlarınızı görüntüleyebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli tutuluyor.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Panoda son ziyaretinizden bu yana gönderilmiş mesajları görüntüleyebilmeniz için kayıtlı ve giriş yapmış olmanız gerekli tutuluyor.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Aranacak çok fazla kelime belirttiniz. Lütfen %1$d kelimeden fazlasını girmeyin.',
		2	=> 'Aranacak çok fazla kelime belirttiniz. Lütfen %1$d kelimeden fazlasını girmeyin.',
	),

	'NO_KEYWORDS'			=> 'Aranacak en az bir kelime belirtmelisiniz. Her kelime en az %s ve jokerler hariç en fazla %s içermelidir.',
	'NO_RECENT_SEARCHES'		=> 'Yakın zamanda herhangi bir arama yapılmadı.',
	'NO_SEARCH'			=> 'Üzgünüz ama arama sistemini kullanmanıza izin verilmiyor.',
	'NO_SEARCH_RESULTS'		=> 'Uygun eşleşme bulunamadı.',
	'NO_SEARCH_LOAD'		=> 'Üzgünüz ama şu anda aramayı kullanamazsınız. Sunucuda aşırı yükleme mevcut. Lütfen daha sonra tekrar deneyiniz.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Üzgünüz ama şu anda aramayı kullanamazsınız. Lütfen %d saniye sonra tekrar deneyiniz.',
		2	=> 'Üzgünüz ama şu anda aramayı kullanamazsınız. Lütfen %d saniye sonra tekrar deneyiniz.',
	),
	'NO_SEARCH_UNREADS'		=> 'Üzgünüz ama bu panoda okunmamış mesajları arama devre dışı bırakıldı.',
	'WORD_IN_NO_POST'		=> 'Hiçbir mesaj <strong>%s</strong> kelimesi içermediğinden sonuç bulunamadı.',
	'WORDS_IN_NO_POST'		=> 'Hiçbir mesaj <strong>%s</strong> kelimeleri içermediğinden sonuç bulunamadı.',

	'POST_CHARACTERS'		=> 'karakter',
	'PHRASE_SEARCH_DISABLED'	=> 'Tam kelime öbeğine göre arama bu panoda desteklenmiyor.',

	'RECENT_SEARCHES'		=> 'Son aramalar',
	'RESULT_DAYS'			=> 'Sonuçları öncesiyle sınırla',
	'RESULT_SORT'			=> 'Sonuçları şuna göre sırala',
	'RETURN_FIRST'			=> 'İlk',
	'RETURN_FIRST_EXPLAIN'		=> 'Mesajın tamamını görüntülemek için 0 olarak ayarlayın.',
	'GO_TO_SEARCH_ADV'		=> 'Gelişmiş aramaya git',

	'SEARCHED_FOR'			=> 'Kullanılan arama terimi',
	'SEARCHED_TOPIC'		=> 'Aranan konu',
	'SEARCHED_QUERY'		=> 'Aranan sorgu',
	'SEARCH_ALL_TERMS'		=> 'Tüm terimleri arayın veya sorguyu girildiği şekilde kullanın',
	'SEARCH_ANY_TERMS'		=> 'Herhangi bir terimi arayın',
	'SEARCH_AUTHOR'			=> 'Yazar ara',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Kısmi eşleşmeler için * karakterini joker olarak kullanın.',
	'SEARCH_FIRST_POST'		=> 'Yalnızca konuların ilk mesajı',
	'SEARCH_FORUMS'			=> 'Forumlarda ara',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Aramak istediğiniz forum veya forumları seçin. Aşağıdaki “Alt forumlarda ara” seçeneğini devre dışı bırakmazsanız alt forumlar otomatik olarak aranır.',
	'SEARCH_IN_RESULTS'		=> 'Bu sonuçlarda ara',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Bulunması gereken kelimenin önüne <strong>+</strong>, bulunmaması gereken kelimenin önüne <strong>-</strong> koyun. Kelimelerden yalnızca birinin bulunması için <strong>|</strong> ile ayrılmış kelimeler listesini parantez içine alın. Kısmi eşleşmeler için * karakterini joker olarak kullanın.',
	'SEARCH_MSG_ONLY'		=> 'Yalnızca mesaj metni',
	'SEARCH_OPTIONS'		=> 'Arama seçenekleri',
	'SEARCH_QUERY'			=> 'Arama sorgusu',
	'SEARCH_SUBFORUMS'		=> 'Alt forumlarda ara',
	'SEARCH_TITLE_MSG'		=> 'Mesaj başlıkları ve mesaj metni',
	'SEARCH_TITLE_ONLY'		=> 'Yalnızca konu başlıkları',
	'SEARCH_WITHIN'			=> 'İçinde ara',
	'SORT_ASCENDING'		=> 'Artan',
	'SORT_AUTHOR'			=> 'Yazar',
	'SORT_DESCENDING'		=> 'Azalan',
	'SORT_FORUM'			=> 'Forum',
	'SORT_POST_SUBJECT'		=> 'Mesaj başlığı',
	'SORT_TIME'			=> 'Mesaj zamanı',
	'SPHINX_SEARCH_FAILED'		=> 'Arama başarısız oldu: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Üzgünüz arama gerçekleştirilemedi. Bu hatayla ilgili daha fazla bilgi hata günlüğüne kaydedildi.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Yazar adının en az %d karakterini belirtmelisiniz.',
		2	=> 'Yazar adının en az %d karakterini belirtmelisiniz.',
	),
));

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
	'CAPTCHA_QA'			=> 'S&amp;C',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Bu soru, spam botların otomatik form gönderimini önlemenin bir yoludur.',
	'CONFIRM_QUESTION_WRONG'	=> 'Soruya geçersiz bir cevap verdiniz.',
	'CONFIRM_QUESTION_MISSING'	=> 'Captcha\'ya ilişkin sorular alınamadı. Lütfen pano yöneticisiyle iletişime geçiniz.',

	'QUESTION_ANSWERS'		=> 'Cevaplar',
	'ANSWERS_EXPLAIN'		=> 'Lütfen her satıra bir tane olmak üzere soruya geçerli cevaplar giriniz.',
	'CONFIRM_QUESTION'		=> 'Soru',

	'ANSWER'			=> 'Cevap',
	'EDIT_QUESTION'			=> 'Soruyu Düzenle',
	'QUESTIONS'			=> 'Sorular',
	'QUESTIONS_EXPLAIN'		=> 'Soru-Cevap eklentisini etkinleştirdiğiniz her form gönderiminde kullanıcılara burada belirtilen sorulardan biri sorulacaktır. Bu eklentiyi kullanmak için en az bir sorunun varsayılan dilde ayarlanması gerekir. Bu soruların yanıtlanması hedef kitleniz için kolay olmalı, ancak Google™ araması yapabilen bir botun yeteneğinin ötesinde olmalıdır. Yalnızca tek bir doğru soru gereklidir. Spam kayıtları almaya başlarsanız sorunun değiştirilmesi gerekir. Sorunuz büyük/küçük harf, noktalama işaretleri veya boşluklardan oluşuyorsa sıkı ayarı etkinleştiriniz.',
	'QUESTION_DELETED'		=> 'Soru silindi',
	'QUESTION_LANG'			=> 'Dil',
	'QUESTION_LANG_EXPLAIN'		=> 'Bu soru ve cevaplarının yazılacağı dil',
	'QUESTION_STRICT'		=> 'Sıkı denetim',
	'QUESTION_STRICT_EXPLAIN'	=> 'Karışık büyük/küçük harf, noktalama işaretleri ve boşlukları zorunlu kılmayı etkinleştirin.',

	'QUESTION_TEXT'			=> 'Soru',
	'QUESTION_TEXT_EXPLAIN'		=> 'Kullanıcıya sunulan soru.',

	'QA_ERROR_MSG'			=> 'Lütfen tüm alanları doldurun ve en az bir cevap girin.',
	'QA_LAST_QUESTION'		=> 'Eklenti aktifken tüm soruları silemezsiniz.',
));

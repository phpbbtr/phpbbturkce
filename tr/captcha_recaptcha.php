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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'tr',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'				=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Sunduğunuz çözüm hatalı',
	'RECAPTCHA_NOSCRIPT'				=> 'reCAPTCHA yüklenmesi için lütfen tarayıcınızda JavaScript\'i etkinleştirin.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'reCaptcha kullanabilmek için <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> üzerinde bir hesap oluşturmalısınız.',
	'RECAPTCHA_INVISIBLE'				=> 'Bu CAPTCHA aslında görünmez. Çalıştığını doğrulamak için sayfanın sağ alt köşesinde küçük bir simge görünmelidir.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'		=> 'İzin verilen maksimum giriş deneme sayısını aştınız.<br>Oturumunuzun kimliğini doğrulamak için kullanıcı adınız ve şifrenize ek olarak görünmez reCAPTCHA v3 kullanılacaktır.',

	'RECAPTCHA_PUBLIC'				=> 'Site anahtarı',
	'RECAPTCHA_PUBLIC_EXPLAIN'			=> 'Sitenizin reCAPTCHA anahtarı. Anahtarlar <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> üzerinden alınabilir. Lütfen reCAPTCHA v2 &gt; Görünmez reCAPTCHA rozer türü kullanın.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'			=> 'Sitenizin reCAPTCHA anahtarı. Anahtarlar <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> üzerinden alınabilir. Lütfen reCAPTCHA v3 kullanın.',
	'RECAPTCHA_PRIVATE'				=> 'Gizli anahtar',
	'RECAPTCHA_PRIVATE_EXPLAIN'			=> 'Gizli reCAPTCHA anahtarınız. Anahtarlar <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> üzerinden alınabilir. Lütfen reCAPTCHA v2 &gt; Görünmez reCAPTCHA rozer türü kullanın.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'			=> 'Gizli reCAPTCHA anahtarınız. Anahtarlar <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a> üzerinden alınabilir. Lütfen reCAPTCHA v3 kullanın.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Etki alanı iste',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'			=> 'Komut dosyasının getirileceği ve isteği doğrularken kullanılacak etki alanı.<br><samp>google.com</samp> erişilebilir olmadığında <samp>recaptcha.net</samp> kullanın.',

	'RECAPTCHA_V3_METHOD'				=> 'Talep yöntemi',
	'RECAPTCHA_V3_METHOD_EXPLAIN'			=> 'Talep doğrularken kullanılacak yöntem.<br>Devre dışı bırakılan seçenekler kurulumunuzda mevcut değildir.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'			=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'		=> 'Varsayılan eşik',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Diğer eylemlerin hiçbiri geçerli olmadığında kullanılır.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'			=> 'Giriş eşiği',
	'RECAPTCHA_V3_THRESHOLD_POST'			=> 'Gönderi eşiği',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'		=> 'Kayıt eşiği',
	'RECAPTCHA_V3_THRESHOLD_REPORT'			=> 'Rapor eşiği',
	'RECAPTCHA_V3_THRESHOLDS'			=> 'Eşikler',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'		=> 'CAPTCHA v3 bir skor döndürüyor (<samp>1,0</samp> büyük olasılıkla iyi bir etkileşimdir, <samp>0,0</samp> büyük olasılıkla bir bottur). Burada işlem başına minimum skoru belirleyebilirsiniz.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'		=> 'reCAPTCHA v3 isteği doğrularken kullanmak istediğiniz hangi yöntemin kullanılabilir olduğunu bilmenizi gerektirir.',
]);

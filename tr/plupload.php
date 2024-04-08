<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Dosya ekle',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Dosyaları yükleme kuyruğuna ekleyin ve başlat düğmesine tıklayın.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s zaten sırada.',
	'PLUPLOAD_CLOSE'		=> 'Kapat',
	'PLUPLOAD_DRAG'			=> 'Dosyaları buraya sürükle.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Yinelenen dosya hatası.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Dosyaları mesaj kutusuna sürükleyip bırakarak da ekleyebilirsiniz.',
	'PLUPLOAD_ERR_INPUT'		=> 'Giriş akışını açmak başarısız oldu.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Yüklenen dosya taşınamadı.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Çıktı akışı açılırken hata oluştu.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Dosya çok büyük:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Dosya sayım hatası.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Geçersiz dosya uzantısı:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Çalışma zamanının kullanılabilir belleği tükendi.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Yükleme URLsi yanlış veya mevcut olmayabilir.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Dosya uzantısı hatası.',
	'PLUPLOAD_FILE'			=> 'Dosya: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Dosya: %s, boyut: %d, maksimum dosya boyutu: %d',
	'PLUPLOAD_FILENAME'		=> 'Dosya adı',
	'PLUPLOAD_FILES_QUEUED'		=> '%d dosya sıraya alındı',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Genel hata.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP hatası.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Resim formatı yanlış veya desteklenmiyor.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init hatası.',
	'PLUPLOAD_IO_ERROR'		=> 'IO hatası.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Güvenlik hatası.',
	'PLUPLOAD_SELECT_FILES'		=> 'Dosya seç',
	'PLUPLOAD_SIZE'			=> 'Boyut',
	'PLUPLOAD_SIZE_ERROR'		=> 'Dosya boyutu hatası.',
	'PLUPLOAD_STATUS'		=> 'Durum',
	'PLUPLOAD_START_UPLOAD'		=> 'Yüklemeyi başlat',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Sıralı yüklemeyi başlat',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Yüklemeyi durdur',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Geçerli yüklemeyi durdur',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'		=> '%d/%d dosya yüklendi',
));

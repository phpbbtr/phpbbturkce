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
	'CONFIG_NOT_EXIST'					=> 'Beklenmedik bir şekilde "%s" yapılandırma ayarı mevcut değil.',

	'GROUP_NOT_EXIST'					=> 'Beklenmedik bir şekilde "%s" grubu mevcut değil.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s bağımlılıklarını uygula.',
	'MIGRATION_DATA_DONE'				=> 'Veri Yüklendi: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Veri Yükleniyor: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_DATA_RUNNING'			=> 'Veri Yükleniyor: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Geçiş zaten etkili bir şekilde kuruldu (atlandı): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'İstek sırasında bir şeyler ters gitti ve bir istisna oluşturuldu. Hata oluşmadan önce yapılan değişiklikler elimizden geldiğince geri alındı, ama panoda hatalar olup olmadığını kontrol etmelisiniz.',
	'MIGRATION_NOT_FULFILLABLE'			=> '"%1$s" geçişi gerçekleştirilemiyor, "%2$s" geçişi eksik.',
	'MIGRATION_NOT_INSTALLED'			=> 'Geçiş "%s" yüklü değil.',
	'MIGRATION_NOT_VALID'				=> '%s geçerli bir geçiş değil.',
	'MIGRATION_SCHEMA_DONE'				=> 'Şema Yüklendi: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Şema Yükleniyor: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Şema Yükleniyor: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Veri Geri Döndürüldü: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Veri Geri Döndürülüyor: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Veri Geri Döndürülüyor: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Veri Geri Döndürüldü: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Veri Geri Döndürülüyor: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Veri Geri Döndürülüyor: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Geçersiz bir geçiş. Bir if yardımcı ifadesinde koşul eksik.An if statement helper is missing a condition.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Geçersiz bir geçiş. An if statement helper is missing a valid call to a migration step.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Geçersiz bir geçiş. Özel çağrılabilir bir fonksiyon çağrılamadı.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Geçersiz bir geçiş. Bilinmeyen bir geçiş aracı türü ile karşılaşıldı.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Geçersiz bir geçiş. Tanımlanamayan bir geçiş aracıyla karşılaşıldı.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Geçersiz bir geçiş. Tanımlanamayan bir geçiş aracı yöntemiyle karşılaşıldı.',

	'MODULE_ERROR'						=> 'Modül oluşturulurken bir hata oluştu: %s',
	'MODULE_EXISTS'						=> 'Bir modül zaten mevcut: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Belirtilen ana modül dil adına sahip birkaç modül zaten mevcut: %s. Modül yerleşimini netleştirmek için öncesi/sonrası tuşlarını kullanmayı deneyin.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Gerekli bir modül bilgi dosyası eksik: %2$s',
	'MODULE_NOT_EXIST'					=> 'Gerekli bir modül mevcut değil: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Ana modül tanımlayıcısı belirlenemiyor: %s',
	'PERMISSION_NOT_EXIST'				=> 'Beklenmedik bir şekilde "%s" izin ayarı mevcut değil.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Beklenmedik bir şekilde "%1$s" grubuna atanan izin rolü mevcut değil. Rol id: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Beklenmedik bir şekilde "%s" izin rolü mevcut değil.',
));

<?php
/**
 *
 * @package PhpBB Xmas extension
 * @copyright (c) 2016 Stoker
 * @license GNU General Public License, version 2 (GPL-2.0)
 * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be> 
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'XMAS_COUNT_YEARS'				=> 'jaren',
	'XMAS_COUNT_MONTHS'				=> 'maanden',
	'XMAS_COUNT_WEEKS'				=> 'weken',
	'XMAS_COUNT_DAYS'				=> 'dagen',
	'XMAS_COUNT_HOURS'				=> 'uren',
	'XMAS_COUNT_MINUTES'			=> 'min',
	'XMAS_COUNT_SECONDS'			=> 'sec',
	'XMAS_COUNT_YEAR'				=> 'jaar',
	'XMAS_COUNT_MONTH'				=> 'maand',
	'XMAS_COUNT_WEEK'				=> 'week',
	'XMAS_COUNT_DAY'				=> 'dag',
	'XMAS_COUNT_HOUR'				=> 'uur',
	'XMAS_COUNT_MINUTE'				=> 'min',
	'XMAS_COUNT_SECOND'				=> 'sec',
	
	'PHPBB_XMAS_STOKER'   			=> 'phpBB Xmas &copy; <a href="http://www.phpbb3bbcodes.com" title="phpBB Xmas">PhpBB3 BBCodes</a>',
	'PHPBB_COUNTDOWN_STOKER'   		=> 'phpBB Countdown &copy; <a href="http://www.phpbb3bbcodes.com" title="phpBB Countdown">PhpBB3 BBCodes</a>',
));

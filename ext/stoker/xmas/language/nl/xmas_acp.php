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
	'ACP_XMAS_SETTINGS'							=> 'PhpBB Kerstmis Instellingen',
	'ACP_XMAS_DONATE'							=> 'Overweeg aub om een <a href="http://www.phpbb3bbcodes.com/donate.php" target="_blank"><strong>Donatie</strong></a> te doen als je deze extensie goed vindt.<br />Vergeet dan ook geen <a href="http://www.froddelpower.be/donation" target="_blank"><strong>Donatie</strong></a> voor deze Nederlandse vertaling aub.',
	'ACP_XMAS_STYLING'							=> 'Indien je graag wat bewerkingen doet in de css kan je dit bestand bewerken: /ext/stoker/xmas/styles/prosilver/theme/xmas.css<br />En indien je graag andere afbeeldingen gebruikt kan je deze hier uploaden: /ext/stoker/xmas/styles/prosilver/theme/images en zorg ervoor dat u dezelfde naam gebruikt of hernoem ze in xmas.css',

	'ACP_ENABLE_XMAS'							=> 'Schakel Kerstmis thema in',
	'ACP_ENABLE_XMAS_EXPLAIN'					=> 'Selecteer "Yes" om het PhpBB Kerstmis thema in te schakelen op je forum.',
	'ACP_ENABLE_XMAS_STORM'						=> 'Schakel PhpBB Kerst Sneeuw in',
	'ACP_ENABLE_XMAS_STORM_EXPLAIN'				=> 'Selecteer "Yes" om PhpBB Kerst sneeuw in te schakelen op je forum. Dit kan je doen zonder het Kerstmis thema in te schakelen.',
	
	'ACP_XMAS_STORM_MINSIZE_TEXT'				=> 'Min grootte',
	'ACP_XMAS_STORM_MINSIZE_TEXT_EXPLAIN'		=> 'Voer de minimum grootte in voor de sneeuwvlokken.',
	'ACP_XMAS_STORM_MAXSIZE_TEXT'				=> 'Max grootte',
	'ACP_XMAS_STORM_MAXSIZE_TEXT_EXPLAIN'		=> 'Voer de maximum grootte in voor de sneeuwvlokken.',
	'ACP_XMAS_STORM_FLAKECOUNT_TEXT'			=> 'Aantal sneeuwvlokken',
	'ACP_XMAS_STORM_FLAKECOUNT_TEXT_EXPLAIN'	=> 'Voer het aantal sneeuwvlokken in voor de sneeuwstorm.',
	
	'ACP_ENABLE_XMAS_TESTMODE' 					=> 'Activeer testmodus',
	'ACP_ENABLE_XMAS_TESTMODE_EXPLAIN'			=> 'Indien de testmodus geactiveerd is kunnen enkel beheerders het Kerstthema in actie zien.',
	
	'ACP_XMAS_COUNTDOWN_SETTINGS'				=> 'PhpBB Kerstmis countdown instellingen',
	'ACP_XMAS_COUNTDOWN_ENABLE'					=> 'Schakel kerstmis countdown in. Dit kan je doen zonder het Kerstmis thema in te schakelen',
	'ACP_XMAS_COUNTDOWN_ENABLE_EXPLAIN'			=> 'Schakel de PhpBB Kerstmis countdown hier in of uit.',
	'ACP_XMAS_COUNTDOWN_DIRECTION' 				=> 'PhpBB Kerstmis countdown richting',
	'ACP_XMAS_COUNTDOWN_DIRECTION_EXPLAIN'		=> 'De PhpBB Kerstmis Countdown ext. kan zowel op en af tellen.',
	'ACP_XMAS_COUNTDOWN_DATE' 					=> 'PhpBB Kerstmis Countdown datum',
	'ACP_XMAS_COUNTDOWN_DATE_EXPLAIN'			=> 'Voorbeeld: 2016/12/31 00:00:00',
	'ACP_XMAS_COUNTDOWN_TEXT' 					=> 'PhpBB Kerstmis Countdown tekst, voor',
	'ACP_XMAS_COUNTDOWN_TEXT_EXPLAIN'			=> 'PhpBB Kerstmis Countdown tekst zal weergegeven worden voor de countdown.<br />HTML voorbeeld:  &lt;img src=\'volledige afbeelding url\' /&gt; ',
	'ACP_XMAS_COUNTDOWN_TEXT_AFTER'				=> 'PhpBB Kerstmis Countdown text, na',
	'ACP_XMAS_COUNTDOWN_TEXT_AFTER_EXPLAIN'		=> 'PhpBB Kerstmis Countdown tekst zal weergegeven worden achter de countdown.<br />HTML voorbeeld:  &lt;img src=\'volledige afbeelding url\' /&gt; ',
	'ACP_XMAS_COUNTDOWN_COMPLETE'	 			=> 'PhpBB Kerstmis Countdown volledige tekst',
	'ACP_XMAS_COUNTDOWN_COMPLETE_EXPLAIN' 		=> 'Deze tekst zal de PhpBB Kerstmis countdown vervangen indien afgelopen.<br />HTML voorbeeld:  &lt;img src=\'volledige afbeelding url\' /&gt; ',
	'ACP_XMAS_COUNTDOWN_TESTMODE' 				=> 'Activeer testmodus',
	'ACP_XMAS_COUNTDOWN_TESTMODE_EXPLAIN'		=> 'Indien de testmodus geactiveerd is kunnen enkel beheerders de countdown in actie zien.',
	'ACP_XMAS_COUNTDOWN_YEAR'	 				=> 'Activeer jaren',
	'ACP_XMAS_COUNTDOWN_YEAR_EXPLAIN' 			=> 'Activeer deze funtie om jaren te tonen in de countdown. Indien het jaar 0 is zal het beter zijn om deze niet te activeren.',
	'ACP_XMAS_COUNTDOWN_MONTH'	 				=> 'Activeer maanden',
	'ACP_XMAS_COUNTDOWN_MONTH_EXPLAIN' 			=> 'Activeer deze funtie om maanden te tonen in de countdown. Indien het 0 maanden zijn zal het beter zijn om deze niet te activeren.',
	'ACP_XMAS_COUNTDOWN_OFFSET_ENABLE' 			=> 'Schakel tijdzone in',
	'ACP_XMAS_COUNTDOWN_OFFSET_ENABLE_EXPLAIN' 	=> 'Schakel de tijdzone hier in of uit.',
	
	'ACP_XMAS_COUNTDOWN_LEADING_ENABLE' 		=> 'Schakel eerste nul in',
	'ACP_XMAS_COUNTDOWN_LEADING_ENABLE_EXPLAIN' => 'Schakel de eerste nul in als je 2 getallen wenst te gebruiken. Het toont ook beter.',
	'ACP_XMAS_COUNTDOWN_YANDM_ENABLE' 			=> 'Schakel jaren en maanden in.',
	'ACP_XMAS_COUNTDOWN_YANDM_ENABLE_EXPLAIN' 	=> 'Indien dit uitgeschakeld is worden jaren en maanden niet getoont. In plaats daarvan worden enkel dagen geteld.',
	'ACP_XMAS_COUNTDOWN_WEEK_ENABLE' 			=> 'Schakel week in',
	'ACP_XMAS_COUNTDOWN_WEEK_ENABLE_EXPLAIN' 	=> 'Schakel dit in om weken te tonen in de countdown.',
	
	'ACP_XMAS_COUNTDOWN_OFFSET' 				=> 'Tijdzone instellingen',
	'ACP_XMAS_COUNTDOWN_OFFSET_EXPLAIN'			=> 'Indien je een specifieke tijdzone wenst te gebruiken voor alle gebruikers kan je deze hier invullen.<br />Zoals &quot;-6&quot; voor Centrale Standaard Tijd en &quot;4&quot; voor Gulf Standaard Tijd.',
	'ACP_XMAS_COUNT_DOWNCOUNT'					=> 'Af',
	'ACP_XMAS_COUNT_UPCOUNT'					=> 'Op',
));

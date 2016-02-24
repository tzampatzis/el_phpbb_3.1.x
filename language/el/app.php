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
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com (dimitris):
* (http://phpbbgr.com/team/)
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
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Λείπει η τιμή για το όρισμα #%1$s: <strong>%3$s</strong> στην κλάση <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Κανένας ελεγκτής δεν έχει καθορισθεί.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Καμία μέθοδος δεν έχει καθορισθεί για τον ελεγκτή.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Η υπηρεσία για τον ελεγκτή “<strong>%s</strong>” δεν έχει προσδιοριστεί στο ./config/services.yml.',
));

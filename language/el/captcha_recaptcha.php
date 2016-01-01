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

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'el',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Για να χρησιμοποιήσετε το reCaptcha πρέπει να δημιουργήσετε έναν λογαριασμό σε <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Ο κώδικας οπτικής επιβεβαίωσης που υποβάλετε ήταν λανθασμένος',

	'RECAPTCHA_PUBLIC'				=> 'Δημόσιο reCaptcha κλειδί',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Το δημόσιο σας reCaptcha κλειδί. Κλειδιά μπορούν να αποκτηθούν σε <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Προσωπικό reCaptcha κλειδί',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Το προσωπικό σας reCaptcha κλειδί. Κλειδιά μπορούν να αποκτηθούν σε <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Σε μια προσπάθεια για να αποτραπούν αυτοματοποιημένες υποβολές, σας ζητούμε να εισάγετε το κείμενο που εμφανίζεται στο παρακάτω πεδίο.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Υπήρξε ένα πρόβλημα κατά τη σύνδεση με την υπηρεσία RECAPTCHA: δεν μπορεί να ανοίξει την υποδοχή. Προσπαθήστε ξανά αργότερα.',
));

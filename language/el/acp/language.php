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
	'ACP_FILES'						=> 'Αρχεία γλώσσας διαχειριστή',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Εδώ μπορείτε να εγκαταστήσετε / από-εγκαταστήσετε πακέτα γλώσσας. Το πακέτο προεπιλεγμένης γλώσσας επισημαίνεται με έναν αστερίσκο (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το “%s”;',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Εγκατεστημένα πακέτα γλώσσας',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Οι λεπτομέρειες της γλώσσας ενημερώθηκαν με επιτυχία.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Αυτό το πακέτο γλώσσας είναι ήδη εγκατεστημένο.',
	'LANGUAGE_PACK_DELETED'				=> 'Το αρχείο γλώσσας “%s” έχει αφαιρεθεί με επιτυχία. Όλα τα μέλη που χρησιμοποιούσαν αυτήν την γλώσσας ρυθμίσθηκαν στην προεπιλεγμένη γλώσσα του συστήματος συζητήσεων.',
	'LANGUAGE_PACK_DETAILS'				=> 'Λεπτομέρειες πακέτου γλώσσας',
	'LANGUAGE_PACK_INSTALLED'			=> 'Το αρχείο γλώσσας “%s” εγκαταστάθηκε με επιτυχία.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Οι συμβολοσειρές γλώσσας των προσαρμοσμένων πεδίων προφίλ αντιγράφονται από την προεπιλεγμένη γλώσσα. Παρακαλώ αλλάξτε τα εάν απαιτείται.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Τοπικό όνομα',
	'LANGUAGE_PACK_NAME'				=> 'Όνομα',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Το επιλεγμένο πακέτο γλώσσας δεν υπάρχει.',
	'LANGUAGE_PACK_USED_BY'				=> 'Χρησιμοποιείται από (συμπεριλαμβανομένων των robots)',
	'LANGUAGE_VARIABLE'					=> 'Μεταβλητή γλώσσας',
	'LANG_AUTHOR'						=> 'Δημιουργός πακέτου γλώσσας',
	'LANG_ENGLISH_NAME'					=> 'Αγγλικό όνομα',
	'LANG_ISO_CODE'						=> 'Κωδικός ISO',
	'LANG_LOCAL_NAME'					=> 'Τοπικό όνομα',

	'MISSING_LANG_FILES'		=> 'Ελλιπή αρχεία γλώσσας',
	'MISSING_LANG_VARIABLES'	=> 'Ελλιπείς μεταβλητές γλώσσας',

	'NO_FILE_SELECTED'				=> 'Δεν καθορίσατε αρχείο γλώσσας.',
	'NO_LANG_ID'					=> 'Δεν καθορίσατε πακέτο γλώσσας.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Δεν μπορείτε να από-εγκαταστήσετε το προεπιλεγμένο πακέτο γλώσσας.<br />Αν θέλετε να το από-εγκαταστήσετε, αλλάξτε πρώτα την προεπιλεγμένη γλώσσα του συστήματος συζητήσεων.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Δεν υπάρχουν μη εγκατεστημένα πακέτα γλώσσας',

	'THOSE_MISSING_LANG_FILES'			=> 'Τα ακόλουθα αρχεία γλώσσας λείπουν από τον φάκελο της γλώσσας “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Οι ακόλουθες μεταβλητές γλώσσας λείπουν από το “%s” πακέτο γλώσσας',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Μη εγκατεστημένα πακέτα γλώσσας',
	
	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Περιήγηση στη βάση των πακέτων γλώσσας',
));

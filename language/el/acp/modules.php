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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Εδώ μπορείτε να διαχειριστείτε όλα τα είδη των μονάδων. Παρακαλώ σημειώστε ότι το ACP έχει μια δομή μενού τριών επιπέδων (Κατηγορία -> Κατηγορία -> Μονάδα) σύμφωνα με την οποία οι άλλες έχουν μια δομή μενού δύο επιπέδων (Κατηγορία -> Μονάδα), η οποία πρέπει να τηρείται. Παρακαλώ επίσης να γνωρίζετε ότι μπορεί να κλειδώσετε τον εαυτό σας αν απενεργοποιήσετε ή διαγράψετε τις μονάδες που είναι υπεύθυνες για την ίδια μονάδα διαχείρισης.',
	'ADD_MODULE'					=> 'Προσθήκη μονάδας',
	'ADD_MODULE_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να προσθέσετε την επιλεγμένη μονάδα με τον επιλεγμένο τρόπο λειτουργίας',
	'ADD_MODULE_TITLE'				=> 'Προσθήκη μονάδας',

	'CANNOT_REMOVE_MODULE'	=> 'Αποτυχία αφαίρεσης μονάδας, έχει εκχωρημένες υπό-μονάδες. Παρακαλώ αφαιρέστε ή μετακινήσετε όλες τις υπό-μονάδες πριν από την εκτέλεση αυτής της ενέργειας.',
	'CATEGORY'				=> 'Κατηγορία',
	'CHOOSE_MODE'			=> 'Επιλέξτε τρόπο λειτουργίας',
	'CHOOSE_MODE_EXPLAIN'	=> 'Επιλέγετε τον τρόπο λειτουργίας της μονάδας.',
	'CHOOSE_MODULE'			=> 'Επιλογή μονάδας',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Επιλέξτε το αρχείο το οποίο καλείται από αυτήν τη μονάδα.',
	'CREATE_MODULE'			=> 'Δημιουργία νέας μονάδας',

	'DEACTIVATED_MODULE'	=> 'Απενεργοποίηση μονάδας',
	'DELETE_MODULE'			=> 'Διαγραφή μονάδας',
	'DELETE_MODULE_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να αφαιρέσετε αυτήν τη μονάδα;',

	'EDIT_MODULE'			=> 'Επεξεργασία μονάδας',
	'EDIT_MODULE_EXPLAIN'	=> 'Εδώ έχετε τη δυνατότητα να εισάγετε συγκεκριμένες ρυθμίσεις για τη μονάδα.',

	'HIDDEN_MODULE'			=> 'Κρυφή μονάδα',

	'MODULE'					=> 'Μονάδα',
	'MODULE_ADDED'				=> 'Η μονάδα προστέθηκε με επιτυχία.',
	'MODULE_DELETED'			=> 'Η μονάδα αφαιρέθηκε με επιτυχία.',
	'MODULE_DISPLAYED'			=> 'Εμφάνιση μονάδας',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Εάν δεν επιθυμείτε να εμφανίζεται η μονάδα, αλλά θέλετε να τη χρησιμοποιείτε καθορίστε αυτό σε “Όχι”.',
	'MODULE_EDITED'				=> 'Η μονάδα επεξεργάστηκε με επιτυχία.',
	'MODULE_ENABLED'			=> 'Η μονάδα ενεργοποιήθηκε',
	'MODULE_LANGNAME'			=> 'Όνομα γλώσσας μονάδας',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Εισάγετε το εμφανιζόμενο όνομα της μονάδας. Χρησιμοποιήστε τη γλώσσα της μεταβλητής γλώσσας εάν το όνομα εξυπηρετείται από το αρχείο γλώσσας.',
	'MODULE_TYPE'				=> 'Τύπος μονάδας',

	'NO_CATEGORY_TO_MODULE'	=> 'Δεν είναι δυνατόν να μετατραπεί η κατηγορία σε μονάδα. Παρακαλώ αφαιρέστε / μετακινήσετε όλες τις υπό-μονάδες πριν από την εκτέλεση αυτής της ενέργειας.',
	'NO_MODULE'				=> 'Δεν βρέθηκε μονάδα.',
	'NO_MODULE_ID'			=> 'Δεν προσδιορίστηκε αναγνωριστικό (ID) μονάδας.',
	'NO_MODULE_LANGNAME'	=> 'Δεν προσδιορίστηκε όνομα γλώσσας μονάδας.',
	'NO_PARENT'				=> 'Δεν υπάρχει κατηγορία γονέας',

	'PARENT'				=> 'Κατηγορία γονέας',
	'PARENT_NO_EXIST'		=> 'Δεν υπάρχει κατηγορία γονέας.',

	'SELECT_MODULE'			=> 'Επιλέξτε μια μονάδα',
));

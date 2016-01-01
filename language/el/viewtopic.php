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
	'APPROVE'								=> 'Έγκριση',
	'ATTACHMENT'			=> 'Συνημμένο',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Η λειτουργία των συνημμένων έχει απενεργοποιηθεί.',

	'BOOKMARK_ADDED'		=> 'Η προσθήκη του θέματος στους σελιδοδείκτες έγινε με επιτυχία.',
	'BOOKMARK_ERR'			=> 'Η προσθήκη του θέματος στους σελιδοδείκτες απέτυχε. Παρακαλώ προσπαθήστε πάλι.',
	'BOOKMARK_REMOVED'		=> 'Η αφαίρεση του θέματος από τους σελιδοδείκτες έγινε με επιτυχία.',
	'BOOKMARK_TOPIC'		=> 'Προσθήκη σε σελιδοδείκτες',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Αφαίρεση από σελιδοδείκτες',
	'BUMPED_BY'				=> 'Τελευταία φορά σημειώθηκε ως νέο από %1$s την %2$s.',
	'BUMP_TOPIC'			=> 'Σημειώστε το θέμα ως νέο',

	'CODE'					=> 'Κώδικας',

	'DELETE_TOPIC'			=> 'Διαγραφή θέματος',
	'DELETED_INFORMATION'	=> 'Διαγραφή από %1$s σε %2$s',
	'DISAPPROVE'					=> 'Απόρριψη',
	'DOWNLOAD_NOTICE'		=> 'Δεν έχετε τα απαραίτητα δικαιώματα για να δείτε τα συνημμένα αρχεία σε αυτήν τη δημοσίευση.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Τελευταία επεξεργασία από %2$s σε %3$s, έχει επεξεργασθεί %1$d φορά συνολικά.',
		2	=> 'Τελευταία επεξεργασία από %2$s σε %3$s, έχει επεξεργασθεί %1$d φορές συνολικά.',
	),
	'EMAIL_TOPIC'			=> 'Αποστολή με ηλ. ταχ\μείο σε φίλο',
	'ERROR_NO_ATTACHMENT'	=> 'Το επιλεγμένο συνημμένο δεν υπάρχει πλέον.',

	'FILE_NOT_FOUND_404'	=> 'Το αρχείο <strong>%s</strong> δεν υπάρχει.',
	'FORK_TOPIC'			=> 'Αντιγραφή θέματος',
	'FULL_EDITOR'			=> 'Πλήρης επεξεργαστής &amp; Προεπισκόπηση',

	'LINKAGE_FORBIDDEN'		=> 'Δεν είστε εξουσιοδοτημένοι για να δείτε, να μεταφορτώσετε ή να δημιουργήσετε σύνδεσμο από / προς αυτήν την ιστοσελίδα.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Έχετε ειδοποιηθεί για αυτό το θέμα, παρακαλώ συνδεθείτε για να το προβάλετε.',
	'LOGIN_VIEWTOPIC'		=> 'Το σύστημα συζητήσεων απαιτεί ότι πρέπει να είστε εγγεγραμμένο μέλος και να έχετε συνδεθεί για να δείτε αυτό το θέμα.',

	'MAKE_ANNOUNCE'				=> 'Μετατροπή σε “Ανακοίνωση”',
	'MAKE_GLOBAL'				=> 'Μετατροπή σε “Γενική”',
	'MAKE_NORMAL'				=> 'Μετατροπή σε “Κανονικό θέμα”',
	'MAKE_STICKY'				=> 'Μετατροπή σε “Σημείωση”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Μπορείτε να επιλέξετε <strong>%d</strong> επιλογή',
		2	=> 'Μπορείτε να επιλέξετε μέχρι <strong>%d</strong> επιλογές',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Το συνημμένο <strong>%s</strong> δεν είναι πλέον διαθέσιμο',
	'MOVE_TOPIC'				=> 'Μετακίνηση θέματος',

	'NO_ATTACHMENT_SELECTED'=> 'Δεν έχετε επιλέξει κάποιο συνημμένο για να μεταφορτώσετε ή να προβάλετε.',
	'NO_NEWER_TOPICS'		=> 'Δεν υπάρχουν νεώτερα θέματα σε αυτήν τη Δ. Συζήτηση.',
	'NO_OLDER_TOPICS'		=> 'Δεν υπάρχουν παλαιότερα θέματα σε αυτήν τη Δ. Συζήτηση.',
	'NO_UNREAD_POSTS'		=> 'Δεν υπάρχουν μη αναγνωσμένες δημοσιεύσεις για αυτό το θέμα.',
	'NO_VOTE_OPTION'		=> 'Πρέπει να διευκρινίσετε μια επιλογή όταν ψηφίζετε.',
	'NO_VOTES'				=> 'Δεν υπάρχουν ψήφοι',

	'POLL_ENDED_AT'			=> 'Το δημοψήφισμα λήγει στις %s',
	'POLL_RUN_TILL'			=> 'Το δημοψήφισμα ισχύει μέχρι %s',
	'POLL_VOTED_OPTION'		=> 'Ψηφίσατε για αυτήν την επιλογή',
	'POST_DELETED_RESTORE'	=> 'Αυτή η δημοσίευση έχει διαγραφεί. Μπορεί να γίνει επαναφορά.',
	'PRINT_TOPIC'			=> 'Προβολή εκτύπωσης',

	'QUICK_MOD'				=> 'Γρήγορα εργαλεία συντονισμού',
	'QUICKREPLY'			=> 'Γρήγορη απάντηση',
	'QUOTE'					=> 'Παράθεση',

	'REPLY_TO_TOPIC'		=> 'Απάντηση στο θέμα',
	'RESTORE'				=> 'Επαναφορά',
	'RESTORE_TOPIC'			=> 'Επαναφορά θέματος',
	'RETURN_POST'			=> '%sΠατήστε εδώ για να επιστρέψετε στη δημοσίευση%s',

	'SUBMIT_VOTE'			=> 'Υποβολή ψήφου',

	'TOPIC_TOOLS'			=> 'Εργαλεία θέματος',
	'TOTAL_VOTES'			=> 'Σύνολο ψήφων',

	'UNLOCK_TOPIC'			=> 'Ξεκλειδώστε θέμα',

	'VIEW_INFO'				=> 'Λεπτομέρειες δημοσίευσης',
	'VIEW_NEXT_TOPIC'		=> 'Επόμενο θέμα',
	'VIEW_PREVIOUS_TOPIC'	=> 'Προηγούμενο θέμα',
	'VIEW_RESULTS'			=> 'Προβολή αποτελεσμάτων',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d δημοσίευση',
		2	=> '%d δημοσιεύσεις',
	),
	'VIEW_UNREAD_POST'		=> 'Πρώτη μη αναγνωσμένη δημοσίευση',
	'VOTE_SUBMITTED'		=> 'Η ψήφος σας έχει υποβληθεί.',
	'VOTE_CONVERTED'		=> 'Η αλλαγή των ψήφων δεν υποστηρίζεται για ψηφοφορίες που έχουν μετατραπεί.',

));

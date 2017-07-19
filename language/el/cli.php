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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ορίστε αυτήν την επιλογή αν η επιλογή ρύθμισης αλλάζει πολύ συχνά για να γίνεται προσωρινή αποθήκευση αποτελεσματικά.',
	'CLI_CONFIG_CURRENT'				=> 'Τρέχουσα τιμή ρύθμισης, χρησιμοποιήστε 0 και 1 για να καθορίσετε λογικές τιμές',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Επιτυχής διαγραφή της ρύθμισης %s.',
	'CLI_CONFIG_NEW'					=> 'Νέα τιμή ρύθμισης, χρησιμοποιήστε 0 και 1 για να καθορίσετε λογικές τιμές',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Η ρύθμιση %s δεν υπάρχει',
	'CLI_CONFIG_OPTION_NAME'			=> 'Το όνομα της επιλογής ρύθμισης',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ορίστε αυτήν την επιλογή εάν η τιμή θα πρέπει να τυπώνεται χωρίς μια νέα γραμμή στο τέλος.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Ποσό προσαύξησης κατά',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Επιτυχής προσαύξηση της ρύθμισης %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Δεν ήταν δυνατός ο ορισμός της ρύθμισης %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Επιτυχής ορισμός της ρύθμισης %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Εκτυπώνει μια λίστα των έτοιμων και ανέτοιμων εργασιών cron.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Εκτελεί όλες τις έτοιμες εργασίες cron.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Το όνομα της εργασίας που θα εκτελεστεί',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Ενημερώνει τη βάση δεδομένων εφαρμόζοντας ενσωματώσεις.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Διαγράφει μια επιλογή ρύθμισης',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Απενεργοποιεί τη συγκεκριμένη επέκταση.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Ενεργοποιεί τη συγκεκριμένη επέκταση.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Βρίσκει ενσωματώσεις που δεν εξαρτώταν από άλλες.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Επισκευάζει την δενδρική δομή των Δ. συζητήσεων και των μονάδων.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Παίρνει μια τιμή επιλογής ρύθμισης',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Προσαυξάνει ακέραια μια τιμή επιλογής ρύθμισης',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Απαριθμεί όλες τις επεκτάσεις στη βάση δεδομένων και στο σύστημα αρχείων.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Εκτέλεση σε ασφαλή λειτουργία (χωρίς επεκτάσεις).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Εκκίνηση του κελύφους.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Εκκαθαρίζει τη συγκεκριμένη επέκταση.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Επανυπολογίζει τη στήλη user_email_hash του πίνακα των μελών.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Καθορίζει μια τιμή επιλογής ρύθμισης μόνον εάν η παλιά ταιριάζει με την τρέχουσα τιμή',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Καθορίζει μια τιμή επιλογής ρύθμισης',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Ενημερώνει ληγμένους κατακερματισμένους κωδικούς για να αναδημιουργηθούν με τη λειτουργία bcrypt.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Δεν ήταν δυνατή η απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Επιτυχής απενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Δεν ήταν δυνατή η ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Επιτυχής ενεργοποίηση της επέκτασης %s',
	'CLI_EXTENSION_NAME'				=> 'Όνομα επέκτασης',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Δεν ήταν δυνατή η εκκαθάριση της επέκτασης %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Επιτυχής εκκαθάριση της επέκτασης %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Δεν βρέθηκαν επεκτάσεις.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Διαθέσιμο',
	'CLI_EXTENSIONS_DISABLED'			=> 'Απενεργοποιημένο',
	'CLI_EXTENSIONS_ENABLED'			=> 'Ενεργοποιημένο',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Επιτυχής επισκευή δενδρικής δομής Δ. συζητήσεων και μονάδων.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Επιτυχής επανυπολογισμός όλων των hashes ηλεκτρονικών ταχυδρομείων.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Επιτυχής ενημέρωση ληγμένων κατακερματισμένων κωδικών με bcrypt.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Μπορείτε προαιρετικά να ορίσετε ένα όνομα για την επαναλαμβανόμενη διαδικασία για την εκτέλεση μόνο της συγκεκριμένης επαναλαμβανόμενης διαδικασίας.',
));

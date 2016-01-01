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
	'EXTENSION'					=> 'Επέκταση',
	'EXTENSIONS'				=> 'Επεκτάσεις',
	'EXTENSIONS_ADMIN'			=> 'Διαχείριση επεκτάσεων',
	'EXTENSIONS_EXPLAIN'		=> 'Η διαχείριση επεκτάσεων είναι ένα εργαλείο στο phpBB σύστημα συζητήσεων σας, το οποίο σας επιτρέπει να διαχειριστείτε όλες τις καταστάσεις των επεκτάσεων σας και να δείτε πληροφορίες σχετικά με αυτές.',
	'EXTENSION_INVALID_LIST'	=> 'Η “%s” επέκταση δεν είναι έγκυρη.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Η επιλεγμένη επέκταση δεν είναι διαθέσιμη για αυτό το σύστημα συζητήσεων, παρακαλούμε ελέγξτε ότι η έκδοση του phpBB και της PHP σας επιτρέπει (δείτε τη σελίδα λεπτομερειών).',
	'EXTENSION_DIR_INVALID'		=> 'Η επιλεγμένη επέκταση έχει μια άκυρη δομή καταλόγου και δεν μπορεί να ενεργοποιηθεί.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Η επιλεγμένη επέκταση δεν μπορεί να απενεργοποιηθεί, παρακαλώ ελέγξτε τις απαιτήσεις της επέκτασης.',

	'DETAILS'				=> 'Λεπτομέρειες',

	'EXTENSIONS_DISABLED'	=> 'Απενεργοποιημένες επεκτάσεις',
	'EXTENSIONS_ENABLED'	=> 'Ενεργοποιημένες επεκτάσεις',

	'EXTENSION_DELETE_DATA'	=> 'Διαγραφή δεδομένων',
	'EXTENSION_DISABLE'		=> 'Απενεργοποίηση',
	'EXTENSION_ENABLE'		=> 'Ενεργοποίηση',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Η διαγραφή μιας επέκτασης αφαιρεί όλα τα δεδομένα και τις ρυθμίσεις της. Τα αρχεία της επέκτασης παραμένουν έτσι ώστε να μπορεί να ενεργοποιηθεί ξανά.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Η απενεργοποίηση μιας επέκτασης διατηρεί τα αρχεία και τις ρυθμίσεις της, αλλά αφαιρεί οποιαδήποτε λειτουργία προστέθηκε από την επέκταση.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Η ενεργοποίηση μιας επέκτασης σας επιτρέπει να τη χρησιμοποιήσετε στο σύστημα συζητήσεων.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Τα δεδομένα της επέκτασης αυτήν τη στιγμή διαγράφονται. Παρακαλώ μην αφήστε ή ανανεώσετε αυτήν τη σελίδα μέχρι να ολοκληρωθεί.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Η επέκταση βρίσκεται στο στάδιο της απενεργοποίησης. Παρακαλώ μην αφήστε ή ανανεώσετε αυτήν τη σελίδα μέχρι να ολοκληρωθεί.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Η επέκταση βρίσκεται στο στάδιο της ενεργοποίησης. Παρακαλώ μην αφήστε ή ανανεώσετε αυτήν τη σελίδα μέχρι να ολοκληρωθεί.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Τα δεδομένα της επέκτασης διαγράφηκαν με επιτυχία',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Η επέκταση απενεργοποιήθηκε με επιτυχία',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Η επέκταση ενεργοποιήθηκε με επιτυχία',

	'EXTENSION_NAME'			=> 'Επέκτασης όνομα',
	'EXTENSION_ACTIONS'		=> 'Ενέργειες',
	'EXTENSION_OPTIONS'		=> 'Επιλογές',
	'EXTENSION_INSTALL_HEADLINE'=> 'Εγκατάσταση μιας επέκτασης',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Μεταφορτώστε μια επέκταση από τη βάση επεκτάσεων του phpBB</li>
			<li>Αποσυμπιέστε την επέκταση και φορτώστε (upload) την στον φάκελο <samp>ext/</samp> του συστήματός σας</li>
			<li>Ενεργοποιήστε αυτήν την επέκταση, εδώ στη διαχείριση επεκτάσεων</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Αναβάθμιση επέκτασης',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Απενεργοποίηση επέκτασης</li>
			<li>Διαγραφή των αρχείων επέκτασης από το σύστημα αρχείων</li>
			<li>Φόρτωμα νέων αρχείων</li>
			<li>Ενεργοποίηση επέκτασης</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Πλήρης αφαίρεση μιας επέκτασης από το σύστημα συζητήσεων',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Απενεργοποίηση επέκτασης</li>
			<li>Διαγραφή δεδομένων επέκτασης</li>
			<li>Διαγραφή των αρχείων της επέκτασης από το σύστημα αρχείων</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε τα δεδομένα που σχετίζονται με την επέκταση “%s”;<br /><br />Αυτό αφαιρεί όλα τα δεδομένα και τις ρυθμίσεις της και δεν μπορεί να αναιρεθεί!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να απενεργοποιήσετε την επέκταση “%s”;',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να ενεργοποιήσετε την επέκταση “%s”;',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εξαναγκάσετε τη χρήση της ασταθούς έκδοσης;',

	'RETURN_TO_EXTENSION_LIST'	=> 'Επιστροφή στον κατάλογο επεκτάσεων',

	'EXT_DETAILS'			=> 'Επέκτασης λεπτομέρειες',
	'DISPLAY_NAME'			=> 'Εμφανιζόμενο όνομα ',
	'CLEAN_NAME'			=> 'Καθαρό όνομα',
	'TYPE'					=> 'Τύπος',
	'DESCRIPTION'			=> 'Περιγραφή',
	'VERSION'				=> 'Έκδοση',
	'HOMEPAGE'				=> 'Ιστοσελίδα',
	'PATH'					=> 'Διαδρομή αρχείων',
	'TIME'					=> 'Ημερομηνία έκδοσης',
	'LICENSE'				=> 'Άδεια',

	'REQUIREMENTS'			=> 'Απαιτήσεις',
	'PHPBB_VERSION'			=> 'phpBB Έκδοση',
	'PHP_VERSION'			=> 'PHP Έκδοση',
	'AUTHOR_INFORMATION'	=> 'Πληροφορίες συγγραφέα',
	'AUTHOR_NAME'			=> 'Όνομα',
	'AUTHOR_EMAIL'			=> 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
	'AUTHOR_HOMEPAGE'		=> 'Ιστοσελίδα',
	'AUTHOR_ROLE'			=> 'Ρόλος',

	'NOT_UP_TO_DATE'		=> '%s μη αναβαθμισμένο',
	'UP_TO_DATE'			=> '%s αναβαθμισμένο',
	'ANNOUNCEMENT_TOPIC'	=> 'Ανακοίνωση έκδοσης',
	'DOWNLOAD_LATEST'		=> 'Μεταφόρτωση έκδοσης',
	'NO_VERSIONCHECK'		=> 'Δεν βρέθηκαν πληροφορίες ελέγχου έκδοσης.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Επανέλεγχος όλων των εκδόσεων',
	'FORCE_UNSTABLE'					=> 'Πάντα έλεγχος για ασταθείς εκδόσεις',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Ρυθμίσεις ελέγχου έκδοσης',
	
	'BROWSE_EXTENSIONS_DATABASE'		=> 'Περιήγηση στη βάση επεκτάσεων',

	'META_FIELD_NOT_SET'	=> 'Απαιτούμενο meta πεδίο %s δεν έχει οριστεί.',
	'META_FIELD_INVALID'	=> 'Το πεδίο meta %s είναι άκυρο.',
));

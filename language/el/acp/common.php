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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Διαχειριστές',
	'ACP_ADMIN_LOGS'			=> 'Ιστορικό διαχειριστών',
	'ACP_ADMIN_ROLES'			=> 'Ρόλοι διαχειριστή',
	'ACP_ATTACHMENTS'			=> 'Συνημμένα',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Ρυθμίσεις συνημμένων',
	'ACP_AUTH_SETTINGS'			=> 'Πιστοποίηση',
	'ACP_AUTOMATION'			=> 'Αυτοματισμός',
	'ACP_AVATAR_SETTINGS'		=> 'Ρυθμίσεις άβαταρ',

	'ACP_BACKUP'				=> 'Αντίγραφο ασφαλείας βάσης',
	'ACP_BAN'					=> 'Αποκλεισμοί',
	'ACP_BAN_EMAILS'			=> 'Αποκλεισμός ηλεκτρονικών ταχυδρομείων',
	'ACP_BAN_IPS'				=> 'Αποκλεισμός IPs',
	'ACP_BAN_USERNAMES'			=> 'Αποκλεισμός ονόματος μέλους',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Παραμετροποίηση συστήματος συζητήσεων',
	'ACP_BOARD_FEATURES'		=> 'Χαρακτηριστικά συστήματος συζητήσεων',
	'ACP_BOARD_MANAGEMENT'		=> 'Διαχείριση συστήματος συζητήσεων',
	'ACP_BOARD_SETTINGS'		=> 'Ρυθμίσεις συστήματος συζητήσεων',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'Οπτική επιβεβαίωση',

	'ACP_CAT_CUSTOMISE'			=> 'Προσαρμογές',
	'ACP_CAT_DATABASE'			=> 'Βάση δεδομένων',
	'ACP_CAT_DOT_MODS'			=> 'Επεκτάσεις',
	'ACP_CAT_FORUMS'			=> 'Δημόσιες συζητήσεις',
	'ACP_CAT_GENERAL'			=> 'Γενικά',
	'ACP_CAT_MAINTENANCE'		=> 'Συντήρηση',
	'ACP_CAT_PERMISSIONS'		=> 'Προσβάσεις',
	'ACP_CAT_POSTING'			=> 'Αποστολή άρθρου',
	'ACP_CAT_STYLES'			=> 'Στυλ',
	'ACP_CAT_SYSTEM'			=> 'Σύστημα',
	'ACP_CAT_USERGROUP'			=> 'Μέλη και ομάδες',
	'ACP_CAT_USERS'				=> 'Μέλη',
	'ACP_CLIENT_COMMUNICATION'	=> 'Πελάτης επικοινωνίας',
	'ACP_COOKIE_SETTINGS'		=> 'Ρυθμίσεις Cookie',
	'ACP_CONTACT'				=> 'Σελίδα επικοινωνίας',
	'ACP_CONTACT_SETTINGS'		=> 'Ρυθμίσεις σελίδας επικοινωνίας',
	'ACP_CRITICAL_LOGS'			=> 'Ιστορικό σφαλμάτων',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Προσαρμοσμένα πεδία προφίλ',

	'ACP_DATABASE'				=> 'Διαχείριση βάσης',
	'ACP_DISALLOW'				=> 'Μη επιτρεπτό',
	'ACP_DISALLOW_USERNAMES'	=> 'Μη επιτρεπτά ονόματα μελών',

	'ACP_EMAIL_SETTINGS'		=> 'Ρυθμίσεις ηλεκτρονικού ταχυδρομείου',
	'ACP_EXTENSION_GROUPS'		=> 'Διαχείριση ομάδων επεκτάσεων συνημμένων',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Διαχείριση επεκτάσεων',
	'ACP_EXTENSIONS'			=> 'Επεκτάσεις',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Προσβάσεις βασισμένες σε Δ. Συζήτηση',
	'ACP_FORUM_LOGS'				=> 'Ιστορικό Δ. Συζήτησης',
	'ACP_FORUM_MANAGEMENT'			=> 'Διαχείριση Δ. Συζήτησης',
	'ACP_FORUM_MODERATORS'			=> 'Συντονιστές Δ. Συζήτησης',
	'ACP_FORUM_PERMISSIONS'			=> 'Προσβάσεις Δ. Συζήτησης',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Αντιγραφή Δ. Συζήτησης προσβάσεις',
	'ACP_FORUM_ROLES'				=> 'Ρόλοι Δ. Συζήτησης',

	'ACP_GENERAL_CONFIGURATION'		=> 'Γενικές ρυθμίσεις',
	'ACP_GENERAL_TASKS'				=> 'Γενικές εργασίες',
	'ACP_GLOBAL_MODERATORS'			=> 'Γενικοί συντονιστές',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Γενικές προσβάσεις',
	'ACP_GROUPS'					=> 'Ομάδες',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Προσβάσεις ομάδας Δ. Συζήτησης',
	'ACP_GROUPS_MANAGE'				=> 'Διαχείριση ομάδων',
	'ACP_GROUPS_MANAGEMENT'			=> 'Διαχείριση ομάδων',
	'ACP_GROUPS_PERMISSIONS'		=> 'Προσβάσεις ομάδας',
	'ACP_GROUPS_POSITION'			=> 'Διαχείριση θέσεων ομάδας',

	'ACP_ICONS'					=> 'Εικονίδια θεμάτων',
	'ACP_ICONS_SMILIES'			=> 'Εικονίδια  θέματος / Εικονίδια smilies',
	'ACP_INACTIVE_USERS'		=> 'Ανενεργά μέλη',
	'ACP_INDEX'					=> 'Αρχική ΠΕΔ',

	'ACP_JABBER_SETTINGS'		=> 'Ρυθμίσεις Jabber',

	'ACP_LANGUAGE'				=> 'Διαχείριση γλώσσας',
	'ACP_LANGUAGE_PACKS'		=> 'Πακέτα γλώσσας',
	'ACP_LOAD_SETTINGS'			=> 'Ρυθμίσεις φορτίου διακομιστή',
	'ACP_LOGGING'				=> 'Εγγραφές ιστορικού',

	'ACP_MAIN'					=> 'Αρχική ΠΕΔ',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Διαχείριση συνημμένων',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Εδώ μπορείτε να απαριθμήσετε και να διαγράψετε αρχεία που επισυνάπτονται στις δημοσιεύσεις και τα προσωπικά μηνύματα.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Διαχείριση επεκτάσεων συνημμένων',
	'ACP_MANAGE_FORUMS'			=> 'Διαχείριση Δ. Συζητήσεων',
	'ACP_MANAGE_RANKS'			=> 'Διαχείριση βαθμών',
	'ACP_MANAGE_REASONS'		=> 'Διαχείριση λόγων αναφοράς / απόρριψης',
	'ACP_MANAGE_USERS'			=> 'Διαχείριση μελών',
	'ACP_MASS_EMAIL'			=> 'Μαζικό ηλεκτρονικό ταχυδρομείο',
	'ACP_MESSAGES'				=> 'Μηνύματα',
	'ACP_MESSAGE_SETTINGS'		=> 'Ρυθμίσεις προσωπικών μηνυμάτων',
	'ACP_MODULE_MANAGEMENT'		=> 'Διαχείριση μονάδων',
	'ACP_MOD_LOGS'				=> 'Ιστορικό συντονιστή',
	'ACP_MOD_ROLES'				=> 'Ρόλοι συντονιστή',

	'ACP_NO_ITEMS'				=> 'Δεν υπάρχει κανένα είδος ακόμα.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Ορφανά συνημμένα',

	'ACP_PERMISSIONS'			=> 'Προσβάσεις',
	'ACP_PERMISSION_MASKS'		=> 'Αποτελεσματικά δικαιώματα',
	'ACP_PERMISSION_ROLES'		=> 'Ρόλοι προσβάσεων',
	'ACP_PERMISSION_TRACE'		=> 'Εντοπισμός δικαιωμάτων',
	'ACP_PHP_INFO'				=> 'Πληροφορίες PHP',
	'ACP_POST_SETTINGS'			=> 'Ρυθμίσεις αποστολής άρθρου',
	'ACP_PRUNE_FORUMS'			=> 'Εκκαθάριση Δ. Συζητήσεων',
	'ACP_PRUNE_USERS'			=> 'Εκκαθάριση μελών',
	'ACP_PRUNING'				=> 'Εκκαθάριση',

	'ACP_QUICK_ACCESS'			=> 'Γρήγορη πρόσβαση',

	'ACP_RANKS'					=> 'Βαθμοί',
	'ACP_REASONS'				=> 'Λόγοι αναφοράς / απόρριψης',
	'ACP_REGISTER_SETTINGS'		=> 'Ρυθμίσεις εγγραφής μέλους',

	'ACP_RESTORE'				=> 'Επαναφορά',

	'ACP_FEED'					=> 'Διαχείριση τροφοδοσίας Feed',
	'ACP_FEED_SETTINGS'			=> 'Ρυθμίσεις τροφοδοσίας Feed',

	'ACP_SEARCH'				=> 'Παραμετροποίηση αναζήτησης',
	'ACP_SEARCH_INDEX'			=> 'Αναζήτηση ευρετηρίου',
	'ACP_SEARCH_SETTINGS'		=> 'Ρυθμίσεις αναζήτησης',

	'ACP_SECURITY_SETTINGS'		=> 'Ρυθμίσεις ασφαλείας',
	'ACP_SEND_STATISTICS'		=> 'Αποστολή πληροφορίες στατιστικών',
	'ACP_SERVER_CONFIGURATION'	=> 'Παραμετροποίηση διακομιστή',
	'ACP_SERVER_SETTINGS'		=> 'Ρυθμίσεις διακομιστή',
	'ACP_SIGNATURE_SETTINGS'	=> 'Ρυθμίσεις υπογραφών',
	'ACP_SMILIES'				=> 'Εικονίδια smilies',
	'ACP_STYLE_MANAGEMENT'		=> 'Διαχείριση στυλ',
	'ACP_STYLES'				=> 'Στυλ',
	'ACP_STYLES_CACHE'			=> 'Εκκαθάριση λανθάνουσας μνήμης',
	'ACP_STYLES_INSTALL'		=> 'Εγκατάσταση στυλ',

	'ACP_SUBMIT_CHANGES'		=> 'Υποβολή αλλαγών',

	'ACP_TEMPLATES'				=> 'Πρότυπα',
	'ACP_THEMES'				=> 'Θέματα',

	'ACP_UPDATE'					=> 'Ενημέρωση σε εξέλιξη',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Προσβάσεις μέλους Δ. Συζήτησης',
	'ACP_USERS_LOGS'				=> 'Ιστορικό μελών',
	'ACP_USERS_PERMISSIONS'			=> 'Προσβάσεις μέλους',
	'ACP_USER_ATTACH'				=> 'Συνημμένα',
	'ACP_USER_AVATAR'				=> 'Άβαταρ',
	'ACP_USER_FEEDBACK'				=> 'Ανατροφοδότηση ',
	'ACP_USER_GROUPS'				=> 'Ομάδες',
	'ACP_USER_MANAGEMENT'			=> 'Διαχείριση μέλους',
	'ACP_USER_OVERVIEW'				=> 'Επισκόπηση',
	'ACP_USER_PERM'					=> 'Προσβάσεις',
	'ACP_USER_PREFS'				=> 'Επιλογές',
	'ACP_USER_PROFILE'				=> 'Προφίλ',
	'ACP_USER_RANK'					=> 'Βαθμός',
	'ACP_USER_ROLES'				=> 'Ρόλοι μέλους',
	'ACP_USER_SECURITY'				=> 'Ασφάλεια μέλους',
	'ACP_USER_SIG'					=> 'Υπογραφή',
	'ACP_USER_WARNINGS'				=> 'Προειδοποιήσεις',

	'ACP_VC_SETTINGS'					=> 'Αντίμετρα ενοχλητικών μηνυμάτων',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Προεπισκόπηση εικόνας οπτικής επιβεβαίωσης',
	'ACP_VERSION_CHECK'					=> 'Έλεγχος για αναβαθμίσεις',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Έλεγχος προσβάσεις διαχειριστών',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Έλεγχος προσβάσεις συντονιστών Δ. Συζήτησης',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Έλεγχος προσβάσεις βασισμένες σε Δ. Συζήτηση',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Έλεγχος προσβάσεις καθολικών συντονιστών',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Έλεγχος προσβάσεις μελών',

	'ACP_WORDS'					=> 'Λογοκρισία λέξεων',

	'ACTION'				=> 'Ενέργεια',
	'ACTIONS'				=> 'Ενέργειες',
	'ACTIVATE'				=> 'Ενεργοποίηση',
	'ADD'					=> 'Προσθήκη',
	'ADMIN'					=> 'Διαχείριση',
	'ADMIN_INDEX'			=> 'Αρχική διαχείρισης',
	'ADMIN_PANEL'			=> 'Πίνακας Ελέγχου Διαχειριστή',

	'ADM_LOGOUT'			=> 'ΠΕΔ&nbsp;αποσύνδεση',
	'ADM_LOGGED_OUT'		=> 'Έχετε αποσυνδεθεί με επιτυχία από τον Πίνακα Ελέγχου Διαχειριστή',

	'BACK'					=> 'Πίσω',

	'COLOUR_SWATCH'			=> 'Ασφαλή δείγματα χρώματος Web',
	'CONFIG_UPDATED'		=> 'Επιτυχής ενημέρωση ρυθμίσεων.',
	'CRON_LOCK_ERROR'		=> 'Δεν ήταν δυνατή η λήψη του cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Δεν ήταν δυνατή η εύρεση εργασίας cron “%s”.',
	'CRON_NO_TASK'			=> 'Δεν υπάρχουν εργασίες cron που πρέπει να εκτελέσετε αυτήν τη στιγμή.',
	'CRON_NO_TASKS'			=> 'Δεν βρέθηκαν εργασίες cron.',

	'DEACTIVATE'				=> 'Απενεργοποίηση',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Η διαδρομή που εισάγατε “%s” δεν υπάρχει.',
	'DIRECTORY_NOT_DIR'			=> 'Η διαδρομή που εισάγατε “%s” δεν είναι ένας κατάλογος.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Η διαδρομή που εισάγατε “%s” δεν έχει δικαιώματα εγγραφής.',
	'DISABLE'					=> 'Απενεργοποίηση',
	'DOWNLOAD'					=> 'Μεταφόρτωση',
	'DOWNLOAD_AS'				=> 'Μεταφόρτωση ως',
	'DOWNLOAD_STORE'			=> 'Μεταφόρτωση ή αποθήκευση αρχείου',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Μπορείτε να μεταφορτώσετε το αρχείο απευθείας ή να το αποθηκεύσετε στο φάκελο <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Μεταφορτώσεις',

	'EDIT'					=> 'Επεξεργασία',
	'ENABLE'				=> 'Ενεργοποίηση',
	'EXPORT_DOWNLOAD'		=> 'Μεταφόρτωση',
	'EXPORT_STORE'			=> 'Αποθήκευση',

	'GENERAL_OPTIONS'		=> 'Γενικές επιλογές',
	'GENERAL_SETTINGS'		=> 'Γενικές ρυθμίσεις',
	'GLOBAL_MASK'			=> 'Γενικά αποτελέσματα δικαιωμάτων',

	'INSTALL'				=> 'Εγκατάσταση',
	'IP'					=> 'IP Χρήστη',
	'IP_HOSTNAME'			=> 'Διευθύνσεις IP ή ονόματα εξυπηρετητών',

	'LOAD_NOTIFICATIONS'			=> 'Εμφάνιση ειδοποιήσεων',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Εμφάνιση της λίστας ειδοποιήσεων σε κάθε σελίδα (συνήθως στην κεφαλίδα).',	
	'LOGGED_IN_AS'			=> 'Συνδεθήκατε ως:',
	'LOGIN_ADMIN'			=> 'Για να διαχειριστείτε το σύστημα συζητήσεων πρέπει να είστε πιστοποιημένο μέλος.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Για να διαχειριστείτε το σύστημα συζητήσεων πρέπει να επαναπιστοποιήσετε τον εαυτό σας.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Πιστοποιηθήκατε με επιτυχία και τώρα θα προωθηθείτε στον Πίνακα Ελέγχου Διαχειριστή.',
	'LOOK_UP_FORUM'			=> 'Επιλέξτε μια Δ. Συζήτηση',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Μπορείτε να επιλέξετε περισσότερες από μια Δ. Συζήτηση.',

	'MANAGE'				=> 'Διαχείριση',
	'MENU_TOGGLE'			=> 'Απόκρυψη ή εμφάνιση πλάγιου μενού',
	'MORE'					=> 'Περισσότερα',			// Δεν χρησιμοποιείται αυτήν τη στιγμή
	'MORE_INFORMATION'		=> 'Περισσότερες πληροφορίες »',
	'MOVE_DOWN'				=> 'Μετακίνηση κάτω',
	'MOVE_UP'				=> 'Μετακίνηση επάνω',

	'NOTIFY'				=> 'Ειδοποίηση',
	'NO_ADMIN'				=> 'Δεν είστε πιστοποιημένοι για να διαχειριστείτε αυτό το σύστημα συζητήσεων.',
	'NO_EMAILS_DEFINED'		=> 'Δεν βρέθηκε έγκυρη διεύθυνση αλληλογραφίας.',
	'NO_FILES_TO_DELETE'	=> 'Τα συνημμένα που επιλέξατε για διαγραφή δεν υπάρχουν',
	'NO_PASSWORD_SUPPLIED'	=> 'Πρέπει να εισάγετε τον κωδικό πρόσβασης σας για να αποκτήσετε πρόσβαση στον Πίνακα Ελέγχου Διαχειριστή.',

	'OFF'					=> 'ΚΛΕΙΣΤΟ',
	'ON'					=> 'ΑΝΟΙΧΤΟ',

	'PARSE_BBCODE'						=> 'Ανάλυση BBCode',
	'PARSE_SMILIES'						=> 'Ανάλυση εικονιδίων smilies',
	'PARSE_URLS'						=> 'Ανάλυση συνδέσμων',
	'PERMISSIONS_TRANSFERRED'			=> 'Επιτυχής μεταφορά προσβάσεων',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Αυτήν τη στιγμή έχετε τα δικαιώματα από %1$s. Μπορείτε τώρα να περιηγηθείτε στο σύστημα συζητήσεων με τα δικαιώματα του μέλους, αλλά δεν έχετε πρόσβαση στον Πίνακα Ελέγχου Διαχειριστή εφόσον προσβάσεις διαχειριστή δεν μεταβιβάσθηκαν. Μπορείτε να <a href="%2$s"><strong>επαναφέρετε τις προσβάσεις σας</strong></a> οποιαδήποτε στιγμή.',
	'PROCEED_TO_ACP'					=> '%sΜετάβαση στον Πίνακα ελέγχου διαχειριστή%s',

	'REMIND'							=> 'Υπενθύμιση',
	'RESYNC'							=> 'Επανασυγχρονισμός',

	'RUNNING_TASK'			=> 'Εκτέλεση εργασίας: %s.',
	'SELECT_ANONYMOUS'		=> 'Επιλέξτε επισκέπτη',
	'SELECT_OPTION'			=> 'Επιλέξτε δυνατότητα',

	'SETTING_TOO_LOW'		=> 'Η παρεχόμενη τιμή για τη ρύθμιση “%1$s” είναι πολύ μικρή. Η ελάχιστη αποδεκτή τιμή είναι %2$d.',
	'SETTING_TOO_BIG'		=> 'Η παρεχόμενη τιμή για τη ρύθμιση “%1$s” είναι πολύ μεγάλη. Η μέγιστη αποδεκτή τιμή είναι %2$d.',
	'SETTING_TOO_LONG'		=> 'Η παρεχόμενη τιμή για τη ρύθμιση “%1$s” είναι πολύ μεγάλη. Το μέγιστο μήκος που επιτρέπετε είναι %2$d.',
	'SETTING_TOO_SHORT'		=> 'Η παρεχόμενη τιμή για τη ρύθμιση “%1$s” είναι πολύ μικρή. Το ελάχιστο μήκος που επιτρέπετε είναι %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Προβολή όλων των ενεργειών',

	'TASKS_NOT_READY'			=> 'Δεν είναι έτοιμες εργασίες:',
	'TASKS_READY'			=> 'Έτοιμες εργασίες:',
	'TOTAL_SIZE'			=> 'Συνολικό μέγεθος',

	'UCP'					=> 'Πίνακας Ελέγχου Μέλους',
	'USERNAMES_EXPLAIN'		=> 'Τοποθετήστε κάθε όνομα μέλους σε διαφορετική γραμμή.',
	'USER_CONTROL_PANEL'	=> 'Πίνακας ελέγχου μέλους',

	'WARNING'				=> 'Προειδοποίηση',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Αυτή η σελίδα περιέχει πληροφορίες για την έκδοση PHP που είναι εγκατεστημένη σε αυτόν τον διακομιστή. Περιέχει λεπτομέρειες για τις φορτωμένες μονάδες, τις διαθέσιμες μεταβλητές και προεπιλεγμένες ρυθμίσεις. Αυτές οι πληροφορίες μπορεί να είναι χρήσιμες κατά τη διάγνωση προβλημάτων. Παρακαλούμε να λάβετε υπόψη ότι ορισμένες εταιρείες φιλοξενίας ιστοσελίδων μπορεί να περιορίζουν τις πληροφορίες που εμφανίζονται εδώ για λόγους ασφαλείας. Σας συνιστούμε να μη δίνετε οποιεσδήποτε λεπτομέρειες σχετικά με αυτήν τη σελίδα, εκτός εάν ζητηθεί από <a href="https://www.phpbb.com/about/team/">Επίσημα μέλη</a> της ομάδας υποστήριξης.',

	'NO_PHPINFO_AVAILABLE'	=> 'Οι πληροφορίες σχετικά με τις ρυθμίσεις της PHP σας δεν είναι σε θέση να καθοριστούν. Η phpinfo() έχει απενεργοποιηθεί για λόγους ασφαλείας .',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Ο κατάλογος αυτός περιλαμβάνει όλες τις ενέργειες που πραγματοποιούνται από διαχειριστές του συστήματος συζητήσεων. Μπορείτε να τις ταξινομήσετε κατά όνομα μέλους, ημερομηνία, IP διεύθυνση ή ενέργεια. Αν έχετε τα κατάλληλα δικαιώματα μπορείτε να σβήσετε μεμονωμένες ενέργειες ή το αρχείο καταγραφής στο σύνολό του.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Ο κατάλογος αυτός περιλαμβάνει τις ενέργειες που πραγματοποιούνται από το ίδιο το σύστημα συζητήσεων. Αυτό το αρχείο καταγραφής σας παρέχει πληροφορίες τις οποίες μπορείτε να χρησιμοποιήσετε για την επίλυση συγκεκριμένων προβλημάτων, για παράδειγμα, τη μη παράδοση των μηνυμάτων ηλεκτρονικού ταχυδρομείου. Μπορείτε να τα ταξινομήσετε ανά όνομα μέλους, ημερομηνία, IP διεύθυνση ή ενέργεια. Αν έχετε τα κατάλληλα δικαιώματα μπορείτε να σβήσετε μεμονωμένες ενέργειες ή το αρχείο καταγραφής στο σύνολό του.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Ο κατάλογος αυτός περιλαμβάνει όλες τις ενέργειες που γίνονται στις Δ. Συζητήσεις, καθώς και τις ενέργειες που υλοποιούνται για τα μέλη από συντονιστές, συμπεριλαμβανομένων των αποκλεισμών. Μπορείτε να τις ταξινομήσετε κατά όνομα μέλους, ημερομηνία, IP διεύθυνση ή ενέργεια. Αν έχετε τα κατάλληλα δικαιώματα μπορείτε να σβήσετε μεμονωμένες ενέργειες ή το αρχείο καταγραφής στο σύνολό του.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Ο κατάλογος αυτός περιλαμβάνει όλες τις ενέργειες που πραγματοποιούνται από μέλη και προς μέλη (αναφορές, προειδοποιήσεις και σημειώσεις μέλους).',
	'ALL_ENTRIES'				=> 'Όλες οι καταχωρήσεις',

	'DISPLAY_LOG'	=> 'Εμφάνιση καταχωρήσεων που έγιναν πριν από',

	'NO_ENTRIES'	=> 'Δεν υπάρχουν καταχωρήσεις ιστορικού για αυτήν την περίοδο.',

	'SORT_IP'		=> 'IP διεύθυνση',
	'SORT_DATE'		=> 'Ημερομηνία',
	'SORT_ACTION'	=> 'Ενέργειες ιστορικού',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Σας ευχαριστούμε για την επιλογή phpBB ως λύση συστήματος συζητήσεων. Αυτή η οθόνη θα σας δώσει μια γρήγορη επισκόπηση όλων των διαφόρων στατιστικών του συστήματος συζητήσεων σας. Οι σύνδεσμοι στην αριστερή πλευρά αυτής της οθόνης σάς επιτρέπουν να ελέγχετε κάθε πτυχή της εμπειρίας του συστήματος συζητήσεων σας. Κάθε σελίδα θα έχει οδηγίες για το πώς να χρησιμοποιήσετε τα εργαλεία.',
	'ADMIN_LOG'					=> 'Ιστορικό ενεργειών διαχειριστή',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Αυτό παρέχει μια επισκόπηση των τελευταίων πέντε ενεργειών που έχουν υλοποιηθεί από διαχειριστές Δ. Συζήτησης. Ένα πλήρες αντίγραφο του αρχείου καταγραφής μπορεί να προβληθεί από το κατάλληλο αντικείμενο μενού ή ακολουθώντας τον παρακάτω σύνδεσμο.',
	'AVATAR_DIR_SIZE'			=> 'Μέγεθος φακέλου άβαταρ',

	'BOARD_STARTED'		=> 'Ημερομηνία εκκίνησης συστήματος συζητήσεων',
	'BOARD_VERSION'		=> 'Έκδοση συστήματος συζητήσεων',

	'DATABASE_SERVER_INFO'	=> 'Διακομιστής βάσης δεδομένων',
	'DATABASE_SIZE'			=> 'Μέγεθος βάσης δεδομένων',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Η λειτουργία υπερφόρτωσης δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> πρέπει να οριστεί ή σε 0 ή 4. Μπορείτε να ελέγξετε την τρέχουσα τιμή σε <samp>Πληροφορίες PHP</samp> σελίδα.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Η διαφανής κωδικοποίηση χαρακτήρων δεν έχει ρυθμιστεί σωστά.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> πρέπει να οριστεί σε 0. Μπορείτε να ελέγξετε την τρέχουσα τιμή σε <samp>Πληροφορίες PHP</samp> σελίδα.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP μετατροπή χαρακτήρων εισόδου δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> πρέπει να οριστεί σε <samp>pass</samp>. Μπορείτε να ελέγξετε την τρέχουσα τιμή σε <samp>Πληροφορίες PHP</samp> σελίδα.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP μετατροπή χαρακτήρων εξόδου δεν έχει ρυθμιστεί σωστά',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> πρέπει να οριστεί σε <samp>pass</samp>. Μπορείτε να ελέγξετε την τρέχουσα τιμή σε <samp>Πληροφορίες PHP</samp> σελίδα.',

	'FILES_PER_DAY'		=> 'Συνημμένα ανά ημέρα',
	'FORUM_STATS'		=> 'Στατιστικά συστήματος συζητήσεων',

	'GZIP_COMPRESSION'	=> 'GZip συμπίεση ',

	'NO_SEARCH_INDEX'	=> 'Το επιλεγμένο σύστημα υποστήριξης αναζήτησης δεν έχει ευρετήριο αναζήτησης.<br />Παρακαλώ δημιουργείστε ευρετήριο για “%1$s” στο %2$sευρετήριο αναζήτησης%3$s τμήμα.',
	'NOT_AVAILABLE'		=> 'Μη διαθέσιμο',
	'NUMBER_FILES'		=> 'Αριθμός συνημμένων',
	'NUMBER_POSTS'		=> 'Αριθμός δημοσιεύσεων',
	'NUMBER_TOPICS'		=> 'Αριθμός θεμάτων',
	'NUMBER_USERS'		=> 'Αριθμός μελών',
	'NUMBER_ORPHAN'		=> 'Ορφανά συνημμένα',

	'PHP_VERSION_OLD'	=> 'Η έκδοση της PHP σε αυτόν τον διακομιστή (%1$s) δεν θα υποστηρίζεται από μελλοντικές εκδόσεις του λογισμικού phpBB. Η παλαιότερη δυνατή έκδοση θα μπορεί να είναι PHP %2$s. %3$sΛεπτομέρειες%4$s',

	'POSTS_PER_DAY'		=> 'Δημοσιεύσεις ανά ημέρα',

	'PURGE_CACHE'			=> 'Εκκαθάριση λανθάνουσας μνήμης',
	'PURGE_CACHE_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εκκαθαρίσετε τη λανθάνουσα μνήμη;',
	'PURGE_CACHE_EXPLAIN'	=> 'Εκκαθάριση όλων των στοιχείων που σχετίζονται με τη λανθάνουσας μνήμη, αυτό περιλαμβάνει οποιαδήποτε προσωρινά αποθηκευμένα αρχεία πρότυπα ή ερωτήματα.',
	'PURGE_CACHE_SUCCESS'	=> 'Επιτυχής εκκαθάριση λανθάνουσας μνήμης.',

	'PURGE_SESSIONS'			=> 'Εκκαθάριση όλων των συνόδων',
	'PURGE_SESSIONS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εκκαθαρίσετε όλες τις συνόδους; Αυτό θα αποσυνδέσει όλα τα μέλη',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Εκκαθάριση όλων των συνόδων. Αυτό θα αποσυνδέσει όλα τα μέλη με το άδειασμα του πίνακα session.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Επιτυχής εκκαθάριση συνόδων.',

	'RESET_DATE'					=> 'Επαναφορά ημερομηνίας εκκίνησης συστήματος συζητήσεων',
	'RESET_DATE_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε την ημερομηνίας εκκίνησης του συστήματος συζητήσεων;',
	'RESET_DATE_SUCCESS'				=> 'Επιτυχής επαναφορά ημερομηνίας εκκίνησης της Δ. Συζήτησης',
	'RESET_ONLINE'					=> 'Απαλοιφή “Περισσότερα μέλη σε σύνδεση”',
	'RESET_ONLINE_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε τον μετρητή “Περισσότερα μέλη σε σύνδεση”;',
	'RESET_ONLINE_SUCCESS'				=> 'Επιτυχής επαναφορά του μετρητή “Περισσότερα μέλη σε σύνδεση”',
	'RESYNC_POSTCOUNTS'				=> 'Επανασυγχρονισμός μετρητών θεμάτων',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Μόνον υπαρκτές δημοσιεύσεις θα ληφθούν υπόψη. Διαγραμμένες δημοσιεύσεις δεν θα προσμετρώνται.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επανασυγχρονίσετε τον μετρητή των δημοσιεύσεων;',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Επιτυχής επανασυγχρονισμός του μετρητή δημοσιεύσεων',
	'RESYNC_POST_MARKING'			=> 'Επανασυγχρονισμός σημειωμένων θεμάτων',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να επανασυγχρονίσετε τα σημειωμένα θέματα;',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Πρώτα αφαιρεί τη σημείωση σε όλα τα θέματα και, στη συνέχεια, σημειώνει σωστά θέματα που έχουν δει οποιαδήποτε δραστηριότητα κατά τη διάρκεια των τελευταίων έξι μηνών.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Επιτυχής επανασυγχρονισμός σημειωμένων θεμάτων',
	'RESYNC_STATS'					=> 'Επανασυγχρονισμός στατιστικών',
	'RESYNC_STATS_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να επανασυγχρονίσετε τα στατιστικά;',
	'RESYNC_STATS_EXPLAIN'			=> 'Επανυπολογισμός του συνολικού αριθμού δημοσιεύσεων, θεμάτων, μελών και αρχείων.',
	'RESYNC_STATS_SUCCESS'			=> 'Επιτυχής επανασυγχρονισμός στατιστικών',
	'RUN'							=> 'Εκτέλεση τώρα',

	'STATISTIC'					=> 'Στατιστικά',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Επανασυγχρονισμός ή επαναφορά στατιστικών',

	'TIMEZONE_INVALID'	=> 'Η ζώνη ώρας που έχετε επιλέξει δεν είναι έγκυρη.',
	'TIMEZONE_SELECTED'	=> '(τρέχουσα επιλεγμένη)',
	'TOPICS_PER_DAY'	=> 'Θέματα ανά ημέρα',

	'UPLOAD_DIR_SIZE'	=> 'Μέγεθος συνημμένων σε δημοσιεύσεις',
	'USERS_PER_DAY'		=> 'Μέλη ανά ημέρα',

	'VALUE'							=> 'Τιμή',
	'VERSIONCHECK_FAIL'				=> 'Αποτυχία λήψης πληροφοριών τελευταίας έκδοσης.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Επανέλεγχος έκδοσης',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Οι πληροφορίες της νεότερης έκδοσης περιέχουν μια τιμή που δεν υποστηρίζεται.',
	'VERSIONCHECK_INVALID_URL'		=> 'Οι πληροφορίες της νεότερης έκδοσης περιέχουν ένα άκυρο URL.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Οι πληροφορίες της νεότερης έκδοσης περιέχουν μια άκυρη έκδοση.',
	'VIEW_ADMIN_LOG'				=> 'Προβολή αρχείου καταγραφής διαχειριστή',
	'VIEW_INACTIVE_USERS'			=> 'Προβολή ανενεργών μελών',

	'WELCOME_PHPBB'			=> 'Καλώς ήρθατε στο phpBB',
	'WRITABLE_CONFIG'		=> 'Το αρχείο ρυθμίσεων σας (config.php) είναι προς το παρόν εγγράψιμο από όλους. Σας συνιστούμε ανεπιφύλακτα να αλλάξετε τα δικαιώματα σε 640 ή τουλάχιστον σε 644 (για παράδειγμα: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Ημερομηνία απενεργοποίησης',
	'INACTIVE_REASON'				=> 'Αιτία',
	'INACTIVE_REASON_MANUAL'		=> 'Ο λογαριασμός απενεργοποιήθηκε από διαχειριστή',
	'INACTIVE_REASON_PROFILE'		=> 'Επιτυχής αλλαγή δεδομένων προφίλ',
	'INACTIVE_REASON_REGISTER'		=> 'Προσφάτως δημιουργημένος λογαριασμός',
	'INACTIVE_REASON_REMIND'		=> 'Εξαναγκασμός μέλους για επανενεργοποίηση',
	'INACTIVE_REASON_UNKNOWN'		=> 'Άγνωστο',
	'INACTIVE_USERS'				=> 'Ανενεργά μέλη',
	'INACTIVE_USERS_EXPLAIN'		=> 'Αυτός είναι ένας κατάλογος των μελών που έχουν εγγραφεί αλλά των οποίων οι λογαριασμοί είναι ανενεργοί. Μπορείτε να ενεργοποιήσετε, να διαγράψετε ή να υπενθυμίσετε (με την αποστολή ηλεκτρονικού ταχυδρομείου) αυτά τα μέλη, εάν το επιθυμείτε.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Αυτός είναι ένας κατάλογος των τελευταίων 10 εγγεγραμμένων μελών που έχουν ανενεργούς λογαριασμούς. Οι λογαριασμοί είναι ανενεργοί είτε επειδή η ενεργοποίηση λογαριασμού ήταν ενεργοποιημένη στις ρυθμίσεις εγγραφής μέλους και οι λογαριασμοί των μελών αυτών δεν έχουν ακόμη ενεργοποιηθεί, είτε επειδή οι λογαριασμοί αυτοί έχουν απενεργοποιηθεί. Ένας πλήρης κατάλογος είναι διαθέσιμος ακολουθώντας τον παρακάτω σύνδεσμο από όπου μπορείτε να ενεργοποιήσετε, να διαγράψετε ή να υπενθυμίσετε (με την αποστολή ηλεκτρονικού ταχυδρομείου) αυτά τα μέλη, εάν το επιθυμείτε.',

	'NO_INACTIVE_USERS'	=> 'Κανένα ανενεργό μέλος',

	'SORT_INACTIVE'		=> 'Ημερομηνία απενεργοποίησης',
	'SORT_LAST_VISIT'	=> 'Τελευταία επίσκεψη',
	'SORT_REASON'		=> 'Αιτία',
	'SORT_REG_DATE'		=> 'Ημερομηνία εγγραφής',
	'SORT_LAST_REMINDER'=> 'Τελευταία υπενθύμιση',
	'SORT_REMINDER'		=> 'Αποστολή υπενθύμισης',

	'USER_IS_INACTIVE'		=> 'Το μέλος είναι ανενεργό',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Παρακαλούμε στείλτε πληροφορίες σχετικά με τον διακομιστή και τη διαμόρφωση του συστήματος συζητήσεων σας στο phpBB για στατιστική ανάλυση. Όλες οι πληροφορίες οι οποίες θα μπορούσαν να εντοπίσουν εσάς ή την ιστοσελίδα σας έχουν αφαιρεθεί - τα στοιχεία είναι εντελώς <strong>ανώνυμα</strong>. Βασίζουμε τις αποφάσεις σχετικά με μελλοντικές εκδόσεις phpBB σε αυτές τις πληροφορίες. Τα στατιστικά στοιχεία διατίθενται δημοσίως. Μοιραζόμαστε επίσης αυτά τα δεδομένα με το έργο της PHP, τη γλώσσα προγραμματισμού phpBB είναι κατασκευασμένο με την οποία.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Χρησιμοποιώντας το κουμπί παρακάτω μπορείτε να κάνετε προεπισκόπηση όλες τις μεταβλητές οι οποίες θα διαβιβαστούν.',
	'DONT_SEND_STATISTICS'		=> 'Επιστροφή στον ΠΕΔ εάν δεν θέλετε να στείλετε πληροφορίες στατιστικών στο phpBB.',
	'GO_ACP_MAIN'				=> 'Μετάβαση στην αρχική σελίδα του ΠΕΔ',
	'HIDE_STATISTICS'			=> 'Απόκρυψη λεπτομερειών',
	'SEND_STATISTICS'			=> 'Αποστολή στατιστικών πληροφοριών',
	'SHOW_STATISTICS'			=> 'Προβολή λεπτομερειών',
	'THANKS_SEND_STATISTICS'	=> 'Σας ευχαριστούμε για την υποβολή των πληροφοριών σας.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα μέλους</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα ομάδας μέλους</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα γενικών συντονιστών μέλους</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα γενικών συντονιστών ομάδας</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα διαχειριστών μέλους</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα διαχειριστών ομάδας</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν διαχειριστές</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Προστέθηκαν ή επεξεργάστηκαν γενικοί συντονιστές</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα πρόσβασης Δ. Συζήτησης μέλους</strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα συντονιστών πρόσβασης Δ. Συζήτησης μέλους</strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα πρόσβασης Δ. Συζήτησης ομάδας</strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν δικαιώματα πρόσβασης συντονιστών Δ. Συζήτησης ομάδας</strong> από %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Προστέθηκαν ή επεξεργάστηκαν Συντονιστές</strong> από %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Προστέθηκαν ή επεξεργάστηκαν προσβάσεις Δ. Συζήτησης</strong> από %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Αφαιρέθηκαν Διαχειριστές</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Αφαιρέθηκαν Γενικοί Συντονιστές</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Αφαιρέθηκαν Συντονιστές</strong> από %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Αφαιρέθηκαν δικαιώματα Δ. Συζήτησης μέλους / ομάδας</strong> από %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Μεταφέρθηκαν δικαιώματα από</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Τα δικά του δικαιώματα αποκαταστάθηκαν μετά από χρήση των δικαιωμάτων από</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Αποτυχημένη προσπάθεια σύνδεσης Διαχειριστή</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Επιτυχημένη σύνδεση Διαχειριστή</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Αφαιρέθηκαν συνημμένα μέλους</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Προστέθηκε ή επεξεργάστηκε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Αφαιρέθηκε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Ενημερώθηκε επέκταση συνημμένου</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Προστέθηκε επέκταση ομάδας</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Επεξεργάστηκε επέκταση ομάδας</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Διαγράφηκε επέκταση ομάδας</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Φορτώθηκε ορφανό αρχείο στη δημοσίευση</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Διαγράφηκε ορφανό αρχείο</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Εξαιρέθηκε μέλος από αποκλεισμό </strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Εξαιρέθηκε διεύθυνση IP από αποκλεισμό</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Εξαιρέθηκε ηλεκτρονικό ταχυδρομείο από αποκλεισμό</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Αποκλείστηκε μέλος</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Αποκλείστηκε διεύθυνση IP</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Αποκλείστηκε ηλεκτρονικού ταχυδρομείου</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Άρθηκε αποκλεισμός μέλους</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Άρθηκε αποκλεισμός διεύθυνσης IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Άρθηκε αποκλεισμός ηλεκτρονικού ταχυδρομείου</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Προστέθηκε νέος BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Επεξεργάστηκε BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Διαγράφηκε BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Νέο bot προστέθηκε</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Διαγράφηκε bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Υφιστάμενο bot ενημερώθηκε</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Εκκαθαρίστηκε ιστορικό διαχειριστή</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Εκκαθαρίστηκε ιστορικό σφαλμάτων</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Εκκαθαρίστηκε ιστορικό συντονιστών</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Εκκαθαρίστηκε ιστορικό μέλους</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Εκκαθαρίστηκε ιστορικό μελών</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Άλλαξαν ρυθμίσεις συνημμένων </strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Άλλαξαν ρυθμίσεις πιστοποίησης</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Άλλαξαν ρυθμίσεις άβαταρ</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Άλλαξαν ρυθμίσεις cookie </strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Άλλαξαν ρυθμίσεις ηλεκτρονικού ταχυδρομείου</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Άλλαξαν ρυθμίσεις χαρακτηριστικών συστήματος συζητήσεων</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Άλλαξαν ρυθμίσεις φόρτωσης</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Άλλαξαν ρυθμίσεις προσωπικών μηνυμάτων</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Άλλαξαν ρυθμίσεις δημοσίευσης</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Άλλαξαν ρυθμίσεις εγγραφής μέλους</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Άλλαξαν ρυθμίσεις τροφοδοσίας</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Άλλαξαν ρυθμίσεις αναζήτησης</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Άλλαξαν ρυθμίσεις ασφαλείας</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Άλλαξαν ρυθμίσεις διακομιστή</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Άλλαξαν ρυθμίσεις συστήματος συζητήσεων</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Άλλαξαν ρυθμίσεις υπογραφών</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Άλλαξαν ρυθμίσεις ενοχλητικών μηνυμάτων</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Εγκρίθηκε θέμα</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Νέα μηνύματα μέλους</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Διαγράφηκε δημοσίευση “%1$s” δημοσιευμένη από “%2$s” για τον ακόλουθο λόγο</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Διαγράφηκε μετακινημένο θέμα</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Διαγράφηκε θέμα “%1$s” δημοσιευμένο από “%2$s” για τον ακόλουθο λόγο</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Αντιγράφτηκε θέμα</strong><br />» από %s',
	'LOG_LOCK'					=> '<strong>Κλειδώθηκε θέμα</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Κλειδώθηκε δημοσίευση</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Συγχωνεύτηκαν δημοσιεύσεις</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Μετακινήθηκε θέμα</strong><br />» από %1$s σε %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Μετακινήθηκε θέμα</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Έκλεισε αναφορά ΠΜ</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Διαγράφηκε αναφορά ΠΜ</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Εγκρίθηκε δημοσίευση</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Απορρίφθηκε δημοσίευση “%1$s” δημοσιευμένη από “%3$s” για τον ακόλουθο λόγο</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Επεξεργάστηκε δημοσίευση “%1$s” δημοσιευμένη από “%2$s” για τον ακόλουθο λόγο</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Αποκαταστάθηκε δημοσίευση</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Έκλεισε αναφορά</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Διαγράφηκε αναφορά</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Αποκαταστάθηκε θέμα “%1$s” δημοσιευμένο από</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Σημειώθηκε ως διαγραμμένη δημοσίευση “%1$s” δημοσιευμένη από “%2$s” για τον ακόλουθο λόγο</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Σημειώθηκε ως διαγραμμένο θέμα “%1$s” δημοσιευμένο από “%2$s” για τον ακόλουθο λόγο</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Μετακινήθηκαν διασπασμένα θέματα</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Διασπάστηκαν δημοσιεύσεις</strong><br />» από %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Εγκρίθηκε θέμα</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Αποκαταστάθηκε θέμα</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Απορρίφθηκε θέμα “%1$s” δημοσιευμένο από “%3$s” για τον ακόλουθο λόγο</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Επανασυγχρονίστηκε μετρητής θέματος</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Άλλαξε τύπος θέματος</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Ξεκλειδώθηκε θέμα</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Ξεκλειδώθηκε δημοσίευση</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Προστέθηκε μη επιτρεπτό όνομα μέλους</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Διαγράφηκε μη επιτρεπτό όνομα μέλους</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Αντίγραφο ασφαλείας βάσης</strong>',
	'LOG_DB_DELETE'			=> '<strong>Διαγράφηκε αντίγραφο ασφαλείας βάσης δεδομένων</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Επαναφέρθηκε αντίγραφο ασφαλείας βάσης δεδομένων</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Εξαιρέθηκε διεύθυνση IP / όνομα εξυπηρετητή από τη λίστα μεταφόρτωσης</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Προστέθηκε διεύθυνση IP / όνομα εξυπηρετητή στη λίστα μεταφόρτωσης</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Αφαιρέθηκε διεύθυνση IP / όνομα εξυπηρετητή από τη λίστα μεταφόρτωσης</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Σφάλμα Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Σφάλμα ηλεκτρονικού ταχυδρομείου</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Σφάλμα CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Δημιουργήθηκε νέα Δ. Συζήτησης</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Αντιγράφτηκαν Δ. Συζήτησης δικαιώματα</strong> από %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Διαγράφηκε Δ. Συζήτηση</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Διαγράφηκε Δ. Συζήτηση και οι υπό-συζητήσεις της</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Διαγράφηκε Δ. Συζήτηση και μεταφέρθηκαν οι υπό-συζητήσεις της</strong> σε %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Διαγράφηκε Δ. Συζήτηση και μεταφέρθηκαν δημοσιεύσεις</strong> σε %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Διαγράφηκε Δ. Συζήτηση και οι υπό-συζητήσεις της και μεταφέρθηκαν δημοσιεύσεις</strong> σε %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Διαγράφηκε Δ. Συζήτηση, μετακινήθηκαν δημοσιεύσεις</strong> σε %1$s <strong>και υπό-συζητήσεις</strong> σε %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Διαγράφηκε Δ. Συζήτηση και οι δημοσιεύσεων της</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Διαγράφηκε Δ. Συζήτηση, οι δημοσιεύσεις της και οι υπό-συζητήσεις της</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Διαγράφηκε Δ. Συζήτηση και οι δημοσιεύσεις της, μετακινήθηκαν υπό-συζητήσεις</strong> σε %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Επεξεργάστηκαν λεπτομέρειες Δ. Συζήτησης</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Μετακινήθηκε Δ. Συζήτηση</strong> %1$s <strong>κάτω</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Μετακινήθηκε Δ. Συζήτηση</strong> %1$s <strong>πάνω</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Επανασυγχρονίστηκε Δ. Συζήτηση</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Ένα γενικό σφάλμα προέκυψε</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Δημιουργήθηκε νέα ομάδα</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Η ομάδα “%1$s” δηλώθηκε ως προεπιλεγμένη για μέλη</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Ομάδα διαγράφηκε</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Συντονιστές ομάδας υποβιβάστηκαν στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Μέλη προβιβάστηκαν σε συντονιστές στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Μέλη αφαιρέθηκαν από την ομάδα</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Ανανεώθηκαν λεπτομέρειες ομάδας</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Προστέθηκαν νέοι συντονιστές την ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Προστέθηκαν νέα μέλη στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Εγκρίθηκαν μέλη στην ομάδα</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Μέλη που ζήτησαν να ενταχθούν στην ομάδα “%1$s” και χρειάζονται έγκριση</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Σφάλμα κατά τη δημιουργία της εικόνας</strong><br />»Λάθος σε %1$s και γραμμή %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Ενεργοποιήθηκαν ανενεργά μέλη</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Διαγράφηκαν ανενεργά μέλη</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Στάλθηκε ηλεκτρονικό ταχυδρομείο υπενθύμισης σε ανενεργά μέλη</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Έγινε μετατροπή από %1$s σε phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Εγκαταστάθηκε phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Συνόδου διεύθυνσης IP / προγράμματος περιήγησης / X_FORWARDED_FOR έλεγχος απέτυχε</strong><br />»Μέλους διεύθυνση IP “<em>%1$s</em>” ελέγχθηκε κατά διεύθυνση IP “<em>%2$s</em>”, μέλους συμβολοσειρά προγράμματος περιήγησης “<em>%3$s</em>” ελέγχθηκε κατά σύνοδο συμβολοσειρά προγράμματος περιήγησης “<em>%4$s</em>” και μέλους X_FORWARDED_FOR συμβολοσειρά “<em>%5$s</em>” ελέγχθηκε κατά σύνοδο X_FORWARDED_FOR συμβολοσειρά “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Άλλαξε ο λογαριασμός Jabber</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Άλλαξε ο κωδικός πρόσβασης Jabber</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Καταχωρήθηκε ο λογαριασμός Jabber</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Άλλαξαν οι ρυθμίσεις του Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Διαγράφηκε πακέτο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Εγκαταστάθηκε πακέτο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Ανανεώθηκαν λεπτομέρειες πακέτου γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Αντικαταστάθηκε αρχείο γλώσσας</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Υποβλήθηκε αρχείο γλώσσας και αποθηκεύτηκε στον φάκελο store</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Αποστάλθηκε μαζική ηλεκτρονική αλληλογραφία</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Άλλαξε ο συγγραφέας σε θέμα “%1$s”</strong><br />» από %2$s σε %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Απενεργοποιήθηκε μονάδα</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Ενεργοποιήθηκε μονάδα</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Μετακινήθηκε μονάδα προς τα κάτω</strong><br />» %1$s κάτω από %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Μετακινήθηκε μονάδα προς τα πάνω</strong><br />» %1$s πάνω από %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Αφαιρέθηκε μονάδα</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Προστέθηκε μονάδα</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Επεξεργάστηκε μονάδα</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Διαχειριστή</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Δ. Συζήτησης</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος Συντονιστή</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Προστέθηκε ρόλος μέλους</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Επεξεργάσθηκε ρόλος μέλους</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Αφαιρέθηκε ρόλος μέλους</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Δεν είναι δυνατό το άνοιγμα του %1$s για καθαρισμό, ελέγξτε δικαιώματα.</strong><br />Εξαίρεση: %2$s<br />Ίχνος: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Ενεργοποιήθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Προστέθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Απενεργοποιήθηκε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Άλλαξε πεδίο προφίλ</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Αφαιρέθηκε πεδίο προφίλ</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Πραγματοποιήθηκε καθαρισμός Δ. Συζήτησης</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Πραγματοποιήθηκε αυτόματος καθαρισμός δημ. συζήτησης</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Καθαρίστηκαν αυτόματα σύνδεσμοι προς μετακινημένα θέματα</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Απενεργοποιήθηκαν μέλη</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Πραγματοποιήθηκε καθαρισμός μελών και διαγραφή των δημοσιεύσεων τους</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Πραγματοποιήθηκε καθαρισμός μελών και διατήρηση των δημοσιεύσεων τους</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Εκκαθαρίστηκε λανθάνουσα μνήμη</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Εκκαθαρίστηκαν σύνοδοι</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Προστέθηκε νέος βαθμός</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Αφαιρέθηκε βαθμός</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Ενημερώθηκε βαθμός</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Προστέθηκε αναφοράς / απόρριψης λόγος</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Διαγράφηκε αναφοράς / απόρριψης λόγος</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Ενημερώθηκε αναφοράς / απόρριψης λόγος</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Απέτυχε η επαλήθευση αναφοράς</strong><br />»Αναφορά ήταν “<em>%1$s</em>”. Το αίτημα απορρίφθηκε και η σύνοδος τερματίστηκε.',
	'LOG_RESET_DATE'			=> '<strong>Επαναφέρθηκε η ημερομηνία έναρξης της Δ. Συζήτησης</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Μηδενίσθηκε ο μετρητής “Περισσότερα μέλη σε σύνδεση”</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Επανασυγχρονίστηκαν στατιστικά αρχείου</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Επανασυγχρονίστηκε ο μετρητής δημοσιεύσεων μέλους</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Επανασυγχρονίστηκαν σημειωμένα θέματα</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Επανασυγχρονίστηκαν τα στατιστικά δημοσιεύσεων, θεμάτων και μέλους</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Δημιουργήθηκε ευρετήριο αναζήτησης για</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Αφαιρέθηκε ευρετήριο αναζήτησης για</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx λάθος</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Προστέθηκε νέο στυλ</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Διαγράφηκε στυλ</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Επεξεργάσθηκε στυλ</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Εξήχθη στυλ</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Προστέθηκε νέο πακέτο προτύπων στη βάση δεδομένων</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Προστέθηκε νέο πακέτο προτύπων στο σύστημα αρχείων</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Διαγράφηκαν αποθηκευμένες εκδόσεις αρχείων πρότυπων του πακέτου πρότυπων <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Διαγράφτηκε πακέτο πρότυπων</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Επεξεργάσθηκε το πακέτο προτύπων <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Επεξεργάσθηκαν οι λεπτομέρειες προτύπου</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Εξήχθη πακέτο πρότυπων</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Ενημερώθηκε πακέτο πρότυπων</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Προστέθηκε νέο θέμα στη βάση δεδομένων</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Προστέθηκε νέο θέμα στο σύστημα αρχείων</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Διαγράφτηκε θέμα</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Επεξεργάσθηκαν οι λεπτομέρειες θέματος</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Επεξεργάσθηκε θέμα <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Επεξεργάσθηκε θέμα <em>%1$s</em></strong><br />» Αλλάχτηκε το αρχείο <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Εξήχθη θέμα</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Ανανεώθηκε θέμα</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Αναβαθμίσθηκε η Βάση Δεδομένων από την έκδοση %1$s στην έκδοση %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Αναβαθμίσθηκε το phpBB από την έκδοση %1$s στην έκδοση %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Ενεργοποιήθηκε μέλος</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Αποκλείσθηκε μέλος μέσω της διαχείρισης μέλους</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Αποκλείσθηκε διεύθυνση IP μέσω της διαχείρισης μέλους</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Αποκλείσθηκε διεύθυνση αλληλογραφίας μέσω της διαχείρισης μέλους</strong> για τον λόγο “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Διαγράφτηκε μέλος</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Αφαιρέθηκαν όλα τα συνημμένα που έγιναν από το μέλος</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Αφαιρέθηκε το άβαταρ του μέλους</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Άδειασαν εξερχόμενα μέλους </strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Αφαιρέθηκαν όλες οι δημοσιεύσεις που έγιναν από το μέλος</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Αφαιρέθηκε η υπογραφή του μέλους</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Απενεργοποιήθηκε μέλος</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Μετακινήθηκαν δημοσιεύεις μέλους</strong><br />» δημοσιεύσεις από “%1$s” στη Δ. Συζήτηση “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Άλλαξε κωδικός μέλους</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Εξαναγκάστηκε επανενεργοποίηση λογαριασμού μέλους</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Αφαιρέθηκε σήμανση πρόσφατο εγγεγραμμένο μέλος από το μέλος</strong><br />» %s',
	
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Το μέλος “%1$s” άλλαξε τη διεύθυνση αλληλογραφίας</strong><br />» από “%2$s” σε “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Άλλαξε όνομα μέλους </strong><br />» από “%1$s” σε “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Ενημερώθηκαν λεπτομέρειες μέλους</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Ενεργοποιήθηκε λογαριασμός μέλους</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Αφαιρέθηκε άβαταρ μέλους</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Αφαιρέθηκε υπογραφή μέλους</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Προστέθηκε σημείωση μέλους</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Προστέθηκε καταχώρηση:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Απενεργοποιήθηκε λογαριασμός μέλους</strong>',
	'LOG_USER_LOCK'				=> '<strong>Μέλος κλείδωσε το θέμα του</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Μεταφέρθηκαν όλες οι δημοσιεύσεις στη Δ. Συζήτηση</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Εξαναγκάσθηκε επανενεργοποίηση λογαριασμού μέλους</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Μέλος ξεκλείδωσε το θέμα του</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Προστέθηκε προειδοποίηση μέλους</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Η ακόλουθη προειδοποίηση εκδόθηκε σε αυτό το μέλος</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Το μέλος άλλαξε προεπιλεγμένη ομάδα</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Το μέλος υποβιβάστηκε από συντονιστής της ομάδας</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Το μέλος εντάχθηκε στην ομάδα</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Το μέλος εντάχθηκε στην ομάδα και χρειάζεται έγκριση</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Το μέλος αποχώρησε από την ομάδα</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Διαγράφηκε προειδοποίηση μέλους</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Διαγράφηκε προειδοποίηση μέλους</strong><br />» %1$s',
		2 => '<strong>Διαγράφηκαν %2$d προειδοποιήσεις μέλους</strong><br />» %1$s', // Παράδειγμα: '<strong>Διαγράφηκαν 2 προειδοποιήσεις μέλους</strong><br />» όνομα μέλους'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Διαγράφηκαν όλες οι προειδοποιήσεις μέλους</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Προστέθηκε λογοκρισία λέξης</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Αφαιρέθηκε λογοκρισία λέξης</strong><br />» %s',
 'LOG_WORD_EDIT'			=> '<strong>Επεξεργάσθηκε λογοκρισία λέξης</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Επέκταση ενεργοποιήθηκε</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Επέκταση απενεργοποιήθηκε</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Επέκτασης δεδομένα διαγράφηκαν</strong><br />» %s',
));

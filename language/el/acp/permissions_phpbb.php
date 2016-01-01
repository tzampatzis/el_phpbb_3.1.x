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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Ενέργειες',
	'ACL_CAT_CONTENT'		=> 'Περιεχόμενο',
	'ACL_CAT_FORUMS'		=> 'Δ. Συζητήσεις',
	'ACL_CAT_MISC'			=> 'Διάφορα',
	'ACL_CAT_PERMISSIONS'	=> 'Δικαιώματα',
	'ACL_CAT_PM'			=> 'Προσωπικά μηνύματα',
	'ACL_CAT_POLLS'			=> 'Δημοψηφίσματα',
	'ACL_CAT_POST'			=> 'Δημοσίευση',
	'ACL_CAT_POST_ACTIONS'	=> 'Δημοσίευσης ενέργειες',
	'ACL_CAT_POSTING'		=> 'Δημοσίευση',
	'ACL_CAT_PROFILE'		=> 'Προφίλ',
	'ACL_CAT_SETTINGS'		=> 'Ρυθμίσεις',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Θέματος ενέργειες',
	'ACL_CAT_USER_GROUP'	=> 'Μέλη &amp; Ομάδες',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Μπορεί να προβάλει προφίλ, λίστα μελών και τη λίστα σε σύνδεση',
	'ACL_U_CHGNAME'		=> 'Μπορεί να αλλάξει όνομα μέλους',
	'ACL_U_CHGPASSWD'	=> 'Μπορεί να αλλάξει κωδικό,',
	'ACL_U_CHGEMAIL'	=> 'Μπορεί να αλλάξει διεύθυνση ηλεκτρονικού ταχυδρομείου',
	'ACL_U_CHGAVATAR'	=> 'Μπορεί να αλλάξει άβαταρ',
	'ACL_U_CHGGRP'		=> 'Μπορεί να αλλάξει προεπιλεγμένη ομάδα',
	'ACL_U_CHGPROFILEINFO'	=> 'Μπορεί να αλλάξει τις πληροφορίες του πεδίου προφίλ',

	'ACL_U_ATTACH'		=> 'Μπορεί να προσθέσει συνημμένα αρχεία',
	'ACL_U_DOWNLOAD'	=> 'Μπορεί να μεταφορτώσει αρχεία',
	'ACL_U_SAVEDRAFTS'	=> 'Μπορεί να αποθηκεύσει προσχέδια',
	'ACL_U_CHGCENSORS'	=> 'Μπορεί να απενεργοποιήσει λογοκριτές λέξης',
	'ACL_U_SIG'			=> 'Μπορεί να χρησιμοποιήσει υπογραφή',

	'ACL_U_SENDPM'		=> 'Μπορεί να στείλει προσωπικά μηνύματα',
	'ACL_U_MASSPM'		=> 'Μπορεί να στείλει πολλαπλά προσωπικά μηνύματα σε μέλη και ομάδες',
	'ACL_U_MASSPM_GROUP'=> 'Μπορεί να στείλει μηνύματα σε ομάδες ',
	'ACL_U_READPM'		=> 'Μπορεί να διαβάσει προσωπικά μηνύματα',
	'ACL_U_PM_EDIT'		=> 'Μπορεί να επεξεργαστεί τα δικά του προσωπικά μηνύματα',
	'ACL_U_PM_DELETE'	=> 'Μπορεί να διαγράψει προσωπικά μηνύματα από το γραμματοκιβώτιο του',
	'ACL_U_PM_FORWARD'	=> 'Μπορεί να προωθήσει τα προσωπικά μηνύματα',
	'ACL_U_PM_EMAILPM'	=> 'Μπορεί να στείλει προσωπικά μηνύματα μέσω ηλεκτρονικού ταχυδρομείου',
	'ACL_U_PM_PRINTPM'	=> 'Μπορεί να εκτυπώσει προσωπικά μηνύματα',
	'ACL_U_PM_ATTACH'	=> 'Μπορεί να προσθέσει συνημμένα αρχεία στα προσωπικά μηνύματα',
	'ACL_U_PM_DOWNLOAD'	=> 'Μπορεί να μεταφορτώσει αρχεία στα προσωπικά μηνύματα',
	'ACL_U_PM_BBCODE'	=> 'Μπορεί να χρησιμοποιήσει BBCode στα προσωπικά μηνύματα',
	'ACL_U_PM_SMILIES'	=> 'Μπορεί να χρησιμοποιήσει εικονίδια smilies στα προσωπικά μηνύματα',
	'ACL_U_PM_IMG'		=> 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτα στα προσωπικά μηνύματα',
	'ACL_U_PM_FLASH'	=> 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτα στα προσωπικά μηνύματα',

	'ACL_U_SENDEMAIL'	=> 'Μπορεί να στείλει ηλεκτρονικά ταχυδρομεία',
	'ACL_U_SENDIM'		=> 'Μπορεί να στείλει στιγμιαία μηνύματα',
	'ACL_U_IGNOREFLOOD'	=> 'Μπορεί να αγνοήσει όριο αναμονής',
	'ACL_U_HIDEONLINE'	=> 'Μπορεί να κάνει απόκρυψη την κατάσταση σε απευθείας σύνδεση',
	'ACL_U_VIEWONLINE'	=> 'Μπορεί να βλέπει σε σύνδεση με απόκρυψη μέλη',
	'ACL_U_SEARCH'		=> 'Μπορεί να αναζητήσει στο σύστημα συζητήσεων',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Μπορεί να βλέπει τις Δ. Συζητήσεις',
	'ACL_F_READ'		=> 'Μπορεί να διαβάζει τις Δ. Συζητήσεις',
	'ACL_F_SEARCH'		=> 'Μπορεί να αναζητήσει στη Δ. Συζήτηση',
	'ACL_F_SUBSCRIBE'	=> 'Μπορεί να εγγραφεί σε συνδρομή Δ. Συζήτησης',
	'ACL_F_PRINT'		=> 'Μπορεί να εκτυπώσει θέματα',	
	'ACL_F_EMAIL'		=> 'Μπορεί να προτείνει θέματα μέσω ηλεκτρονικού τα ταχυδρομείου',
	'ACL_F_BUMP'		=> 'Μπορεί να θέσει θέματα ως νέα',
	'ACL_F_USER_LOCK'	=> 'Μπορεί να κλειδώσει θέματά του',
	'ACL_F_DOWNLOAD'	=> 'Μπορεί να μεταφορτώσει αρχεία',	
	'ACL_F_REPORT'		=> 'Μπορεί να αναφέρει δημοσιεύσεις',

	'ACL_F_POST'		=> 'Μπορεί να ξεκινήσει νέα θέματα',
	'ACL_F_STICKY'		=> 'Μπορεί να κάνει δημοσίευση σημείωση',
	'ACL_F_ANNOUNCE'	=> 'Μπορεί να κάνει δημοσίευση ανακοίνωση',
	'ACL_F_REPLY'		=> 'Μπορεί να απαντήσει σε θέματα',
	'ACL_F_EDIT'		=> 'Μπορεί να επεξεργαστεί δημοσιεύσεις του',
	'ACL_F_DELETE'		=> 'Μπορεί να διαγράψει δημοσιεύσεις του',
	'ACL_F_SOFTDELETE'	=> 'Μπορεί να σημειώσει ως διαγραμμένες δημοσιεύσεις του<br /><em>Συντονιστές, οι οποίοι έχουν το δικαίωμα να εγκρίνουν δημοσιεύσεις, μπορούν να επαναφέρουν σημειωμένες ως διαγραμμένες δημοσιεύσεις.</em>',
	'ACL_F_IGNOREFLOOD'	=> 'Μπορεί να αγνοήσει το όριο αναμονής',
	'ACL_F_POSTCOUNT'	=> 'Αύξηση δημοσιεύσεων μετρητή<br /><em>Παρακαλώ σημειώστε ότι αυτή η ρύθμιση έχει επιπτώσεις μόνο στις νέες δημοσιεύσεις.</em>',
	'ACL_F_NOAPPROVE'	=> 'Μπορεί να δημοσιεύσει χωρίς να εγκριθεί',

	'ACL_F_ATTACH'		=> 'Μπορεί να προσθέσει συνημμένα αρχεία',
	'ACL_F_ICONS'		=> 'Μπορεί να χρησιμοποιήσει εικονίδια θέματος / δημοσίευσης',
	'ACL_F_BBCODE'		=> 'Μπορεί να χρησιμοποιήσει BBCode',
	'ACL_F_FLASH'		=> 'Μπορεί να χρησιμοποιήσει [flash] BBCode ετικέτες',
	'ACL_F_IMG'			=> 'Μπορεί να χρησιμοποιήσει [img] BBCode ετικέτες',
	'ACL_F_SIGS'		=> 'Μπορεί να χρησιμοποιήσει υπογραφές',
	'ACL_F_SMILIES'		=> 'Μπορεί να χρησιμοποιήσει εικονίδια smilies',

	'ACL_F_POLL'		=> 'Μπορεί να δημιουργήσει δημοψηφίσματα',
	'ACL_F_VOTE'		=> 'Μπορεί να ψηφίσει σε δημοψηφίσματα',
	'ACL_F_VOTECHG'		=> 'Μπορεί να αλλάξει ψήφο',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Μπορεί να επεξεργαστεί δημοσιεύσεις',
	'ACL_M_DELETE'		=> 'Μπορεί να διαγράψει δημοσιεύσεις',
	'ACL_M_SOFTDELETE'	=> 'Μπορεί να σημειώσει δημοσιεύσεις ως διαγραμμένες<br /><em>Συντονιστές, οι οποίοι έχουν το δικαίωμα να εγκρίνουν δημοσιεύσεις, μπορούν να επαναφέρουν σημειωμένες ως διαγραμμένες δημοσιεύσεις.</em>',
	'ACL_M_APPROVE'		=> 'Μπορεί να εγκρίνει και επαναφέρει δημοσιεύσεις',
	'ACL_M_REPORT'		=> 'Μπορεί να κλείσει και διαγράψει αναφορές',
	'ACL_M_CHGPOSTER'	=> 'Μπορεί να αλλάξει συγγραφέα δημοσίευσης',

	'ACL_M_MOVE'	=> 'Μπορεί να μετακινήσει θέματα',
	'ACL_M_LOCK'	=> 'Μπορεί να κλειδώσει θέματα',
	'ACL_M_SPLIT'	=> 'Μπορεί να διαχωρίσει θέματα',
	'ACL_M_MERGE'	=> 'Μπορεί να συγχωνεύσει θέματα',

	'ACL_M_INFO'		=> 'Μπορεί να βλέπει λεπτομέρειες θεμάτων',
	'ACL_M_WARN'		=> 'Μπορεί να προειδοποιήσει<br /><em>Αυτή η ρύθμιση ανατίθεται μόνο συνολικά. Δεν είναι με βάση τη Δ. Συζήτηση.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Μπορεί να κλείσει και να διαγράψει αναφορές για προσωπικά μηνύματα<br /><em>Αυτή η ρύθμιση ανατίθεται μόνο συνολικά. Δεν είναι με βάση τη Δ. Συζήτηση.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> 'Μπορεί να διαχειριστεί αποκλεισμούς<br /><em>Αυτή η ρύθμιση ανατίθεται μόνο συνολικά. Δεν είναι με βάση τη Δ. Συζήτηση.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Μπορεί να αλλάξει ρυθμίσεις συστήματος συζητήσεων / έλεγχο για ενημερώσεις',
	'ACL_A_SERVER'		=> 'Μπορεί να αλλάξει τις ρυθμίσεις διακομιστή / επικοινωνίας',
	'ACL_A_JABBER'		=> 'Μπορεί να αλλάξει τις Jabber ρυθμίσεις',
	'ACL_A_PHPINFO'		=> 'Μπορεί να προβάλει τις php ρυθμίσεις',

	'ACL_A_FORUM'		=> 'Μπορεί να διαχειριστεί τις Δ. Συζητήσεις',
	'ACL_A_FORUMADD'	=> 'Μπορεί να προσθέσει νέες Δ. Συζητήσεις',
	'ACL_A_FORUMDEL'	=> 'Μπορεί να διαγράψει Δ. Συζητήσεις',
	'ACL_A_PRUNE'		=> 'Μπορεί να εκκαθαρίσει Δ. Συζητήσεις',

	'ACL_A_ICONS'		=> 'Μπορεί να αλλάξει θέματος / δημοσίευσης εικονίδια και εικονίδια smilies',
	'ACL_A_WORDS'		=> 'Μπορεί να αλλάξει λογοκριτές λέξεων',
	'ACL_A_BBCODE'		=> 'Μπορεί να καθορίσει BBCode ετικέτες',
	'ACL_A_ATTACH'		=> 'Μπορεί να αλλάξει τις σχετικές με συνημμένα ρυθμίσεις',

	'ACL_A_USER'		=> 'Μπορεί να διαχειριστεί μέλη<br /><em>Αυτό συμπεριλαμβάνει επίσης να δει τον πράκτορα του προγράμματος περιήγησης των μελών μέσα στη λίστα μέλη σε σύνδεση.</em>',
	'ACL_A_USERDEL'		=> 'Μπορεί να διαγράψει / εκκαθαρίσει μέλη',
	'ACL_A_GROUP'		=> 'Μπορεί να διαχειριστεί ομάδες',
	'ACL_A_GROUPADD'	=> 'Μπορεί να προσθέσει νέες ομάδες',
	'ACL_A_GROUPDEL'	=> 'Μπορεί να διαγράψει ομάδες',
	'ACL_A_RANKS'		=> 'Μπορεί να διαχειριστεί βαθμούς',
	'ACL_A_PROFILE'		=> 'Μπορεί να διαχειριστεί προσαρμοσμένα πεδία προφίλ',
	'ACL_A_NAMES'		=> 'Μπορεί να διαχειριστεί μη επιτρεπτά ονόματα',
	'ACL_A_BAN'			=> 'Μπορεί να διαχειριστεί αποκλεισμούς',

	'ACL_A_VIEWAUTH'	=> 'Μπορεί να προβάλει τα αποτελεσματικά δικαιώματα',
	'ACL_A_AUTHGROUPS'	=> 'Μπορεί να αλλάξει τις ρυθμίσεις μεμονωμένων ομάδων',
	'ACL_A_AUTHUSERS'	=> 'Μπορεί να αλλάξει τις ρυθμίσεις μεμονωμένων μελών',
	'ACL_A_FAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις των Δ. Συζητήσεων',
	'ACL_A_MAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις συντονιστών',
	'ACL_A_AAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις διαχειριστών',
	'ACL_A_UAUTH'		=> 'Μπορεί να αλλάξει τις γενικές ρυθμίσεις μελών',
	'ACL_A_ROLES'		=> 'Μπορεί να διαχειριστεί ρόλους',
	'ACL_A_SWITCHPERM'	=> 'Μπορεί να χρησιμοποιήσει άλλων δικαιώματα',

	'ACL_A_STYLES'		=> 'Μπορεί να διαχειριστεί στυλ',
	'ACL_A_EXTENSIONS'	=> 'Μπορεί να διαχειριστεί επεκτάσεις',
	'ACL_A_VIEWLOGS'	=> 'Μπορεί να προβάλει το ιστορικό',
	'ACL_A_CLEARLOGS'	=> 'Μπορεί να εκκαθαρίσει το ιστορικό',
	'ACL_A_MODULES'		=> 'Μπορεί να διαχειριστεί μονάδες',
	'ACL_A_LANGUAGE'	=> 'Μπορεί να διαχειριστεί πακέτα γλωσσών',
	'ACL_A_EMAIL'		=> 'Μπορεί να στείλει μαζικό ηλεκτρονικό ταχυδρομείο',
	'ACL_A_BOTS'		=> 'Μπορεί να διαχειριστεί bots',
	'ACL_A_REASONS'		=> 'Μπορεί να διαχειριστεί αναφορές / λόγους απόρριψης',
	'ACL_A_BACKUP'		=> 'Μπορεί να κάνει αντίγραφο ασφαλείας / επαναφορά βάσης',
	'ACL_A_SEARCH'		=> 'Μπορεί να διαχειριστεί συστήματα υποστήριξης αναζήτησης και ρυθμίσεις',
));

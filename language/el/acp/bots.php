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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Διαχείριση bots',
	'BOTS_EXPLAIN'		=> '“Bots”, “spiders” ή “crawlers” είναι αυτόματοι πράκτορες που χρησιμοποιούνται συνήθως από τις μηχανές αναζήτησης για να ενημερώσουν τις βάσεις δεδομένων των. Δεδομένου ότι σπανίως κάνουν σωστή χρήση των συνόδων μπορούν να νοθεύσουν τις μετρήσεις επισκεπτών, να αυξήσουν το φορτίο και μερικές φορές αποτυγχάνουν να ευρετηριοποιήσουν ιστοσελίδες σωστά. Εδώ μπορείτε να ορίσετε έναν ειδικό τύπο του μέλους να ξεπεράσει αυτά τα προβλήματα.',
	'BOT_ACTIVATE'		=> 'Ενεργοποίηση',
	'BOT_ACTIVE'		=> 'Ενεργό bot',
	'BOT_ADD'			=> 'Προσθήκη bot',
	'BOT_ADDED'			=> 'Το νέο bot προστέθηκε με επιτυχία.',
	'BOT_AGENT'			=> 'Ταυτοποίηση πράκτορα',
	'BOT_AGENT_EXPLAIN'	=> 'Μια συμβολοσειρά που αντιστοιχεί στον πράκτορα bot, επιμέρους αντιστοιχίες επιτρέπονται.',
	'BOT_DEACTIVATE'	=> 'Απενεργοποίηση',
	'BOT_DELETED'		=> 'Το bot διαγράφηκε με επιτυχία.',
	'BOT_EDIT'			=> 'Επεξεργασία bots',
	'BOT_EDIT_EXPLAIN'	=> 'Εδώ μπορείτε να προσθέσετε ή να επεξεργαστείτε μια υπάρχουσα καταχώρηση bot. Μπορείτε να ορίσετε μια συμβολοσειρά πράκτορα και / ή μια ή περισσότερες διευθύνσεις IP (ή εύρος διευθύνσεων) για ταυτοποίηση. Μπορείτε επίσης να ορίσετε ένα στυλ και μια γλώσσα τα οποία το bot θα χρησιμοποιεί για προβάλλει το σύστημα συζητήσεων. Αυτό μπορεί να σας επιτρέψει να μειωθεί το εύρος ζώνης που χρησιμοποιείται ορίζοντας ένα απλό στυλ για bot. Θυμηθείτε να δώσετε τις απαραίτητες προσβάσεις για την ειδική ομάδα bot.',
	'BOT_LANG'			=> 'Bot γλώσσα',
	'BOT_LANG_EXPLAIN'	=> 'Η γλώσσα που παρουσιάζεται στο bot καθώς περιηγείται.',
	'BOT_LAST_VISIT'	=> 'Τελευταία επίσκεψη',
	'BOT_IP'			=> 'Bot IP διεύθυνση',
	'BOT_IP_EXPLAIN'	=> 'Τμηματικές διευθύνσεις επιτρέπονται, διαχωρίστε διευθύνσεις με κόμμα.',
	'BOT_NAME'			=> 'Bot όνομα',
	'BOT_NAME_EXPLAIN'	=> 'Χρησιμοποιείται μόνο για δική σας πληροφόρηση.',
	'BOT_NAME_TAKEN'	=> 'Το όνομα είναι ήδη σε χρήση στο σύστημα συζητήσεων σας και δεν μπορεί να χρησιμοποιηθεί για το Bot.',
	'BOT_NEVER'			=> 'Ποτέ',
	'BOT_STYLE'			=> 'Bot στυλ',
	'BOT_STYLE_EXPLAIN'	=> 'Το στυλ που θα χρησιμοποιείται στο σύστημα συζητήσεων από το bot.',
	'BOT_UPDATED'		=> 'Το υφιστάμενο bot ενημερώθηκε με επιτυχία.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Ο πράκτορας bot που παρείχατε είναι παρόμοιος με αυτόν που χρησιμοποιείτε αυτήν τη στιγμή. Παρακαλούμε προσαρμόσετε τον πράκτορα για αυτό το bot.',
	'ERR_BOT_NO_IP'				=> 'Οι διευθύνσεις IP που παρείχατε ήταν άκυρες ή το όνομα εξυπηρετητή δεν μπόρεσε να βρεθεί.',
	'ERR_BOT_NO_MATCHES'		=> 'Πρέπει να εισάγετε τουλάχιστον ένα εκ των δύο πράκτορα ή διεύθυνση IP για την ταυτοποίηση αυτού του bot.',

	'NO_BOT'		=> 'Δεν βρέθηκε bot με την καθορισμένη ταυτότητα.',
	'NO_BOT_GROUP'	=> 'Αδυναμία εύρεσης ειδικής ομάδας bot.',
));
